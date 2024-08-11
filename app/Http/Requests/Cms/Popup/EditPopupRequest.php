<?php

namespace App\Http\Requests\Cms\Popup;

use Illuminate\Foundation\Http\FormRequest;

class EditPopupRequest extends FormRequest
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
            'title' => ['nullable'],
            'status' => ['required'],
            'image' => ['nullable', 'sometimes', 'image'],
            'subscribe_status' => ['required'],
            'link' => ['nullable']
        ];
    }
}
