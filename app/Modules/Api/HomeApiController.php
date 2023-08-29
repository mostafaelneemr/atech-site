<?php

namespace App\Modules\Api;


use App\Libs\AreasData;
use App\Models\Ads;
use App\Models\Area;
use App\Models\Contactus;
use App\Models\Newsletter;
use App\Models\Page;
use App\Models\Property;
use App\Models\PropertyAds;
use App\Models\PropertyFeatures;
use App\Models\PropertyType;
use App\Models\Service;
use App\Models\Slider;
use App\Modules\Api\Transformers\HomeTransformer;
use App\Modules\Api\Transformers\PropertyTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class HomeApiController extends ApiController
{

    public function __construct(){
        $this->middleware(['auth:api'])->except([
            'home','data','page','services','service_details','contactus','area','subscribe'
        ]);

    }
    public function search_area(Request $request){
        $word = $request->word;

        $data = Area::where(function($query) use ($word) {
            $query->where('name_ar','LIKE','%'.$word.'%')
                ->orWhere('name_en','LIKE','%'.$word.'%');
        })->get([
            'id'
        ]);

        if($data->isEmpty()){
            return [];
        }

        $result = [];

        foreach ($data as $key => $value){
            $result[] = [
                'id'=> $value->id,
                'value'=> str_replace($word,$word,implode(' -> ',AreasData::getAreasUp($value->id,true) ))
            ];

            if(setting('area_select_type') == '2'){
                $areaDown = AreasData::getAreasDown($value->id);
                if(count($areaDown) > 1){
                    array_shift($areaDown);
                    foreach ($areaDown as $aK => $aV){
                        $result[] = [
                            'id'=> $aV,
                            'value'=> str_replace($word,$word,implode(' -> ',AreasData::getAreasUp($aV,true) ))
                        ];
                    }
                }
            }

        }

        return $this->success('Done', $result);
    }

    public function home()
    {
        if (Auth::check()) {
            dd(Auth::id());
        }



        $PropertyTransformer = new PropertyTransformer();
        $HomeTransformer = new HomeTransformer();

        $slider_mob = Slider::select('video_url', 'title_' . lang().' as title', 'description_' . lang().' as description', 'url','image')
             ->where('status', 'active')->where('type','main_mob')->get();
        $slider_web = Slider::select('video_url', 'title_' . lang().' as title', 'description_' . lang().' as description', 'url','image')
            ->where('status', 'active')->where('type','main_web')->get();

        $property_ads_ids = PropertyAds::block()->pluck('id');
        if(empty($property_ads_ids)){
            $property_ads = [];
        }else {
            $property_ads = Property::block()->whereIn('id', $property_ads_ids)->limit(10)->get();
        }

        $property = Property::block()->whereNotIn('id', $property_ads_ids)->limit(10)->get();
        $services = Service::block()->limit(10)->get();


        $data = [
             'slider_mob'=>$HomeTransformer->transformCollection($slider_mob->toArray(),lang(),'slider'),
             'slider_web'=>$HomeTransformer->transformCollection($slider_web->toArray(),lang(),'slider'),
            'property'=>$PropertyTransformer->transformCollection($property->toArray(),lang(),'block'),
            'property_ads'=>(!empty($property_ads->toArray()))?$PropertyTransformer->transformCollection($property_ads->toArray(),lang(),'block'):[],
            'services'=>$HomeTransformer->transformCollection($services->toArray(),lang(),'services'),
        ];
        $data['ads'] = Ads::select('title_'.lang().' as title', 'type', 'image', 'url', 'page')->where('page', 'home')->get();
        $data['about'] = Page::select('id', 'title_' . lang().' as title','content_' . lang().' as content',
            'meta_key_' . lang().' as meta_key', 'meta_description_' . lang().' as meta_description','video_url')->find(1);

        return $this->success('Done', $data);

    }

    public function data()
    {
        $HomeTransformer = new HomeTransformer();
        $PropertyTransformer = new PropertyTransformer();
        $property_type = PropertyType::select('id', 'name_' . lang().' as name','image')->get();
        $data['property_type'] =  $PropertyTransformer->transformCollection($property_type->toArray(),lang(),'type');
        $data['services'] = Service::get(['id', 'title_' . lang().' as title', 'slug_' . lang().' as slug']);
        $data['pages'] = Page::get(['id', 'title_' . lang().' as title', 'slug_' . lang().' as slug']);
         $data['countries'] = Area::select('id','name_'.lang().' as name')->where('area_type_id',1)->orderBy('name')->get() ;
         $data['governments'] = Area::select('id','name_'.lang().' as name')->where('area_type_id',2)->orderBy('name')->get() ;

        $data['social_links'] = [
            'facebook'=>setting('facebook'),
            'youtube'=>setting('youtube'),
            'twitter'=>setting('twitter'),
            'email'=>setting('company_email'),
            'instagram'=>setting('instagram'),
            'linkedin'=>setting('linkedin'),
            'address'=>setting('company_address'),
            'mobile'=>setting('company_mobile'),
            'location'=>setting('location')
        ];
        $data['property_features'] = PropertyFeatures::select('id','name_'.lang().' as name')->get();
        $slider = Slider::select( 'title_' . lang().' as title', 'description_' . lang().' as description','image')
            ->where('status', 'active')->where('type','board')->get();
        $data['board'] = $HomeTransformer->transformCollection($slider->toArray(),lang(),'board') ;
        $data['footer_about'] = setting('footer_about_'.lang()) ;
        return $this->success('Done', $data);
    }

    public function page(Request $request)
    {
        $input = $request->only('id');

        $validator = Validator::make($input, [
            'id' => 'int|required|exists:pages,id'
        ]);
        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }


        $HomeTransformer = new HomeTransformer();

        $data['page'] = $HomeTransformer->page(Page::block()->find($request->id),lang());
        if($request->id == 1){
            $data['about_list'] = [
                [
                'title' =>'يثق بنا الكثير',
                 'image' =>'http://test.osouly.com/public/osouly/images/trust.svg',
                 'description' =>'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات.',
                    ],
                [
                    'title' =>'الكثير من الوحدات',
                    'image' =>'http://test.osouly.com/public/osouly/images/rental.svg',
                    'description' =>'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات.',
                ],
                [
                    'title' =>'الإيجارات رقم',
                    'image' =>'http://test.osouly.com/public/osouly/images/rent.svg',
                    'description' =>'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات.',
                ]
            ];
        }
        return $this->success('Done', $data);
    }

    public function services()
    {
        $HomeTransformer = new HomeTransformer();
        $data= $HomeTransformer->transformCollection(Service::block()->paginate()->toArray(),lang(),'services');
        return $this->success('Done', $data);
    }

    public function service_details(Request $request)
    {

        $input = $request->only('id');

        $validator = Validator::make($input, [
            'id' => 'int|required|exists:services,id'
        ]);
        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }
        $service = Service::block()->find($request->id);

        $HomeTransformer = new HomeTransformer();

        return $this->success('Done',$HomeTransformer->service_details($service->toArray(),lang()) );

    }

    public function contactus(Request $request)
    {
        $input = $request->only('name','email','mobile','subject','message');

        $validator = Validator::make($input, [
            'name' => 'string|required',
            'email' => 'string|email|required',
            'mobile' => 'string|required',
            'subject' => 'string|required',
            'message' => 'string|required',
        ]);
        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }

        $send =Contactus::create($input);
        if($send){
            return $this->success(__('Message Sent'));
        }else{
            return $this->fail(__('Please Try Again later'));
        }

    }

    public function area(Request $request){
        $input = $request->only('id');

        $validator = Validator::make($input, [
            'id' => 'int|required|exists:areas,id'
        ]);
        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }

        $child_areas = Area::where('parent_id',$input['id'])->select('id','name_'.lang().' as name')->get();

        return $this->success('Done', $child_areas);
    }

    public function subscribe(Request $request){

        $input = $request->only('email');

        $validator = Validator::make($input, [
            'email' =>  'string|email|required',
        ]);
        if ($validator->fails()) {
            return $this->fail('Validation Error.', $validator->errors());
        }

        $check = Newsletter::where('email',$input['email'])->first();

        if($check){
            return $this->fail('Email Already Subscribed');
        }

        $Subscribe = Newsletter::create(['email'=>$input['email']]);
        if($Subscribe){
            return $this->success('Email subscribe successfully');
        }else{
            return $this->fail('Please Try again later');
        }

    }

}