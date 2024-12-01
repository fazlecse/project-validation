<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required',
            'useremail' => 'required|email',
            'userpass' => 'required|alpha_num|min:6',
            'userage' => 'required|numeric|min:18',
            'usercity' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => ':attribute is required!',
            'useremail.required' => 'User Email is required!',
            'useremail.email' => 'Enter the correct email address.',
            'userpass.required' => 'User Password is required!',
            'userage.required' => 'User Age is required!',
            'userage.numeric' => 'User Age must be numeric.',
            'userage.min:18' => 'User Age should  not less than 18 years old.',
            'usercity.required' => 'User city is required.'
        ];
    }

    // prepareForValidation
    protected function prepareForValidation()
    {
        $this->merge([
            'username' => strtoupper($this->username),
            // 'username' => Str::slug($this->username),
        ]);
    }
    // 1st error stop
    // protected $stopOnFirstFailure = true;
}
