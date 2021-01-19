<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'password'=>['required','min:8']
        ];
    }
    public function messages()
    {
        return [
            'password.required' => 'يجب كتابة كلمة السر الجديدة', 
            'password.min' => 'يجب كتابة كلمة السر مكونة علي الاقل من 8 حروف', 

        ];
    }
}
