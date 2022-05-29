<?php

namespace App\Http\Requests\Site\Shop;

use App\Models\Shop;
use App\UseCase\Site\Shop\Index\SiteShopIndexInputData;
use App\UseCase\Site\Shop\Show\SiteShopShowInputData;
use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
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
            'search_word' => [
                'nullable',
                'string'
            ],
        ];
    }

    /**
     * @param Shop $shop
     * @return SiteShopShowInputData
     */
    public function makeInputData(Shop $shop): SiteShopShowInputData
    {
        return new SiteShopShowInputData(
            $shop
        );
    }
}
