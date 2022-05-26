<?php

namespace App\Domain\Application\Site\ShopController;


use App\UseCase\Site\ShopController\Show\SiteShopShowInputData;
use App\UseCase\Site\ShopController\Show\SiteShopShowOutputData;
use App\UseCase\Site\ShopController\Show\SiteShopShowUseCaseInterface;

class SiteShopShowInteractor implements SiteShopShowUseCaseInterface
{
    /**
     * @inheritDoc
     */
    public function invoke(SiteShopShowInputData $input): SiteShopShowOutputData
    {

        return new SiteShopShowOutputData();
    }
}
