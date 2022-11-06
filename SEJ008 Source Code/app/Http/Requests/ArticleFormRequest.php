<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [

            'topic' => [
                'required',
                'string',
                'max:191'
            ],
            'author' => [
                'required',
                'string',
                'max:191'
            ],
            'date' => [
                'required',
                'date'
            ],
            'country' => [
                'required',
                'string',
                'max:191'
            ],
            'description' => [
                'required',
                'string',
                
            ],
            'images' => [
                'required'
            ],
        ];

        return $rules;
    } 

    public function messages() {

        return [
            'topic.required' => 'Please enter topic here',
            'author.required' => 'Please enter author name here',
            'date.required' => 'Please enter date here',
            'country.required' => 'Please enter country of origin',
            'description.required' => 'Please enter description here',
            'images.required' => 'Please select image',
        ];
    }
}
