<?php

namespace App\Modules\System;

use App\Models\admin\SeoSetting;
use Illuminate\Http\Request;

class SEOController extends SystemController
{
    public function index()
    {
        $this->viewData['seosetting'] = SeoSetting::first();
        return $this->view('seo_setting.index',$this->viewData);
    }

    public function update(Request $request, $id)
    {
        try {
            
            $this->validate($request, [
                'author' => 'required|max:255',
                'revisit' => 'required',
                'sitemap' => 'required',
                'description' => 'required',
            ]);
        
            $seosetting = SeoSetting::first();
        
            $keywordArray = array();
            if ($request->keyword[0] != null) {
                foreach (json_decode($request->keyword[0]) as $key => $keywordObject) {
                    array_push($keywordArray, $keywordObject->value);
                }
            }
        
            $seosetting->keyword = implode(',', $keywordArray);
            $seosetting->title = $request->title;
            $seosetting->author = $request->author;
            $seosetting->revisit = $request->revisit;
            $seosetting->sitemap_link = $request->sitemap;
            $seosetting->description = $request->description;
        
            $seosetting->brands_meta_title = $request->brands_meta_title;
            $seosetting->brands_meta_description = $request->brands_meta_description;
        
            $seosetting->blog_meta_title = $request->blog_meta_title;
            $seosetting->blog_meta_description = $request->blog_meta_description;
            
            $seosetting->project_meta_title = $request->project_meta_title;
            $seosetting->project_meta_description = $request->project_meta_description;
            $seosetting->save();
            // if () {
                    $notification = array(
                        'message' => 'SEO Setting has been updated successfully',
                        'alert-type' => 'success',
                    );
                return redirect()->route('seosetting.index')->with($notification);
            // }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['errors' , $e->getMessage()]);
        }

    }
}
