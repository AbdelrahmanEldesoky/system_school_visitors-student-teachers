<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'address'=>'required',
         
            'mobile' => 'required|numeric|unique:teachers',
            'password'=>'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'من فضلك ادخل اسم المدرس',
            'address.required'=>'من فضلك ادخل عنوان المدرس',
            'mobile.required'=>'من فضلك ادخل رقم تليفون المدرس',
            'mobile.number'=>'يجب ان يكون رقم الهاتف ارقام',
           
            'mobile.unique'=>'رقم الهاتف مكرر بالفعل',
            'password.required'=>'من فضلك ادخل باسورد المدرس',
        ];
    }
}
