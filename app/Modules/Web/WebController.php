<?php

namespace App\Modules\Web;

use App\Http\Controllers\Controller;
use App\Models\admin\Slider;
use App\Models\admin\Testimonial;
use App\Models\admin\Blog;
use App\Models\admin\Brand;
use App\Models\admin\Certificate;
use App\Models\admin\Client;
use App\Models\admin\PortfolioItem;
use App\Models\admin\Project;
use App\Models\OurActive;

class WebController extends Controller{

    protected $viewData = [];

    protected function view($file,array $data = []){
        return view('web.'.$file,$data);
    }

    protected function response($status,$code = '200',$message = 'Done',$data = []): array {
        return [
            'status'=> $status,
            'code'=> $code,
            'message'=> $message,
            'data'=> $data
        ];
    }

    public function index(){
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        $this->viewData['testimonials'] = Testimonial::orderBy('id', 'ASC')->get(); 
        $this->viewData['brands'] = Brand::get(); 
        $this->viewData['certificates'] = Certificate::get(); 
        $this->viewData['blogs'] = Blog::paginate(3); 
        $this->viewData['clients'] = Client::orderBy('id', 'ASC')->paginate(18); 
        $this->viewData['activities'] = OurActive::orderBy('id', 'ASC')->paginate(8); 

        $this->viewData['categories'] = Project::distinct('category')->pluck('category');
        $this->viewData['items'] = Project::orderBy('id', 'ASC')->paginate(6);
        
        return $this->view('index', $this->viewData);
    }

    public function about()
    {
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        $this->viewData['testimonials'] = Testimonial::get(); 
        $this->viewData['clients'] = Client::get(); 

        return $this->view('about', $this->viewData);
    }

    public function service()
    {
        $this->viewData['items'] = Project::orderBy('id', 'ASC')->get();
        $this->viewData['activities'] = OurActive::orderBy('id', 'ASC')->get(); 
        return $this->view('service',$this->viewData);
    }

    public function blogs()
    {
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        $this->viewData['blogs'] = Blog::all();
        return $this->view('blogs', $this->viewData);
    }

    public function blogSlug($slug)
    {
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        $this->viewData['blog'] = Blog::where('slug', $slug)->first();
        // return $this->viewData['blogs'];
        return $this->view('blog_slug', $this->viewData);
    }

    public function project()
    {
        $this->viewData['categories'] = Project::distinct('category')->pluck('category');
        $this->viewData['items'] = Project::all();
        return $this->view('projects', $this->viewData);
    }

    public function ProjectSlug($slug)
    {
        $this->viewData['project'] = Project::where('slug', $slug)->first();
        return $this->view('project_slug', $this->viewData);
    }

    public function contact(){
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        return $this->view('contact', $this->viewData);
    }

}