<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjetRequest extends FormRequest
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
            'titre_projet'=>'required|unique:projets,titre',
            'image_minimale_projet'=>'required',
            'image_maximale_projet'=>'required',
            'contenu_projet'=>'required',
            'autres_images_projet'=>'nullable',
            'resume_projet'=>'required',
        ];
    }
}
