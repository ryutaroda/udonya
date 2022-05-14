<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Shop\StoreRequest;
use App\Http\Requests\Admin\Shop\UpdateRequest;
use App\Models\Prefecture;
use App\Models\Shop;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * GET /shops.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $shops = Shop::with('prefecture')->get();
        return view('admin.shop.index', compact('shops'));
    }

    /**
     * GET /shop/create.
     *
     * @return Application|Factory|View
     */
    public function create(): Application|Factory|View
    {
        $prefectures = Prefecture::all();
        return view('admin.shop.create', compact('prefectures'));
    }

    /**
     * POST /shop/store.
     *
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $userId = Auth::id();
        $shop = new Shop();
        $request->merge(['create_user_id' => $userId, 'update_user_id' => $userId]);
        $shop->fill($request->all())->save();
        return redirect()->route('admin.shop.index')->with('flash_message', '新しくお店を登録しました!!');
    }

    /**
     * GET /shop/{shop}/edit.
     *
     * @param Shop $shop
     * @return Application|Factory|View
     */
    public function edit(Shop $shop): Application|Factory|View
    {
        $prefectures = Prefecture::all();
        return view('admin.shop.edit', compact(['shop', 'prefectures']));
    }

    /**
     * POST /shop/{shop}/update.
     *
     * @param UpdateRequest $request
     * @param Shop $shop
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Shop $shop): RedirectResponse
    {
        $userId = Auth::id();
        $request->merge(['update_user_id' => $userId]);
        $shop->fill($request->all())->save();
        return redirect()->route('admin.shop.index')->with('flash_message', 'お店の情報を更新しました');
    }
}
