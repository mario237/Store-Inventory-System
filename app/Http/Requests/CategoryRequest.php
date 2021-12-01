<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $name
 * @property mixed $id
 */
class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
           'name' => "required|min:2|max:50|unique:categories,name,$this->id"
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
