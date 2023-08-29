<?php

namespace App\Modules\Web;

use App\Http\Controllers\Controller;
use App\Models\admin\Slider;
use App\Models\admin\Testimonial;

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
        return $this->view('index', $this->viewData);
    }

    public function about()
    {
        return $this->view('about');
    }

    public function contact(){
        // $this->viewData['testimonials'] = Testimonial::get(); 
        return $this->view('contact');
    }

}