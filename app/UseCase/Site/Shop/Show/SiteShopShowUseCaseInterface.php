<?php

namespace App\UseCase\Site\Shop\Show;

interface SiteShopShowUseCaseInterface
{
    /**
     * @param SiteShopShowInputData $input
     * @return SiteShopShowOutputData
     */
    public function invoke(SiteShopShowInputData $input): SiteShopShowOutputData;
}
