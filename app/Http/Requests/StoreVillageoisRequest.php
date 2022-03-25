<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVillageoisRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nom" => "required|min:15",
            "prenom" => "required",
            "email" => "required",
            "telephone" => "required",
            "entreprise_id" => "required",
        ];
    }

    // public function messages()
    // {
    //     return [
    //         "nom.min" => "Ya tfol bellehi esmek 9sir badlou"
    //     ];
    // }
}
