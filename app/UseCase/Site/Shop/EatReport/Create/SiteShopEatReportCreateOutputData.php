<?php

namespace App\UseCase\Site\Shop\EatReport\Create;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Collection;

class SiteShopEatReportCreateOutputData
{
    /** @var int */
    private int $shopId;
    /** @var int */
    private int $authUserId;

    /**
     * @param int $shopId
     * @param int $authUserId
     */
    public function __construct(int $shopId, int $authUserId)
    {
        $this->shopId = $shopId;
        $this->authUserId = $authUserId;
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }

    /**
     * @return int
     */
    public function getAuthUserId(): int
    {
        return $this->authUserId;
    }
}
