<?php

namespace App\UseCase\Site\Shop\EatReport\Index;

interface SiteShopEatReportIndexUseCaseInterface
{
    /**
     * @param SiteShopEatReportIndexInputData $input
     * @return SiteShopEatReportIndexOutputData
     */
    public function  invoke(SiteShopEatReportIndexInputData $input): SiteShopEatReportIndexOutputData;
}
