<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
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

            'pname' => [
                'required',
                'string',
                'max:191'
            ],
            'pdate' => [
                'required',
                'date'
            ],
            'noOfLaunch' => [
                'required',
                'numeric'
            ],
            'noOfLand' => [
                'required',
                'numeric'
            ],
            'noOfReflight' => [
                'required',
                'numeric'
            ],
            'fcost' => [
                'required',
                'numeric'
            ],
             'ecost' => [
                'required',
                'numeric'
            ],
             'fucost' => [
                'required',
                'numeric'
            ],
             'oxcost' => [
                'required',
                'numeric'
            ],
             'pcost' => [
                'required',
                'numeric'
            ],
             'ncost' => [
                'required',
                'numeric'
            ],
             'ocost' => [
                'required',
                'numeric'
            ],
        ];

        return $rules;
    } 

    public function messages() {

        return [
            'pname.required' => 'Please enter project name',
            'pdate.required' => 'Please enter project date',
            'noOfLaunch.required' => 'Please enter the no of total launches',
            'noOfLand.required' => 'Please enter the no of total landings',
            'noOfReflight.required' => 'Please enter the no of total re-flights',
            'fcost.required' => 'Please enter frame cost in Rs',
            'ecost.required' => 'Please enter engine cost in Rs',
            'fucost.required' => 'Please enter fuel cost in Rs',
            'oxcost.required' => 'Please enter oxidizer cost in Rs',
            'pcost.required' => 'Please enter pump cost in Rs',
            'ncost.required' => 'Please enter nozzle cost in Rs',
            'ocost.required' => 'Please enter other cost in Rs',
        ];
    }
}
