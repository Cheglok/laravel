<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategory extends FormRequest
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
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:100'],
            'description' => ['required', 'string'],
            'is_visible' => ['sometimes']
        ];
    }
    public function messages() {
        return ['required' => 'Поле :attribute необходимо заполнить.'];
    }
    public function attributes()
    {
        return [
            'title' => 'Заглавие',
            'description' => 'Подробное описание',
            'is_visible' => 'доступно для просмотра?'
        ];
    }
}
