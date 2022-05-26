<?php

namespace App\Domain\Application\Site\ShopController;


use App\UseCase\Site\ShopController\Index\SiteShopIndexInputData;
use App\UseCase\Site\ShopController\Index\SiteShopIndexOutputData;
use App\UseCase\Site\ShopController\Index\SiteShopIndexUseCaseInterface;


class SiteShopIndexInteractor implements SiteShopIndexUseCaseInterface
{
    /**
     * @inheritDoc
     */
    public function invoke(SiteShopIndexInputData $input): SiteShopIndexOutputData
    {
        return new SiteShopIndexOutputData();
    }
}
