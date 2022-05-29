<?php

namespace App\UseCase\Site\Shop\Show;


use App\Models\Shop;

class SiteShopShowInputData
{
    /** @var Shop */
    private Shop $shop;

    /**
     * @param Shop $shop
     */
    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }

    /**
     * @return Shop
     */
    public function getShop(): Shop
    {
        return $this->shop;
    }
}
