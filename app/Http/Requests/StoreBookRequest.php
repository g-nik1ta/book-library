<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'published_at' => 'required|date',
            'word_count' => 'required|integer|min:0',
            'price_usd' => 'required|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'publisher.required' => 'The publisher field is required.',
            'publisher.string' => 'The publisher must be a string.',
            'publisher.max' => 'The publisher may not be greater than 255 characters.',
            'author.required' => 'The author field is required.',
            'author.string' => 'The author must be a string.',
            'author.max' => 'The author may not be greater than 255 characters.',
            'genre.required' => 'The genre field is required.',
            'genre.string' => 'The genre must be a string.',
            'genre.max' => 'The genre may not be greater than 255 characters.',
            'published_at.required' => 'The published date field is required.',
            'published_at.date' => 'The published date must be a valid date.',
            'word_count.required' => 'The word count field is required.',
            'word_count.integer' => 'The word count must be an integer.',
            'word_count.min' => 'The word count must be at least 0.',
            'price_usd.required' => 'The price field is required.',
            'price_usd.numeric' => 'The price must be a number.',
            'price_usd.min' => 'The price must be at least 0.',
        ];
    }
}
