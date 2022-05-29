<?php

namespace App\Http\ViewModels\Site\Shop;

use App\Models\Shop;
use App\Models\ShopMenu;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ShowViewModel
{
    /** @var string  */
    const NO_IMAGE_PATH = '/image/no_image01.jpeg';

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

    /**
     * @return string
     */
    public function getShopImageUrl(): string
    {
        if ($this->shop->shop_image_path){
            if (Storage::exists($this->shop->shop_image_path)) {
                return Storage::url($this->shop->shop_image_path);
            } else {
                return config('app.url').$this::NO_IMAGE_PATH;
            }
        } else {
            return config('app.url').$this::NO_IMAGE_PATH;
        }
    }

    /**
     * @return string
     */
    public function getShopMenuImageUrl(): string
    {
        if ($this->shop->menu_image_path){
            if (Storage::exists($this->shop->menu_image_path)) {
                return Storage::url($this->shop->menu_image_path);
            } else {
                return config('app.url').$this::NO_IMAGE_PATH;
            }
        } else {
            return config('app.url').$this::NO_IMAGE_PATH;
        }
    }

    public function getMenuImageUrl(ShopMenu $menu): string
    {
        if ($menu->image_path){
            if (Storage::exists($menu->image_path)) {
                return Storage::url($menu->image_path);
            } else {
                return config('app.url').$this::NO_IMAGE_PATH;
            }
        } else {
            return config('app.url').$this::NO_IMAGE_PATH;
        }
    }
}
