<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $name
 */
class BrandRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => "required|min:2|max:50|unique:brands,name,$this->id"
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
