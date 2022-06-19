<?php

namespace App\Http\Requests\Site\Shop\EatReport;

use App\UseCase\Site\Shop\EatReport\Store\SiteShopEatReportStoreInputData;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return SiteShopEatReportStoreInputData
     */
    public function makeInputData(): SiteShopEatReportStoreInputData
    {
        $shopId = $this->route('shop');
        return new SiteShopEatReportStoreInputData(
            $shopId,
            $this->input('visit_date'),
            $this->input('contents'),
            $this->input('path')
        );
    }
}
