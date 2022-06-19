<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Shop\EatReport\CreateRequest;
use App\Http\Requests\Site\Shop\EatReport\IndexRequest;
use App\Http\Requests\Site\Shop\EatReport\StoreRequest;
use App\Http\ViewModels\Site\Shop\EatReport\CreateViewModel;
use App\Http\ViewModels\Site\Shop\EatReport\IndexViewModel;
use App\UseCase\Site\Shop\EatReport\Create\SiteShopEatReportCreateUseCaseInterface;
use App\UseCase\Site\Shop\EatReport\Index\SiteShopEatReportIndexUseCaseInterface;
use App\UseCase\Site\Shop\EatReport\Store\SiteShopEatReportStoreUseCaseInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ShopEatReportController extends Controller
{
    /**
     * GET /udons/{shop}/eat.
     *
     * @param IndexRequest $request
     * @param SiteShopEatReportIndexUseCaseInterface $interactor
     * @return Application|Factory|View
     */
    public function index(
        IndexRequest $request,
        SiteShopEatReportIndexUseCaseInterface $interactor
    ) {
        $input = $request->makeInputData();
        $output = $interactor->invoke($input);
        $viewModel = new IndexViewModel(
            $output->getShop(),
            $output->getEatReports()
        );

        return view("site.shop.eat_report.index")->with(
            compact("viewModel")
        );
    }

    /**
     * GET /udons/{shop}/eat/create.
     *
     * @param CreateRequest $request
     * @param SiteShopEatReportCreateUseCaseInterface $interactor
     * @return Application|Factory|View
     */
    public function create(
        CreateRequest $request,
        SiteShopEatReportCreateUseCaseInterface $interactor
    ) {
        $input = $request->makeInputData();
        $output = $interactor->invoke($input);
        $viewModel = new CreateViewModel(
            $output->getShopId(),
            $output->getAuthUserId()
        );

        return view("site.shop.eat_report.create")->with(
            compact("viewModel")
        );
    }

    /**
     * POST /udons/{shop}/eat.
     * @param StoreRequest $request
     * @param SiteShopEatReportStoreUseCaseInterface $interactor
     * @return RedirectResponse
     */
    public function store(
        StoreRequest $request,
        SiteShopEatReportStoreUseCaseInterface $interactor
    ) {
        $input = $request->makeInputData();
        $output = $interactor->invoke($input);
        return redirect()->route('site.shop.eat.index', $output->getShopId())->with(
            'flash_message',
            '食べたを投稿しました！！'
        );
    }
}
