<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', 'max72'],
        ];
    }
}
