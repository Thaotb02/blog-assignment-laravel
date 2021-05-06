<?php

namespace App\Http\Requests;
use App\Rules;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckPassword;
class PostRequest extends FormRequest
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
            'title'=>'bail|required|max:255',
            'content'=>'bail|required',

        ];
    }

    public function messages(){
        return [
            'required'=>':attribute không được để trống',
            'title.max'=>'Chỉ được nhập 255 kí tự',
        ];
    }


    public function attributes(){
        return [
            'title'=>'Title',
            'content'=>'Content',


        ];
    }
}
