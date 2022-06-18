<?php

namespace App\Http\ViewModels\Site\Shop;

use App\Constants\CommonConst;
use App\Models\Shop;
use App\Models\ShopMenu;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\Pure;

class IndexViewModel
{
    /** @var LengthAwarePaginator  */
    private LengthAwarePaginator $shops;
    /** @var string */
    private string $searchWord;

    /**
     * @param LengthAwarePaginator $shops
     * @param string $searchWord
     */
    public function __construct(LengthAwarePaginator $shops, string $searchWord)
    {
        $this->shops = $shops;
        $this->searchWord = $searchWord;
    }


    /**
     * @return LengthAwarePaginator
     */
    public function getShops(): LengthAwarePaginator
    {
        return $this->shops;
    }

    /**
     * @return string
     */
    public function getSearchWord(): string
    {
        return $this->searchWord;
    }

    /**
     * @return int
     */
    #[Pure] public function getShopTotal(): int
    {
        return $this->shops->total();
    }

    /**
     * @param Shop $shop
     * @return string
     */
    public function getShopImageUrl(Shop $shop): string
    {
        if ($shop->shop_image_path){
            if (Storage::exists($shop->shop_image_path)) {
                return Storage::url($shop->shop_image_path);
            } else {
                return config('app.url').CommonConst::NO_IMAGE_PATH;
            }
        } else {
            return config('app.url').CommonConst::NO_IMAGE_PATH;
        }
    }

}
