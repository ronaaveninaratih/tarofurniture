<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required',
            'user_name' => 'required|unique:user,user_name',
            'email' => 'required|email:rfc,dns'
        ];
    }

    function messages(){
        return [
            'nama.required' => 'Field nama wajib diisi!',
            'user_name.required' => 'Field username wajib diisi!',
            'user_name.unique' => 'Username ini telah terdaftar!',
            'email.required' => 'Email wajib diisi!'
        ];
    }
}
