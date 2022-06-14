<?php

namespace App\Http\Requests\Site\MyPage\UserProfile;

use App\UseCase\Site\MyPage\InfoEditView\MyPageInfoEditViewInputData;
use Illuminate\Foundation\Http\FormRequest;

class GetUserProfileEditRequest extends FormRequest
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

//    /**
//     * @return MyPageInfoEditViewInputData
//     */
//    public function makeInputData(): MyPageInfoEditViewInputData
//    {
//        return new MyPageInfoEditViewInputData();
//    }
}
