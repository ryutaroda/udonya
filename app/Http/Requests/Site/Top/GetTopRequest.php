<?php

namespace App\Http\Requests\Site\Top;

use App\UseCase\Site\Top\Top\SiteTopTopInputData;
use Illuminate\Foundation\Http\FormRequest;

class GetTopRequest extends FormRequest
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
     * @return SiteTopTopInputData
     */
    public function makeInputData(): SiteTopTopInputData
    {
        return new SiteTopTopInputData();
    }
}
