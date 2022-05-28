<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Shop\IndexRequest;
use App\Http\Requests\Site\Shop\ShowRequest;
use App\Http\ViewModels\Site\Shop\IndexViewModel;
use App\Http\ViewModels\Site\Shop\ShowViewModel;
use App\Models\Shop;
use App\UseCase\Site\Shop\Index\SiteShopIndexUseCaseInterface;
use App\UseCase\Site\Shop\Show\SiteShopShowUseCaseInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ShopController extends Controller
{
    /**
     * GET /search.
     *
     * @param IndexRequest $request
     * @param SiteShopIndexUseCaseInterface $interactor
     * @return Application|Factory|View
     */
    public function index(
        IndexRequest $request,
        SiteShopIndexUseCaseInterface $interactor
    ) {
        $input = $request->makeInputData();
        $output = $interactor->invoke($input);
        $viewModel = new IndexViewModel(
            $output->getShops(),
            $output->getSearchWord()
        );

        return view("site.shop.index")->with(
            compact("viewModel")
        );
    }

    /**
     * GET /udons/{shop}.
     *
     * @param ShowRequest $request
     * @param SiteShopShowUseCaseInterface $interactor
     * @param Shop $shop
     * @return Application|Factory|View
     */
    public function show(
        ShowRequest $request,
        SiteShopShowUseCaseInterface $interactor,
        Shop $shop
    ): Application|Factory|View {
        $input = $request->makeInputData($shop);
        $output = $interactor->invoke($input);
        $viewModel = new ShowViewModel(
            $output->getShop(),
            $output->getShopMenuList()
        );
        return view("site.shop.show")->with(
            compact("viewModel")
        );
    }
}
