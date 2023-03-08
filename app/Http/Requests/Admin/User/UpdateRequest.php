<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//Всегда ебашим true иначе работац не будет
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users,email,' . $this->user_id,
            'user_id'=>'required|integer|exists:users,id',
            'role'=>'required|integer',

        ];
    }

    public function messages()
    {
        return [
          'name.required'=>'Это поле необходимо для заполнения',
            'name.string'=>'Это поле должно быть строкой',
            'email.required'=>'Это поле необходимо для заполенениия',
            'email.string'=>'Почта должна быть строкой',
            'email.email'=>'Ваша почта должна соответсовать main@some.domain',
            'email.unique'=> 'Пользователь с такой почтой уже существует'
        ];
    }
}
