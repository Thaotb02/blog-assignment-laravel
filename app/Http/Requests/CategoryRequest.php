<?php

namespace App\Http\Requests;
use App\Rules;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckPassword;
class CategoryRequest extends FormRequest
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
        ];
    }

    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'name.min'=>'Phải nhập ít nhất 4 kí tự',


        ];
    }


    public function attributes(){
        return [
            'name'=>'Category Name',


        ];
    }
}
