<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $id
 * @property mixed $size
 */
class SizeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'size' => "required|min:1|max:50|unique:sizes,size,$this->id"
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
