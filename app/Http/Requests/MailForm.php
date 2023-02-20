<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'last_name' => ['bail', 'required', 'string', 'max:255'],
            'first_name' => ['bail', 'required', 'string', 'max:255'],
            'email' => ['bail', 'required', 'email:strict,dns,spoof', 'max:255'],
            // 'email_confirm' => ['bail', 'required', 'email:strict,dns,spoof', 'max:255', 'same:email'],
            'title' => ['bail', 'required', 'string', 'max:255'],
            'content' => ['bail', 'required', 'string', 'max:255'],
            'check' => 'required',
        ];
    }
}
