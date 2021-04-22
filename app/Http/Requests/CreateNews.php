<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNews extends FormRequest
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
            'category_id' => ['required', 'numeric'],
            'source_id' => ['required', 'numeric'],
            'title' => ['required', 'min:3', 'max:100', 'string'],
            'text' => ['required', 'string'],
            'image' =>['sometimes'],
            'status' =>['boolean']
        ];
    }
    public function attributes()
    {
        return [
            'text' => 'текст',
        ];
    }
}
