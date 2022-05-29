<?php

namespace App\Domain\Application\Site\Shop;


use App\Models\Shop;
use App\UseCase\Site\Shop\Index\SiteShopIndexInputData;
use App\UseCase\Site\Shop\Index\SiteShopIndexOutputData;
use App\UseCase\Site\Shop\Index\SiteShopIndexUseCaseInterface;


class SiteShopIndexInteractor implements SiteShopIndexUseCaseInterface
{
    /**
     * @inheritDoc
     */
    public function invoke(SiteShopIndexInputData $input): SiteShopIndexOutputData
    {
        $searchWord = $input->getSearchWord();
        $shopsQuery = Shop::with('prefecture');
        if (!$searchWord) {
            $shopsQuery
                ->where('name', 'like', "%" . $searchWord . "%")
                ->orWhere('address1', 'like', "%" . $searchWord . "%")
                ->orWhere('address2', 'like', "%" . $searchWord . "%")
                ->orWhere('address3', 'like', "%" . $searchWord . "%");
        }
        $shops = $shopsQuery->orderBy('id', 'asc')->paginate();

        return new SiteShopIndexOutputData(
            $shops,
            $searchWord
        );
    }
}
