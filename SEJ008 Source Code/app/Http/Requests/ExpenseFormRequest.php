<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseFormRequest extends FormRequest
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

            'sdate' => [
                'required',
                'date',
                
            ],
            'edate' => [
                'required',
                'date'
            ],
            'topic' => [
                'required',
                'string'
            ],
            'transport' => [
                'required',
                'numeric'
            ],
            'mcost' => [
                'required',
                'numeric'
            ],
            'visits' => [
                'required',
                
            ],
             'extra' => [
                'required',
                'numeric'
            ],
             'nauthors' => [
                'required',
                
            ],
             
        ];

        return $rules;
    } 

    public function messages() {

        return [
            'sdate.required' => 'Please enter project start date',
            'edate.required' => 'Please enter project ending date',
            'topic.required' => 'Please enter topic of project',
            'transport.required' => 'Please enter transport cost',
            'mcost.required' => 'Please enter media cost in Rs',
            'visits.required' => 'Please enter number of visits',
            'extra.required' => 'Please enter extra expenses',
            'nauthors.required' => 'Please enter number of authors',
           
            
        ];
    }
    }

