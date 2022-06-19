<?php

namespace App\UseCase\Site\Shop\EatReport\Store;


class SiteShopEatReportStoreOutputData
{
    /** @var int */
    private $shopId;

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
