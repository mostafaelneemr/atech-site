<?php

namespace App\Modules\System;

use App\Http\Requests\ImageFormRequest;
use App\Models\admin\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;


class BrandController extends SystemController
{
    public function index(Request $request)
    {
        if ($request->datatable) {
            $data =  Brand::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($data) {
                    $imagePath = asset($data->image); 
                    return '<img src="' . $imagePath . '" alt="Slider Image" width="100" height="100">'; 
                })
                ->addColumn('action', function ($data) {
                    return '<span class="dropdown">
                            <a href="#" class="btn btn-md btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                              <i class="la la-gear"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-36px, 25px, 0px);">
                                <a class="dropdown-item" href="javascript:void(0);" onclick="deleteBrand(\'' . route( 'brands.destroy', $data->id ) . '\')"><i class="la la-trash"></i> '.__('Delete').'</a>
                            </div>
                        </span>';
                })
                ->rawColumns(['image','action'])
                ->make('true');
        }

        if($request->withTrashed){
            $this->viewData['pageTitle'] = __('Deleted Brand');
        }else{
            $this->viewData['pageTitle'] = __('Brands');
        }
        $this->viewData['breadcrumb'][] = [ 'text'=> __('brand') ];
    
        return $this->view('brands.index', $this->viewData);
    }

    public function store(ImageFormRequest $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(81, 80)->save('upload/about/' . $name_gen);
        $save_url = 'upload/about/' . $name_gen;
        Brand::create(['image' => $save_url]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect::route('brands.index')->with($notification);

    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $image = Str::after($brand->image, 'upload/about/');
        $image = public_path('upload/about/' . $image);
        unlink($image);
        $brand->delete();

        $message = __( 'brand is deleted successfully' );
        return $this->response(true, 200, $message );
    }

    public function inActiveBrand($id)
    {
        Brand::findOrFail($id)->update(['is_publish' => 'in-active']);
        $notification = array(
            'message' => 'Brand is Inactive',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveBrand($id)
    {
        Brand::findOrFail($id)->update(['is_publish' => 'active']);
        $notification = array(
            'message' => 'Brand is Active',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
