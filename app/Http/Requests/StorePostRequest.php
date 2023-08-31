<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        return [
            'titre_article'=>'required|unique:posts,titre',
            'image_minimale'=>'required',
            'image_maximale'=>'required',
            'contenu_article'=>'required',
            'categorie_article'=>'required',
            'categorie_article'=>'required|exists:categories,id',
            'resume_article'=>'required',
        ];
    }
}
