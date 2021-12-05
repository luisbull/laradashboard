<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required|min:10',
            'category' => 'required'
        ];
    }

    public function attributes()
    {
        return [
          'name' => 'course name'  
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Please provide a course description'
        ];
    }
}
