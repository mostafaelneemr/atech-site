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
        $this->viewData['testimonials'] = Testimonial::get(); 
        $this->viewData['brands'] = Brand::get(); 
        $this->viewData['certificates'] = Certificate::get(); 
        $this->viewData['blogs'] = Blog::get(); 
        $this->viewData['clients'] = Client::get(); 

        $this->viewData['categories'] = Project::distinct('category')->pluck('category');
        $this->viewData['items'] = Project::all();
        
        return $this->view('index', $this->viewData);
    }

    public function blog($slug)
    {
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        $this->viewData['blogs'] = Blog::where('slug', $slug)->get();
        return $this->view('slug', $this->viewData);
    }

    public function Blogs()
    {
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        $this->viewData['blogs'] = Blog::all();
        return $this->view('blogs', $this->viewData);
    }

    public function about()
    {
        $this->viewData['testimonials'] = Testimonial::get(); 
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 

        return $this->view('about', $this->viewData);
    }

    public function service()
    {
        return $this->view('service');
    }

    public function contact(){
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        return $this->view('contact', $this->viewData);
    }

    public function ProjectSlug($slug)
    {
        $this->viewData['projects'] = Project::where('slug', $slug)->get();
        return $this->view('project_slug', $this->viewData);
    }

}