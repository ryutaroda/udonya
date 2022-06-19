<?php

namespace App\Http\Requests\Site\Shop\EatReport;

use App\UseCase\Site\Shop\EatReport\Index\SiteShopEatReportIndexInputData;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
//        dd($this->route('shop'));
        return [
//            'search_word' => [
//                'nullable',
//                'string'
//            ],
        ];
    }

    /**
     * @return SiteShopEatReportIndexInputData
     */
    public function makeInputData(): SiteShopEatReportIndexInputData
    {
        $shopId = $this->route('shop');
        return new SiteShopEatReportIndexInputData(
            $shopId
        );
    }
}
