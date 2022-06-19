<?php

namespace App\UseCase\Site\Shop\EatReport\Index;


class SiteShopEatReportIndexInputData
{
    /** @var int */
    private int $shopId;

    /**
     * @param int $shopId
     */
    public function __construct(int $shopId)
    {
        $this->shopId = $shopId;
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }
}
