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
        ];

        return $rules;
    } 

    public function messages() {

        return [
            'title.required' => 'Please enter Rocket Name',
            'country.required' => 'Please enter Country of Origin',
            'height.required' => 'Please enter Rocket Height',
            'stages.required' => 'Please enter No of Rocket Stages',
            'date.required' => 'Please enter First Flight Date',
            'status.required' => 'Please enter Rocket Status',
        ];
    }

}
