<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
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
        $rules = [];

        if ($this -> isMethod('GET')){
            $rules['id'] = 'numeric';
        }

        if ($this -> isMethod('POST')){
            $rules[''];
        }

        if ($this -> isMethod('DELETE')){
            $rules['id'] = 'numeric|required';
        }

        return $rules;
    }
}
