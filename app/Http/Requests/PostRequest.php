<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            "title" => "required|min:3",
            "category" => "required",
            "image_url" => "required",
            "body" => "required|min:10",
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "The title field is required.",
            "title.min" => "The title field is required at least 3 characters.",
            "category" => "The category field is required.",
            "image_url" => "The image field is required.",
            "body.required" => "The body field is required.",
            "body.min" => "The body field is required at least 3 characters.",
        ];
    }
}
