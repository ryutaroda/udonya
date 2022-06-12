<?php

namespace App\Http\Requests\Site\MyPage\MyPage;

use App\UseCase\Site\MyPage\TopView\MyPageTopViewInputData;
use Illuminate\Foundation\Http\FormRequest;

class TopViewRequest extends FormRequest
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

        ];
    }

    /**
     * @param int $userId
     * @return MyPageTopViewInputData
     */
    public function makeInputData(int $userId): MyPageTopViewInputData
    {
        return new MyPageTopViewInputData(
            $userId
        );
    }
}
