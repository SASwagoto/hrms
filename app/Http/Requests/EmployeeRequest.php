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
        'profile_img' => 'image|mimes:jpeg,png,jpg|max:2048',
        'first_name' => 'required|string',
        'username' => 'required|string',
        'last_name' => 'string',
        'emp_id' => 'required|numeric',
        'dept_name' => 'required',
        'position' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required|min:8',
        'phone_number' => 'required|numeric|unique:employees, phone_number',
        'confirm_password' => 'required|same:password',
        'exam.*' => 'required',
        'institute.*' => 'required|string',
        'subject.*' => 'string',
        'pass_year.*' => 'numeric',
        'group.*' => 'string',
        'session.*' => 'string',
        'result.*' => 'numeric',
        'dob' => 'date',
        'present_address' => 'string',
        'nid_num' => 'numeric',
        'permanent_address' => 'string',
        ];
    }
}
