<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shop\StoreRequest;
use App\Http\Requests\Shop\UpdateRequest;
use App\Models\Prefecture;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

/**
 * tailwind sample
 */
class ShopController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $shops = Shop::with('prefecture')->get();
        return view('shop.index', compact('shops'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        $prefectures = Prefecture::all();
        return view('shop.create', compact('prefectures'));
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $userId = Auth::id();
        $shop = new Shop();
        $request->merge(['create_user_id' => $userId, 'update_user_id' => $userId]);
        $shop->fill($request->all())->save();
        return redirect()->route('shop.index')->with('flash_message', '新しくお店を登録しました!!');
    }

    /**
     * @param Shop $shop
     * @return Application|Factory|View
     */
    public function edit(Shop $shop): Application|Factory|View
    {
        $prefectures = Prefecture::all();
        return view('shop.edit', compact(['shop', 'prefectures']));
    }

    /**
     * @param UpdateRequest $request
     * @param Shop $shop
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Shop $shop): RedirectResponse
    {
        $userId = Auth::id();
        $request->merge(['update_user_id' => $userId]);
        $shop->fill($request->all())->save();
        return redirect()->route('shop.index')->with('flash_message', 'お店の情報を更新しました');
    }
}
