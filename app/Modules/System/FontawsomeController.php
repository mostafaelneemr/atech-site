<?php

namespace App\Modules\System;

use App\Models\admin\Fontawsome;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;


class FontawsomeController extends SystemController
{
    public function index()
    {
        $this->viewData['fontawsomes'] = Fontawsome::all();
        return $this->view('fontawsome.index', $this->viewData);
    }

    public function destroy($id)
    {
        $fontawsome = Fontawsome::findOrFail($id);
        $fontawsome->delete();

        $message = __( 'fontawsome is deleted successfully' );
        return $this->response(true, 200, $message );
    }
}
