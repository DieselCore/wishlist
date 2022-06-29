<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'price' => ['required', 'numeric'],
            'release_date' => ['required', 'date_format:Y-m-d']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please provide the name of the game. I can\'t tell you that, Andrew.'
        ];
    }
}
