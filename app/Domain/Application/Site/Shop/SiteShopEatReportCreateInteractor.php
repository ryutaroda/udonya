<?php

namespace App\Domain\Application\Site\Shop;

use App\Models\EatReport;
use App\Models\Shop;
use App\UseCase\Site\Shop\EatReport\Create\SiteShopEatReportCreateInputData;
use App\UseCase\Site\Shop\EatReport\Create\SiteShopEatReportCreateOutputData;
use App\UseCase\Site\Shop\EatReport\Create\SiteShopEatReportCreateUseCaseInterface;
use Illuminate\Support\Facades\Auth;

class SiteShopEatReportCreateInteractor implements SiteShopEatReportCreateUseCaseInterface
{
    /**
     * @inheritDoc
     */
    public function invoke(SiteShopEatReportCreateInputData $input): SiteShopEatReportCreateOutputData
    {
        $shopId = $input->getShopId();
        $authUserId = Auth::id();
        return new SiteShopEatReportCreateOutputData(
            $shopId,
            $authUserId
        );
    }
}
