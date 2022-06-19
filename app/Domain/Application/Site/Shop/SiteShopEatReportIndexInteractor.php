<?php

namespace App\Domain\Application\Site\Shop;

use App\Models\EatReport;
use App\Models\Shop;
use App\UseCase\Site\Shop\EatReport\Index\SiteShopEatReportIndexInputData;
use App\UseCase\Site\Shop\EatReport\Index\SiteShopEatReportIndexOutputData;
use App\UseCase\Site\Shop\EatReport\Index\SiteShopEatReportIndexUseCaseInterface;

class SiteShopEatReportIndexInteractor implements SiteShopEatReportIndexUseCaseInterface
{
    /**
     * @inheritDoc
     */
    public function invoke(SiteShopEatReportIndexInputData $input): SiteShopEatReportIndexOutputData
    {
        $shopId = $input->getShopId();
        $shop = Shop::find($shopId);
        $eatReports = EatReport::where('shop_id', $shopId)->get();

        return new SiteShopEatReportIndexOutputData(
            $shop,
            $eatReports
        );
    }
}
