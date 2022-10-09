<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobForUpdatemRequest extends FormRequest
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
            'P_date'=>[
                'required',

            ],
            'Summary'=>[
                'required',

            ],
            'Requirements'=>[
                'required',

            ],
            'imageadd'=>[
                'required',


            ],

            'NOV'=>[
                'required',
                'numeric',
            ],
            'C_date'=>[
                'required',
            ],
            'Duties'=>[
                'required',

            ],
            'Req_Doc'=>[
                'required',
            ],
            'done'=>[
                'required',
                'numeric',
            ],


        ];
        return $rules;
    }
    public function messages()
    {
        return[
        'jobtitle.required'=>'Can Not Update Empty Feild',
        'P_date.required'=>'Can Not Update Empty Feild',
        'Summary.required'=>'Can Not Update Empty Feild',
        'Requirements.required'=>'Can Not Update Empty Feild',
        'imageadd.required'=>'Can Not Update Empty Feild',
        'NOV.required'=>'Can Not Update Empty Feild',
        'C_date.required'=>'Can Not Update Empty Feild',
        'Duties.required'=>'Can Not Update Empty Feild',
        'Req_Doc.required'=>'Can Not Update Empty Feild',
        'done.required'=>'Can Not Update Empty Feild'
        ];

    }
}


