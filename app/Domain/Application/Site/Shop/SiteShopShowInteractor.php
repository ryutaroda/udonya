<?php

namespace App\Domain\Application\Site\Shop;


use App\Models\ShopMenu;
use App\UseCase\Site\Shop\Show\SiteShopShowInputData;
use App\UseCase\Site\Shop\Show\SiteShopShowOutputData;
use App\UseCase\Site\Shop\Show\SiteShopShowUseCaseInterface;

class SiteShopShowInteractor implements SiteShopShowUseCaseInterface
{
    /**
     * @inheritDoc
     */
    public function invoke(SiteShopShowInputData $input): SiteShopShowOutputData
    {
        $shopMenuList = ShopMenu::where('shop_id', $input->getShop()->id)->get();
        return new SiteShopShowOutputData(
            $input->getShop(),
            $shopMenuList
        );
    }
}
