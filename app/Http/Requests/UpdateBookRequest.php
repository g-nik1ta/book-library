<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'sometimes|string|max:255',
            'publisher' => 'sometimes|string|max:255',
            'author' => 'sometimes|string|max:255',
            'genre' => 'sometimes|string|max:255',
            'published_at' => 'sometimes|date',
            'word_count' => 'sometimes|integer|min:0',
            'price_usd' => 'sometimes|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'publisher.string' => 'The publisher must be a string.',
            'publisher.max' => 'The publisher may not be greater than 255 characters.',
            'author.string' => 'The author must be a string.',
            'author.max' => 'The author may not be greater than 255 characters.',
            'genre.string' => 'The genre must be a string.',
            'genre.max' => 'The genre may not be greater than 255 characters.',
            'published_at.date' => 'The published date must be a valid date.',
            'word_count.integer' => 'The word count must be an integer.',
            'word_count.min' => 'The word count must be at least 0.',
            'price_usd.numeric' => 'The price must be a number.',
            'price_usd.min' => 'The price must be at least 0.',
        ];
    }
}