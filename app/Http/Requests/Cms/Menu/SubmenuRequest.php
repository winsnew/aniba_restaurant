<?php

namespace App\Http\Requests\Cms\Menu;

use Illuminate\Foundation\Http\FormRequest;

class SubmenuRequest extends FormRequest
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
            'name' => 'required',
            'menu_file' => ['nullable', 'sometimes', 'mimes:pdf']
        ];
    }
}
