<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class ContactUsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules =  [
            'fname'         => 'required|string|min:2|max:100',
            'lname'         => 'required|string|min:2|max:100',
            'email'         => 'required|email',
            // 'phone'         => 'required|string|regex:/^[0-9+]+/|min:6|max:30',
            'phone'         => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:30',
            'message'       => 'required|min:2|max:500',
        ];

        return $rules;
    }
    protected function failedValidation(Validator $validator)
    {
        $response = failureResponse(
            $validator->errors(),
            trans("message.something_wrong"),
            400
        );
        throw new ValidationException($validator, $response);
    }
}
