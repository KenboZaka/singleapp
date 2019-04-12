<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValiRequest extends FormRequest
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
            'name'=>'required',
            'age'=>'numeric|required',
            'content'=>'required|max:200',
        ];
    }
    public function messages()
    {
        return [
            'required' => '入力必須項目です',
            'numeric' => '数字で入力してください',
            'content.max:200' => '200文字以内で入力してください',
        ];
    }
}
