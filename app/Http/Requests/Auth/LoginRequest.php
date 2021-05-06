<?php

namespace App\Http\Requests\Auth;
use App\Rules;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckPassword;
class LoginRequest extends FormRequest
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
            'email'=>'required|email|exists:users,email',
            'password'=>[
                'required',
                'min:6',
                app()->make(CheckPassword::class)
            ],
        ];
    }

    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'email.email'=>'Sai định dạng email',
            'email.exists'=>'Email không tồn tại',
            // 'password.required'=>'Password không được để trống',
            'password.min'=>'Phải nhập ít nhất 6 kí tự',


        ];
    }


    public function attributes(){
        return [
            'email'=>'email',
            'password'=>'mật khẩu',


        ];
    }
}
