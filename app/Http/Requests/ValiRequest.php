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
            'title'=> 'required',
            'name'=>'required',
            'age'=>'required|numeric',
            'content'=>'required|max:200',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => '入力必須項目です',
            'name.required' => '入力必須項目です',
            'age.required' => '入力必須項目です',
            'age.numeric' => '数字で入力してください',
            'content.required' => '入力必須項目です',
            'content.max:200' => '200文字以内で入力してください',
        ];
    }
}
