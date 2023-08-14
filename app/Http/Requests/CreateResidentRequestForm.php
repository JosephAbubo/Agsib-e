<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResidentRequestForm extends FormRequest
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
            'first_name'=> 'required',
            'middle_name'=> 'required',
            'last_name'=> 'required',
            'alias'=> 'required',
            'place_of_birth'=> 'required',
            'date_of_birth' => 'required',
            'age'=> 'required',
            'civil_status'=> 'required',
            'gender'=> 'required',
            'purok'=> 'required',
            'voter_status'=> 'required',
            'vaccination_status'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'contact_number'=> 'required',
            'occupation'=> 'required',
            'address'=> 'required',
            'government_id_number'=> 'required',
            'citizenship'=> 'required',
        ];
    }
}
