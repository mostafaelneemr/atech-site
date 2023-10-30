<?php

namespace App\Modules\Web;

use App\Http\Controllers\Controller;
use App\Models\admin\Active_section;
use App\Models\admin\Slider;
use App\Models\admin\Testimonial;
use App\Models\admin\Blog;
use App\Models\admin\Brand;
use App\Models\admin\Certificate;
use App\Models\admin\Client;
use App\Models\admin\Project;
use App\Models\OurActive;

class WebController extends Controller{

    public function index(){
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        $this->viewData['testimonials'] = Testimonial::orderBy('id', 'ASC')->get(); 
        $this->viewData['brands'] = Brand::get(); 
        $this->viewData['certificates'] = Certificate::orderBy('sort' , 'ASC')->paginate(6); 
        $this->viewData['blogs'] = Blog::orderBy('id' , 'DESC')->paginate(3); 
        $this->viewData['clients'] = Client::orderBy('id', 'ASC')->paginate(18); 
        $this->viewData['activities'] = OurActive::with('fontawsome')->orderBy('sort', 'ASC')->paginate(8); 

        $this->viewData['categories'] = Project::distinct('category')->pluck('category');
        $this->viewData['items'] = Project::orderBy('sort', 'ASC')->paginate(6);
        
        return $this->view('index', $this->viewData);
    }

    public function about()
    {
        if (Active_section::where('name' , 'about_page')->first()->value == 0 ) {
            abort(404);
        }
        $this->viewData['sliders'] = Slider::where('slider_type', 'home')->get(); 
        $this->viewData['testimonials'] = Testimonial::get(); 
        $this->viewData['clients'] = Client::get(); 

        return $this->view('about', $this->viewData);
    }

    public function service()
    {
        if (Active_section::where('name' , 'service_page')->first()->value == 0 ) {
            abort(404);
        }
        $this->viewData['items'] = Project::orderBy('id', 'ASC')->get();
        $this->viewData['activities'] = OurActive::with('fontawsome')->orderBy('id', 'ASC')->get(); 

        return $this->view('service',$this->viewData);
    }

    public function blogs()
    {
        if (Active_section::where('name' , 'blog_page')->first()->value == 0 ) {
            abort(404);
        }
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
        if (Active_section::where('name' , 'project_page')->first()->value == 0 ) {
            abort(404);
        }
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