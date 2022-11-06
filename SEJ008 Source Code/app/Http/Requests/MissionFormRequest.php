<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MissionFormRequest extends FormRequest
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
            'topic' =>[
                'required',
                'string',
                'max:191',
            ],
            'description' =>[
                'required',
                'string',
                
            ],
            'dateofadd' =>[
                'required',
            ],
            'imageadd' =>[
                'required',
            ],
            'missioncost' =>[
                'required',
                'numeric',
                
            ],       
        ];

        return $rules;
    }

    public function messages(){

        return[
            'topic.required' => '*Please Enter Topic Of The Operation',
            'description.required' => '*Please Enter The Description ',
            'dateofadd.required' => '*Please Select The Currect Date',
            'imageadd.required' => '*Please Choose The Image',
            'missioncost.required' => '*Please Enter The Correct Mission Cost',
        ];
    }
}