<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
        return [
            'name'=>"required|max:255",
            'job'=>"required|max:255",
            'image'=>'mimes:jpg,jpeg,png',
        ];
    }
    public function messages()
    {
        return[
            'required'=>'This Field Is Required',
            'max'=>'This Field Must Be Smaller Than 255',
        ];
    }
}
