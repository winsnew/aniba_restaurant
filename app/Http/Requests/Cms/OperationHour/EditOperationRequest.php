<?php

namespace App\Http\Requests\Cms\OperationHour;

use Illuminate\Foundation\Http\FormRequest;

class EditOperationRequest extends FormRequest
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
            'operation' => 'required',
            'operation_footer' => 'required',
            'book_now_link' => 'required',
        ];
    }
}
