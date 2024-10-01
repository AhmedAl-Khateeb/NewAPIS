<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title'=>'required|string|max:15|min:5',
            'description' =>'required|string|max:200|min:15',
            'link'=> 'required|url'
        ];
    }


    public function messages(){

        return [
           'title.required'=>'The title is required',
           'title.string'=>'The title must be string',
           'title.max'=>'The title must be a greater than 15 characters',
           'title.min'=>'The title must be a least than 5 characters',

           'description.required' => 'The description is required.',
           'description.string' => 'The description must be a string.',
           'description.max' => 'The description may not be greater than 200 characters.',
           'description.min' => 'The description must be at least 15 characters.',

           'link.required' => 'The link is required.',
           'link.url' => 'The link must be a valid URL.',
           'link.max' => 'The link may not be greater than 255 characters.',
        ];
    }
}
