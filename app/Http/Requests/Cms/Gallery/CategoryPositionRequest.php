<?php

namespace App\Http\Requests\Cms\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class CategoryPositionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'order' => 'required|array',
            'order.*.id' => 'required|exists:categories,id',
            'order.*.position' => 'required|integer|min:1',
        ];
    }
}
