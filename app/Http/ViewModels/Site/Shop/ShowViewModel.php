<?php

namespace App\Http\ViewModels\Site\Shop;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Collection;

class ShowViewModel
{
    /** @var Shop  */
    private Shop $shop;
    /** @var Collection */
    private Collection $shopMenuList;

    /**
     * @param Shop $shop
     * @param Collection $shopMenuList
     */
    public function __construct(Shop $shop, Collection $shopMenuList)
    {
        $this->shop = $shop;
        $this->shopMenuList = $shopMenuList;
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
    public function getShopMenuList(): Collection
    {
        return $this->shopMenuList;
    }

}
