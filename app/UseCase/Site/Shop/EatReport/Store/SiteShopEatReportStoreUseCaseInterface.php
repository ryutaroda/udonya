<?php

namespace App\UseCase\Site\Shop\EatReport\Store;

interface SiteShopEatReportStoreUseCaseInterface
{
    /**
     * @param SiteShopEatReportStoreInputData $input
     * @return SiteShopEatReportStoreOutputData
     */
    public function  invoke(SiteShopEatReportStoreInputData $input): SiteShopEatReportStoreOutputData;
}
