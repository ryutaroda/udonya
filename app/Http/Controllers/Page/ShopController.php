<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\ShopController\IndexRequest;
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
     * @param IndexRequest $request
     * @return Application|Factory|View
     */
    public function index(IndexRequest $request): Application|Factory|View
    {
        $searchWord = $request->search_word;
        $shopsQuery = Shop::with('prefecture');
        if (!is_null($searchWord)) {
            $shopsQuery
                ->where('name', 'like', "%" . $searchWord . "%");
        }
        $shops = $shopsQuery->paginate(2);
        return view(
            'page.shop.index',
            compact([
                'shops',
                'searchWord'
            ])
        );
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
