<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'date'=>'required|date|date_format:Y-m-d|after_or_equal:today',
            'time'=>'required|date_format:H:i',
            'hours'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return[
            'required'=>'This Field Is Required',
            'date'=>'Please Enter Valid Date',
        ];
    }
}
