<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
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
            'titre'=>'required|unique:sliders,title_sm|max:255',
            'image_slider'=>'required|max:5000',
            'btn_slider'=>'nullable|max:255',
            'button'=>'nullable|max:150',
            'description_slider'=>'required|',
            'statut_slider'=>'required|integer|min:0|max:1',
        ];
    }
}
