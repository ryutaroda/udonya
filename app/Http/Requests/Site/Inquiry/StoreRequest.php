<?php

namespace App\Http\Requests\Site\Inquiry;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'string',
                'email'
            ],
            'title' => [
                'required',
                'string',
            ],
            'contents' => [
                'required',
                'string'
            ],
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            '*.required' => '入力必須です',
            'email.email' => '正式なメールアドレスを入力してください',
//            'name.unique' => 'このお店はすでに登録されています',
//            'prefecture_id.required' => '都道府県を選択してください',
        ];
    }
}
