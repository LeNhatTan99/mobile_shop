<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUpdateProductRequest extends FormRequest
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
            'name'=>['required','string'],
            'price'=>['required','numeric'],
            'discount'=>['required','numeric'],
            'color'=>['required','string'],
            'thumbnail'=>['required','string','mimes:jpg,jpeg,png,gif|max:2048'],
            'description'=>['required','string','min:15'],
            'status'=>['boolean'],
            'inventory'=>['required','between:0,1000'],
        ];
    }
}
