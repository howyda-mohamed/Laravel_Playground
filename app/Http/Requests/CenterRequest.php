<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CenterRequest extends FormRequest
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
            'phone'=>'required|max:20',
            'location'=>'required',
            'image'=>'mimes:jpg,jpeg,png|max:400',
            'play_number'=>'required|numeric|max:10',
        ];
    }
    public function messages()
    {
        return[
            'required'=>'This Field Is Required',
            'title.max'=>'This Field Must Be Smaller Than 255',
            'image.max'=>'This Field Must Be Smaller Than 400',
            'phone.max'=>'This Field Must Be Smaller Than 20',
            'play_number.numeric'=>'This Field Must Be Number',
            'play_number.max'=>'This Field Must Be Smaller Than 10',
        ];
    }
}
