<?php

namespace App\UseCase\Site\ShopController\Index;

use App\UseCase\Site\ShopController\Index\SiteShopIndexInputData;
use App\UseCase\Site\ShopController\Index\SiteShopIndexOutputData;

interface SiteShopIndexUseCaseInterface
{
    /**
     * @param SiteShopIndexInputData $input
     * @return SiteShopIndexOutputData
     */
    public function invoke(SiteShopIndexInputData $input): SiteShopIndexOutputData;
}
