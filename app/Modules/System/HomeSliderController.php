<?php

namespace App\Modules\System;

use App\Http\Requests\SliderRequest;
use App\Models\admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class HomeSliderController extends SystemController
{
    CONST SLIDER_TYPE = 'home';

    public function index(Request $request)
    {
        if ($request->datatable) {
            $data =  Slider::where('slider_type', self::SLIDER_TYPE)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($data) {
                    $imagePath = asset($data->image); 
                    return '<img src="' . $imagePath . '" alt="Slider Image" width="300" height="100">'; 
                })
                ->addColumn('action', function ($data) {
                    return '<span class="dropdown">
                            <a href="#" class="btn btn-md btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-gear"></i>
                            </a>
                            <div class="dropdown-menu '.( (\App::getLocale() == 'ar') ? 'dropdown-menu-left' : 'dropdown-menu-right').'" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                                <a class="dropdown-item" href="'.route('home-slider.edit',$data->id).'"><i class="la la-edit"></i> '.__('Edit').'</a>
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteSlider(\'' . route( 'home-slider.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['image','action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Slider');
        }else{
            $this->viewData['pageTitle'] = __('Sliders');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('slider') ];
        if (Slider::where('slider_type', self::SLIDER_TYPE)->count() < 1) {
            $this->viewData['add_new'] = [ 'text'=> __('Add Slider'), 'route'=> 'home-slider.create'];
        }
        
        return $this->view('home.slider.index', $this->viewData);
    }

    public function create()
    {
        $this->viewData['pageTitle'] = __('Create Slider');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('slider') ];
        return $this->view('home.slider.create', $this->viewData);
    }

    public function store(SliderRequest $request)
    {
       try{
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1000)->save('upload/home/' . $name_gen);
            $save_url = 'upload/home/' . $name_gen;

            Slider::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'desc' => $request->desc,
                'slider_type' => static::SLIDER_TYPE,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'slider Inserted Successfully',
                'alert-type' => 'success',
            );
            return redirect::route('home-slider.index')->with($notification);
       }catch (\Exception $e) {
           return redirect::back()->withErrors(['errors' => $e->getMessage()]);
       }
    }

    public function show($id)
    {
        return back();
    }

    public function edit($id)
    {
        $this->viewData['sliders'] = Slider::findOrFail($id);
        $this->viewData['pageTitle'] = __('Edit Slider');
        return $this->view('home.slider.edit', $this->viewData);
    }

    public function update(SliderRequest $request, $id)
    {
        try {
            $id = $request->id;
            $old_image = $request->old_image;

            if($request->file('image')){
                @unlink($old_image);
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(1920,1000)->save('upload/home/'.$name_gen);
                $save_url = 'upload/home/'.$name_gen;
                Slider::findOrFail($id)->update(['image' => $save_url]);
            }

            Slider::findOrFail($id)->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'desc' => $request->desc,
            ]);

            $notification = array(
                'message' => 'slider updated Successfully',
                'alert-type' => 'info',
            );
            return redirect::route('home-slider.index')->with($notification);
        } catch (\Exception $e) {
            return redirect::back()->withErrors(['errors' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $image = Str::after($slider->image, 'upload/home/');
        $image = public_path('upload/home/' . $image);
        unlink($image);
        $slider->delete();

        $message = __( 'Slider deleted successfully' );
        return $this->response(true, 200, $message );
    }

    // public function InactiveSlider($id)
    // {
    //     Slider::findOrFail($id)->update(['is_publish' => 'in-active']);
    //     $notification = array(
    //         'message' => 'Slider is Inactive',
    //         'alert-type' => 'info',
    //     );

    //     return redirect()->back()->with($notification);
    // }

    // public function ActiveSlider($id)
    // {
    //     Slider::findOrFail($id)->update(['is_publish' => 'active']);
    //     $notification = array(
    //         'message' => 'Slider is Active',
    //         'alert-type' => 'success',
    //     );

    //     return redirect()->back()->with($notification);
    // }
}