<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // switch($this->method())
        // {
        //     case 'GET':
        //     case 'DELETE':
        //     {
        //         return [];
        //     }
        //     case 'POST': {
                return [
                    'image' => 'required|image|mimes:jpeg,png,jpg',
                ];

        //     }
        //     case 'PUT':
        //     case 'PATCH':
        //     {

        //         return [
        //             'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        //         ];
        //     }
        //     default:break;
        // }
    }
}
