<?php

namespace App\Http\Requests\Cms\Press;

use Illuminate\Foundation\Http\FormRequest;

class CreatePressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'publisher' => 'required',
            'url' => 'required',
            'color' => 'required',
            'font_color' => 'required',
            'image' => 'required|image'
        ];
    }
}
