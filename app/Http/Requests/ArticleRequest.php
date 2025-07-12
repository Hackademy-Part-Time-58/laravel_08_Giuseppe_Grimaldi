<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            "title"=>"required|string|max:255",
            "content"=>"required|string|max:255",
            "author"=>"required|string|max:100",
            "image"=>"required|image|mimes:jpg,jpeg,png|max:4096",
        ];
    }
    public function messages()
    {
        return [
            "title.required"=>"Questo è un campo obbligatorio",
            "content.required"=>"Questo è un campo obbligatorio",
            "author.required"=>"Questo è un campo obbligatorio",
            "image.required"=>"Un articolo fornito di immagina risulterà più visibile",
            "image.mimes"=>"Formati ammessi: jpg, jpeg, png",
            "image.max"=>"L'immagine è troppo grande,Max 4 Mb",
        ];
    }
}
