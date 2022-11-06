<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantRequest extends FormRequest
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


        $rules=[
            'jobtitle'=>[
                'required',
                'string',
                'max:191'
            ],
            'DOA'=>[
                'required',

            ],
            'email'=>[
                'required',
                'email',

            ],
            'address'=>[
                'required',

            ],
            'name'=>[
                'required',
            ],

            'tp_no'=>[
                'required',
                'numeric',
            ],
            'NIC'=>[
                 'required',
            ],
            'cvadd'=>[
                'required',

            ],



        ];
        return $rules;
    }
    public function messages()
    {
        return[
        'jobtitle.required'=>'Please enter job titile',
        'DOA.required'=>'Please enter date of application',
        'email.required'=>'Please enter email',
        'address.required'=>'Please enter your address',
        'name.required'=>'Please add the name',
        'tp_no.required'=>'Please enter no of contact no',
        'NIC.required'=>'Please enter closing NIC',
        'cv_id.required'=>'Please upload your cv',


        ];

    }
}



