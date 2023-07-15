<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialRequest extends FormRequest
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
            'term'=>'required',
            'year_id'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'=>'من فضلك ادخل اسم البند',
            'term.required'=>'من فضلك ادخل الفصل الدراسي الاول او الثاني',
            'year_id.required'=>'من فضلك ادخل السنه الدراسية '
        ];
    }

}
