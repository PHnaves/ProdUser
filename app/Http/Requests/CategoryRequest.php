<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string|max:100|min:4|unique:categories,name,' . $this->id,
            'description' => 'required|string|minmax:255'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O nome da categoria é obrigatório',
            'name.max' => 'O nome não pode ter mais de 100 caracteres',
            'name.min' => 'O nome não pode ter menos de 4 caracteres',
            'name.unique' => 'Já existe uma categoria com este nome',
            'description.required' => 'A descrição é obrigatória',
            'description.max' => 'A descrição não pode ter mais de 255 caracteres'
        ];
    }
} 