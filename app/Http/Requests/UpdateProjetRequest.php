<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjetRequest extends FormRequest
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
            'titre_projet'=>'required',
            'image_minimale_projet'=>'nullable|file|mimes:jpg,jpeg,png',
            'image_maximale_projet'=>'nullable|file|mimes:jpg,jpeg,png',
            'resume_projet'=>'required|string',
            'contenu_projet'=>'nullable|string',
            'autres_images_projet'=>'nullable|file|mimes:jpg,jpeg,png',
            'resume_projet'=>'required',
        ];
    }
}
