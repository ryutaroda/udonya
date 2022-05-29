<?php

namespace App\Http\Requests\Site\Shop;

use App\UseCase\Site\Shop\Index\SiteShopIndexInputData;
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
        return [
            'search_word' => [
                'nullable',
                'string'
            ],
        ];
    }

    /**
     * @return SiteShopIndexInputData
     */
    public function makeInputData(): SiteShopIndexInputData
    {
        return new SiteShopIndexInputData(
            $this->input('search_word')
        );
    }
}
