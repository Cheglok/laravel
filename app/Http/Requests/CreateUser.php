<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:20'],
            'email' => ['required', 'string', 'min:3', 'max:20'],
            'is_admin' => ['sometimes'],
            'password' => ['required', 'string', 'min:8', 'max:20']
        ];
    }
    public function messages() {
        return ['required' => 'Поле :attribute необходимо заполнить.'];
    }
    public function attributes()
    {
        return [
            'name' => 'Имя пользователя',
            'is_admin' => 'является ли администратором?'
        ];
    }
}
