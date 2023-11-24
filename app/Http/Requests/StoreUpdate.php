<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdate extends FormRequest
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
            'id_code' => 'required|regex:/^\w+$/i',
            'name' => 'required|string',
            'url' => 'required|url',
            'price' => 'required|numeric',
            'cep' => ['required', 'regex:/^\d{5}-\d{3}$/'],
        ];
    }
}
