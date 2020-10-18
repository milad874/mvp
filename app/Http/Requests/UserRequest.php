<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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

        if (method_field('PATCH'))
        {


            return [
                'name'=>'string|min:2|max:15|required',
                'lastname'=>'string|min:2|max:15|required',
                'username'=>'string|min:5|max:20|required|unique:users,id,'.$this->user,
                'email'=>'email|min:5|max:40|required|unique:users,id,'.$this->user,
                'password'=>'required|string|min:8',
                'phone'=>'string|min:8|max:12|required|unique:users,id,'.$this->user
            ];
        }
        return [
            'name'=>'string|min:2|max:15|required',
            'lastname'=>'string|min:2|max:15|required',
            'username'=>'string|min:5|max:20|required|unique:users',
            'email'=>'email|min:5|max:40|required|unique:users',
            'password'=>'required|string|min:8|confirmed',
            'phone'=>'string|min:8|max:12|required|unique:users'
        ];
    }

    //regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|
}
