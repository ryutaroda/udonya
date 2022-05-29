<?php

namespace App\UseCase\Site\Shop\Index;

interface SiteShopIndexUseCaseInterface
{
    /**
     * @param SiteShopIndexInputData $input
     * @return SiteShopIndexOutputData
     */
    public function invoke(SiteShopIndexInputData $input): SiteShopIndexOutputData;
}
