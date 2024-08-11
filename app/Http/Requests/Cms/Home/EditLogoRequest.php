<?php

namespace App\Http\Requests\Cms\Home;

use Illuminate\Foundation\Http\FormRequest;

class EditLogoRequest extends FormRequest
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
            'logo' => ['nullable', 'sometimes', 'image'],
            'logo_footer' => ['nullable', 'sometimes', 'image'],
            'link' => ['required']
        ];
    }
}
