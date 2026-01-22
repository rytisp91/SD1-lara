<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:2', 'max:120'],
            'description' => ['required', 'string', 'min:5', 'max:1000'],
            'speakers' => ['required', 'string', 'min:2', 'max:255'],
            'date' => ['required', 'date'],
            'time' => ['required'],
            'address' => ['required', 'string', 'min:2', 'max:255'],
        ];
    }
}

