<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'join_date'=>'required|date',
        'first_name' => 'required|string',
        'username' => 'required|string',
        'last_name' => 'string',
        'employee_id' => 'required|numeric|unique:employees,employee_id',
        'dept_name' => 'required',
        'position' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required|min:8',
        'phone_number' => 'required|numeric|unique:employees,phone_number',
        'confirm_password' => 'required|same:password',
        ];
    }
}
