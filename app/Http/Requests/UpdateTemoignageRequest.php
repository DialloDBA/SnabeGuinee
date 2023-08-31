<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTemoignageRequest extends FormRequest
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
            "prenom_temoin" => "required|min:2|max:200",
            "nom_temoin" => "required|min:2|max:150",
            "profession_temoin" => "required|min:3|max:255",
            "telephone_temoin" => "required|",
            "message_temoin" => "required|min:3",
            "photo_temoin" => "nullable|file|mimes:jpg,JPG,png,PNG,jpeg,JPEG",
            "video_temoin" => "nullable|file|mimes:mp4,avi,m4v",
            "statut_temoignage" =>"required|between:0,1",
        ];
    }
}
