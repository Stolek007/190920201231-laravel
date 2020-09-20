<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Чтобы не зарегестрированные пользователи могли отправлять формы
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_name' => 'required',
            'user_city' => 'required',
            'user_area' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'user_name' => 'Имя',
            'user_city' => 'Город',
            'user_area' => 'Район'
        ];
    }

    public function messages()
    {
        return [
            'user_name.required' => 'Поле "Имя" - обязательно',
            'user_city.required' => 'Поле "Город" - обязательно',
            'user_area.required' => 'Поле "Район" - обязательно'
        ];
    }

}
