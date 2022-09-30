<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'title'=>'required|string|max:255',
            'sub_title'=>'required|string|max:255',
            'phone'=>'required|max:20',
            'description'=>'required',
            'location'=>'required',
            'email'=>'required|email|max:255',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'This Field Is Required',
            'title.max'=>'Title must be smaller than 255',
            'sub_title.max'=>'Title must be smaller than 255',
            'phone.max' =>'Price must be smaller than 20',
            'email.email'=>'This Field Must Be Vaild Email'
        ];
    }
}
