<?php

namespace App\Modules\System;

use App\Models\admin\Active_section;
use Illuminate\Http\Request;

class ActiveSectionController extends SystemController
{
    public function index()
    {
        $this->viewData['pageTitle'] = __('Activation Site');
        $this->viewData['breadcrumb'][] = [ 'text'=> __('active and deactive') ];

        return $this->view('activation.index', $this->viewData);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'value' => 'in:1,0',
        ]);
        Active_section::where('name' , $request->name)->update([ 'value' => $request->value ]);
    }
}

