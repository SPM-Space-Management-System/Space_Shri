<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'jobtitile' => [
                'required',
                'string',
                'max:191'
            ],
            'P_date' => [
                'required',
            ],
            'Summary' => [
                'required',
                'text',

            ],
            'Requirements' => [
                'required',
                'text',

            ],
            'image_id' => [
                'required',


            ],
            'NOV' => [
                'required',
                'numeric',
                'max:191'
            ],

            'C_date' => [],


            'Duties' => [
                'required',
                'text',

            ],

            'Req_Doc' => [
                'required',
                'text',

            ],

            'done' => [
                'required',
                'numeric',

            ],


        ];
        return $rules;
    }
    public function messages()
    {
        return [
            'jobtitle.required' => 'Please enter job titile',
            'P_date.required' => 'Please enter publish date',
            'Summary.required' => 'Please enter summery',
            'Requirements.required' => 'Please enter job requirements',
            'image_id.required' => 'Please upload image',
            'NOV.required' => 'Please enter no of vacances',
             'C_date.required' => 'Please enter closing date',
'Duties.required' => 'Please enter job duties',
'Req_Doc.required' => 'Please enter req_documents',
'done.required' => 'Please enter job status'
        ];
    }
}
