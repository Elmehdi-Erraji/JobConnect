<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'domain' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'description' => 'required|string',
            'education_level_id' => 'nullable|exists:education_levels,id',
            'profession_id' => 'nullable|exists:professions,id',
            'category_id' => 'nullable|exists:categories,id',
            'contract_id' => 'nullable|exists:contracts,id',
        ];
    }
}
