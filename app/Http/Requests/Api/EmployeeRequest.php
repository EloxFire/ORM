<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
		'emp_no' => 'integer',
		'first_name' => 'string|max:255',
		'last_name' => 'string|max:255',
		'birth_date' => 'date',
		'hire_date' => 'date|after:birth_date',
		'gender' => 'string|max:1',
        ];
	return  $rule;
    }
}
