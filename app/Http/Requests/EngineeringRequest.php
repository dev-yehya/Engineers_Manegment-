<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EngineeringRequest extends FormRequest
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
            'name'=>['required','min:3'],
            'email'=>['required','email','ends_with:@gmail.com'],
            'phone-number'=>['required','max:10'],
            'password'=>['required','min:8','confirmed'],
            'address'=>['max:30'],
            'message'=>['height:100px','width: 300px'],
        ];
    }
}
