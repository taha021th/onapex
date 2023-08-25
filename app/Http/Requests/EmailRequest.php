<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'email' => 'required|email|exists:users,email',
            'phone' => 'required|numeric',
            'text' => 'required',
        ];
    }

    public function attributes(){
        return [
            'name' => 'نام و نام خانوادگی',            
            'email' => 'ایمیل',                                                
            'phone' => 'شماره تلفن',
            'text' => 'متن',
            
        ];
    }


    public function messages(){
        return [            
            'name.string' => 'لطفا نام و نام خانوادگی خود را درست وارد کنید',
            'name.max' => 'نام و نام خانوادگی نباید بیشتر از 50 حرف باشد',

            'email.exists' => 'حسابی با ایمیل وارد شده وجود ندارد',
            'email.email' => 'ایمیل وارد شده نا معتبر است',

            'phone.numeric'=>'شماره تلفن خود را درست وارد کنید',

            '*.required' =>'لطفا :attribute خود را وارد کنید'
        ];
    }
}

