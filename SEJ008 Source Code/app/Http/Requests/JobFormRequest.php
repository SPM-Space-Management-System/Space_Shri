<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobFormRequest extends FormRequest
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
        'jobtitle.required'=>'Please enter job titile',
        'P_date.required'=>'Please enter publish date',
        'Summary.required'=>'Please enter summery',
        'Requirements.required'=>'Please enter job requirements',
        'imageadd.required'=>'Please add the image',
        'NOV.required'=>'Please enter no of vacances',
        'C_date.required'=>'Please enter closing date',
        'Duties.required'=>'Please enter job duties',
        'Req_Doc.required'=>'Please enter job document',
        'done.required'=>'Please enter job status'
        ];
   
    }
}


