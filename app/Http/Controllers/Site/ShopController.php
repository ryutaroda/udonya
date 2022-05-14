<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ShopController\IndexRequest;
use App\Models\Prefecture;
use App\Models\Shop;
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
                ->where('name', 'like', "%" . $searchWord . "%");
        }
        $shops = $shopsQuery->paginate();
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
        $prefectures = Prefecture::all();
        return view('page.shop.show', compact(['shop', 'prefectures']));
    }
}