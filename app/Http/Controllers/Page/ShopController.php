<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Prefecture;
use App\Models\Shop;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * tailwind sample
 */
class ShopController extends Controller
{
    // 検索フォームと検索結果のページ
    /**
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $shops = Shop::with('prefecture')->get();
        return view('page.shop.index', compact('shops'));
    }

    // 店舗詳細
    /**
     * @param Shop $shop
     * @return Application|Factory|View
     */
    public function show(Shop $shop): Application|Factory|View
    {
        $prefectures = Prefecture::all();
        return view('page.shop.show', compact(['shop', 'prefectures']));
    }
}
