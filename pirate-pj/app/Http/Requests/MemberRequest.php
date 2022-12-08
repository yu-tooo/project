<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name' => 'required',
            'age' => 'numeric',
            'nationality' => 'required',
            'ability'=>'required'
        ];
    }

    public function messages() 
    {
        return [
            'name.required' => '名前は必須です',
            'age.numeric' => '年齢は数字のみ入力してください',
            'nationality.required' => '出身地が分からない場合は「不明」としてください',
            'ability.required'=> '非能力者は「なし」としてください'
        ];
    }
}
