<?php

namespace App\Http\ViewModels\Site\Shop\EatReport;

use App\Constants\CommonConst;
use App\Models\Shop;
use App\Models\ShopMenu;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use JetBrains\PhpStorm\Pure;

class CreateViewModel
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
