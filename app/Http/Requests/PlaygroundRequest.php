<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaygroundRequest extends FormRequest
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
            'image' =>'mimes:jpg,jpeg,png',
            'title'=>'required|string|max:255',
            'price'=>'required|string|max:50',
            'description'=>'required',
            'center_id'=>'required|exists:centers,id',
        ];
    }
    public function messages()
    {
        return [
            'required'=>'This Field Is Required',
            'title.max'=>'Title must be smaller than 255',
            'price.max' =>'Price must be smaller than 50',
            'center_id.exists'=>'This field Must be Exist In Centers Table',
        ];
    }
}
