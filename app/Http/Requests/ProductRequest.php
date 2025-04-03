<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'id_category' => 'required|exists:categories,id',
            'image' => 'required|string|url'
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
            'name.required' => 'O nome do produto é obrigatório',
            'name.max' => 'O nome não pode ter mais de 255 caracteres',
            'description.required' => 'A descrição é obrigatória',
            'price.required' => 'O preço é obrigatório',
            'price.numeric' => 'O preço deve ser um número',
            'price.min' => 'O preço não pode ser negativo',
            'id_category.required' => 'A categoria é obrigatória',
            'id_category.exists' => 'A categoria selecionada é inválida',
            'image.required' => 'A imagem é obrigatória',
            'image.url' => 'A URL da imagem é inválida'
        ];
    }
} 