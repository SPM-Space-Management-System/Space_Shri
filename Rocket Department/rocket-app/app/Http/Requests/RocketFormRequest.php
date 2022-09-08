<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RocketFormRequest extends FormRequest
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

            'title' => [
                'required',
                'string',
                'max:191'
            ],
            'country' => [
                'required',
                'string',
                'max:191'
            ],
            'height' => [
                'required',
                'numeric'
            ],
            'stages' => [
                'required',
                'numeric'
            ],
            'date' => [
                'required',
                'date'
            ],
            'status' => [
                'required',
                'string',
                'max:191'
            ],
            'images' => [
                'required'
            ],
        ];

        return $rules;
    } 

    public function messages() {

        return [
            'title.required' => 'Please enter rocket name',
            'country.required' => 'Please enter country of origin',
            'height.required' => 'Please enter rocket height',
            'stages.required' => 'Please enter no of rocket stages',
            'date.required' => 'Please enter first flight date',
            'status.required' => 'Please enter rocket status',
            'images.required' => 'Please select image',
        ];
    }

}
