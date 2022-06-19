<?php

namespace App\UseCase\Site\Shop\EatReport\Create;

interface SiteShopEatReportCreateUseCaseInterface
{
    /**
     * @param SiteShopEatReportCreateInputData $input
     * @return SiteShopEatReportCreateOutputData
     */
    public function  invoke(SiteShopEatReportCreateInputData $input): SiteShopEatReportCreateOutputData;
}
