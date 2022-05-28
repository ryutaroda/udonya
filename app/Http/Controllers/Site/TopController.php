<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Top\GetTopRequest;
use App\Http\ViewModels\Site\Top\TopViewModel;
use App\UseCase\Site\Top\Top\SiteTopTopUseCaseInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TopController extends Controller
{
    /**
     * GET /.
     *
     * @param GetTopRequest $request
     * @param SiteTopTopUseCaseInterface $interactor
     * @return Application|Factory|View
     */
    public function top(
        GetTopRequest $request,
        SiteTopTopUseCaseInterface $interactor
    ): Application|Factory|View {
        $input = $request->makeInputData();
        $output = $interactor->invoke($input);
        $viewModel = new TopViewModel();

        return view("site.top")->with(
            compact("viewModel")
        );
    }
}
