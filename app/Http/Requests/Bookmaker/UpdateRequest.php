<?php

namespace App\Http\Requests\Bookmaker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:12',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'bonus' => 'nullable|string|min:3|max:24',
            'rating' => 'nullable|string|min:1|max:2',
        ];
    }
}
