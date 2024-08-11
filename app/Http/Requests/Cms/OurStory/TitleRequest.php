<?php

namespace App\Http\Requests\Cms\OurStory;

use Illuminate\Foundation\Http\FormRequest;

class TitleRequest extends FormRequest
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
            'title1' => ['required'],
            'title2' => ['required'],
            'top_desc1' => ['required'],
            'top_desc2' => ['required'],
            'desc' => ['required'],
        ];
    }
}
