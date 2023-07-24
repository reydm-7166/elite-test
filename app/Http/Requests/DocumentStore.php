<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentStore extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'code' => 'required|integer',
            'crew_id' => 'required|integer',
            'name' => 'required|string',
            'number' => 'required|integer',
            'date_issued' => 'required|date',
            'date_expiry' => 'required|date',
            'remarks' => 'required|string',
        ];
    }
}
