<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MissionForUpdatemRequest extends FormRequest
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
            // 'imageadd' =>[
            //     'required',
            // ],
            'missioncost' =>[
                'required',
                'numeric',
                
            ],       
        ];

        return $rules;
    }

    public function messages(){

        return[
            'topic.required' => '*Can Not Update Empty Feild',
            'description.required' => '*Can Not Update Empty Feild',
            'dateofadd.required' => '*Can Not Update Empty Feild',
            // 'imageadd.required' => '*Can Not Update Empty Feild',
            'missioncost.required' => '*Can Not Update Empty Feild',
        ];
    }
}