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
            'id_code' => 'required|unique:products|regex:/^\w+$/i',
            'name' => 'required|string|min:1|max:100',
            'url' => 'required|url',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'cep' => 'required|regex:/^\d{5}-\d{3}$/',
        ];        
    }
}
