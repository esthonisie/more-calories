<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCalorieRequest extends FormRequest
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
            'product' => ['required', 'min:2', 'max:255'],
            'subject_id' => ['required'],
            'kcal_per_100' => ['required', 'numeric', 'integer', 'min:1', 'max:1000'],
            'weight_g_ml' => ['required', 'numeric', 'min:1', 'max:1000']
        ];
    }
}
