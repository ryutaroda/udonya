<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ShopController\IndexRequest;
use App\Models\Prefecture;
use App\Models\Shop;
use App\Models\ShopMenu;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ShopController extends Controller
{
    /**
     * GET /search.
     *
     * @param IndexRequest $request
     * @return Application|Factory|View
     */
    public function index(IndexRequest $request): Application|Factory|View
    {
        $searchWord = $request->search_word;
        $shopsQuery = Shop::with('prefecture');
        if (!is_null($searchWord)) {
            $shopsQuery
                ->where('name', 'like', "%" . $searchWord . "%")
                ->orWhere('address1', 'like', "%" . $searchWord . "%")
                ->orWhere('address2', 'like', "%" . $searchWord . "%")
                ->orWhere('address3', 'like', "%" . $searchWord . "%");
        }
        $shops = $shopsQuery->orderBy('id', 'desc')->paginate();
        return view(
            'site.shop.index',
            compact([
                'shops',
                'searchWord'
            ])
        );
    }

    /**
     * GET /udons/{shop}.
     *
     * @param Shop $shop
     * @return Application|Factory|View
     */
    public function show(Shop $shop): Application|Factory|View
    {
        $shopMenuList = ShopMenu::where('shop_id', $shop->id)->get();
        return view('site.shop.show', compact(['shop', 'shopMenuList']));
    }
}
