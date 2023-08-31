<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBourseRequest extends FormRequest
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
            "titre" => "required|",
            "annee" => "required|",
            "date_limite" => "required|",
            "pays" => "required|",
            "programmes" => "required|",
            "public_cible" => "required|",
            "type" => "required|",
            "eligibilite" => "required|",
            "description" => "required|",
            "statut" => "required|",
            "image_minimale"=>"required|",
            "image_maximale"=>"required|",
            "pieces"=>"nullable|",
        ];
    }
}
