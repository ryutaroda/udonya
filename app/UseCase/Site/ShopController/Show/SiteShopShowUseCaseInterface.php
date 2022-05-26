<?php

namespace App\UseCase\Site\ShopController\Show;

use App\UseCase\Site\ShopController\Show\SiteShopShowInputData;
use App\UseCase\Site\ShopController\Show\SiteShopShowOutputData;

interface SiteShopShowUseCaseInterface
{
    /**
     * @param SiteShopShowInputData $input
     * @return SiteShopShowOutputData
     */
    public function invoke(SiteShopShowInputData $input): SiteShopShowOutputData;
}
