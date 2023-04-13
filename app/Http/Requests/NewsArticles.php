<?php

namespace App\Http\Requests;

use App\Rules\PanNoValidate;
use App\Rules\Validateaddhar;
use App\Rules\ValidateaddharVerify;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class NewsArticles extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'tile' => ['required']
        ];
    }
    public function messages()
    {
        
    }

    public function attributes()
    {
       
    }
}
