<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ShopMenu\StoreRequest;
use App\Http\Requests\Admin\ShopMenu\UpdateRequest;
use App\Models\Prefecture;
use App\Models\Shop;
use App\Models\ShopMenu;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShopMenuController extends Controller
{
    /**
     * @param Shop $shop
     * @return Application|Factory|View
     */
    public function index(Shop $shop): Application|Factory|View
    {
        $shop_menus = ShopMenu::where('shop_id',$shop->id)->get();
        return view('admin.shop_menu.index', compact('shop', 'shop_menus'));
    }

    /**
     * @param Shop $shop
     * @return Application|Factory|View
     */
    public function create(Shop $shop): Application|Factory|View
    {
        return view('admin.shop_menu.create', compact('shop'));
    }


    /**
     * @param StoreRequest $request
     * @param Shop $shop
     * @return RedirectResponse
     */
    public function store(StoreRequest $request, Shop $shop)
    {
        $userId = Auth::id();
        $shopMenu = new ShopMenu();
        $request->merge([
            'shop_id' => $shop->id,
            'create_user_id' => $userId,
            'update_user_id' => $userId,
        ]);
        $shopMenu->fill($request->all());
        $shopMenu->image_path = $this->getRegisterImageUploadPath($request->image_path);
        $shopMenu->save();
        return redirect()->route('admin.shop_menu.index', $shop)->with('flash_message', 'うどんを食べました!!');
    }

    /**
     * @param Shop $shop
     * @param ShopMenu $shopMenu
     * @return Application|Factory|View
     */
    public function edit(Shop $shop, ShopMenu $shopMenu): Application|Factory|View
    {
        return view('admin.shop_menu.edit', compact(['shop', 'shopMenu']));
    }

    /**
     * @param UpdateRequest $request
     * @param Shop $shop
     * @param ShopMenu $shopMenu
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, Shop $shop, ShopMenu $shopMenu): RedirectResponse
    {
        $request->merge([
            'update_user_id' => Auth::id(),
        ]);
        $shopMenu->fill($request->all());
        if($request->image_path) {
            $shopMenu->image_path = $this->getUpdateImageUploadPath($request->image_path, $shopMenu);
        }
        $shopMenu->save();
        return redirect()->route('admin.shop_menu.index', $shop)->with('flash_message', 'お店の情報を更新しました');
    }

    /**
     * @param string $imagePath
     * @return false|string|null
     */
    private function getRegisterImageUploadPath(string $imagePath)
    {
        if ($imagePath) {
            return Storage::disk('public')->putFile('shop_menu', $imagePath, 'public');
        }
        return null;
    }

    /**
     * @param ?string $imagePath
     * @param ShopMenu $shopMenu
     * @return false|string|void
     */
    private function getUpdateImageUploadPath(?string $imagePath, ShopMenu $shopMenu)
    {
        if ($imagePath) {
            return Storage::disk('public')->putFile('shop', $imagePath, 'public');
        }
    }
}
