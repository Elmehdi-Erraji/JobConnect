<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'cv' => 'nullable|string',
            'image' => 'nullable|string',
            'motivation' => 'nullable|string',
            'city' => 'nullable|string',
            'education_level_id' => 'nullable|exists:education_levels,id',
            'profession_id' => 'nullable|exists:professions,id',
        ];
    }
}
