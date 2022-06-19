<?php

namespace App\Http\ViewModels\Site\Shop\EatReport;

use App\Constants\CommonConst;
use App\Models\Shop;
use App\Models\ShopMenu;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\Pure;

class IndexViewModel
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

    /**
     * @param ?string $path
     * @return string
     */
    public function getEatImageUrl(?string $path): string
    {
        if ($path){
            if (Storage::exists($path)) {
                return Storage::url($path);
            } else {
                return config('app.url').CommonConst::NO_IMAGE_PATH;
            }
        } else {
            return config('app.url').CommonConst::NO_IMAGE_PATH;
        }
    }

}
