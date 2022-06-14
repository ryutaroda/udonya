<?php

namespace App\Http\Controllers\Site\MyPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\MyPage\MyPage\TopViewRequest;
use App\Http\ViewModels\Site\MyPage\TopViewModel;
use App\UseCase\Site\MyPage\TopView\MyPageTopViewUseCaseInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class MyPageController extends Controller
{
    /**
     * GET /mypage/{userId}
     *
     * @param TopViewRequest $request
     * @param MyPageTopViewUseCaseInterface $interactor
     * @param int $userId
     * @return Application|Factory|View
     */
    public function top(
        TopViewRequest $request,
        MyPageTopViewUseCaseInterface $interactor,
        int $userId
    ) {
        $input = $request->makeInputData($userId);
        $output = $interactor->invoke($input);
        $viewModel = new TopViewModel(
            $output->getUser()
        );
        return view("site.mypage.top")->with(
            compact("viewModel")
        );
    }
}
