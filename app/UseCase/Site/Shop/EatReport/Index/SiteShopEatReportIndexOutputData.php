<?php

namespace App\UseCase\Site\Shop\EatReport\Index;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Collection;

class SiteShopEatReportIndexOutputData
{
    /** @var Shop */
    private Shop $shop;
    /** @var Collection */
    private Collection $eatReports;

    /**
     * @param Shop $shop
     * @param Collection $eatReports
     */
    public function __construct(Shop $shop, Collection $eatReports)
    {
        $this->shop = $shop;
        $this->eatReports = $eatReports;
    }

    /**
     * @return Shop
     */
    public function getShop(): Shop
    {
        return $this->shop;
    }

    /**
     * @return Collection
     */
    public function getEatReports(): Collection
    {
        return $this->eatReports;
    }
}
