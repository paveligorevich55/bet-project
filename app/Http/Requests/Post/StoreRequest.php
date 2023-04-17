<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // dont' forget to set this as true
        return true;
    }

    public function rules(): array
    {
        // make all of the fields required, set featured image to accept only images
        return [
            'title' => 'required|min:3|max:250|unique:posts,title',
            'content' => 'required',
            'featured_image' => 'required|image|mimes:jpg,jpeg,png',
            'category_id' => 'required',
            'user_id' => 'required',
        ];
    }
}
