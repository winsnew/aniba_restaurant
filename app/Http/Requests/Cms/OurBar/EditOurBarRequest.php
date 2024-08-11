<?php

namespace App\Http\Requests\Cms\OurBar;

use Illuminate\Foundation\Http\FormRequest;

class EditOurBarRequest extends FormRequest
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
            'bar_desc1' => ['required'],
            'title' => ['required'],
            'bar_desc2' => ['required'],
            'cocktail_menu' => ['nullable', 'sometimes', 'mimes:pdf']
        ];
    }
}
