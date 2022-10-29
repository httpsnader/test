<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->isMethod('PUT') ? $this->user->id : null)],
            'password' => [$this->isMethod('POST') ? 'required' : 'nullable', 'min:8'],
        ];
    }
}
