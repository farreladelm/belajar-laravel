<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'npm' => ['required', 'unique:students', 'numeric'],
            'nama' => ['required', 'max:40'],
        ];

        if ($this->student) {
            $rules['npm'] = ['required', Rule::unique('students')->ignore($this->student), 'numeric'];
        }

        return $rules;
    }
}
