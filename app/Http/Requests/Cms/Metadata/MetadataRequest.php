<?php

namespace App\Http\Requests\Cms\Metadata;

use Illuminate\Foundation\Http\FormRequest;

class MetadataRequest extends FormRequest
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
            'title' => ['required'],
            'description' => ['required'],
            'keywords' => ['required'],
            'image' => ['sometimes', 'image']
        ];
    }
}
