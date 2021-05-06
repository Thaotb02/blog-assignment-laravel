<?php

namespace App\Http\Requests;
use App\Rules;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckPassword;
class UserRequest extends FormRequest
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
            //Create User 
            'name'=>'bail|required|min:4',
            'phone_number'=>'bail|required|integer',
            'password_comfirm'=>'bail|required|same:password',
            'email'=>'bail|required|email',
            'password'=>[
                'bail',
                'required',
                'min:6',
                app()->make(CheckPassword::class)
            ],
        ];
    }

    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'name.min'=>'Phải nhập ít nhất 4 kí tự',
            'phone_number.integer'=>'Chỉ được nhập số',
            // 'name.max'=>'Không được nhập quá 10 kí tự',
            'password_comfirm.same'=>'Phải nhập đúng password',
            'email.email'=>'Sai định dạng email',
            'password.min'=>'Phải nhập ít nhất 6 kí tự',


        ];
    }


    public function attributes(){
        return [
            'email'=>'email',
            'password'=>'mật khẩu',
            'password_comfirm'=>'password comfirm',
            'phone_number'=>'Phone Number'

        ];
    }
}
