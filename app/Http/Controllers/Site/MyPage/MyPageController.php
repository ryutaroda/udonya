<?php

namespace App\Http\Controllers\Site\MyPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\MyPage\MyPage\TopViewRequest as MyPageTopViewRequest;
use App\Http\ViewModels\Site\MyPage\EditViewModel;
use App\Http\ViewModels\Site\MyPage\TopViewModel as MyPageTopViewModel;
use App\UseCase\Site\MyPage\TopView\MyPageTopViewUseCaseInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;


class MyPageController extends Controller
{
    /**
     * GET /mypage/{userId}
     *
     * @param MyPageTopViewRequest $request
     * @param MyPageTopViewUseCaseInterface $interactor
     * @param int $userId
     * @return Application|Factory|View
     */
    public function top(
        MyPageTopViewRequest $request,
        MyPageTopViewUseCaseInterface $interactor,
        int $userId
    ) {
        $input = $request->makeInputData($userId);
        $output = $interactor->invoke($input);
        $viewModel = new MyPageTopViewModel(
            $output->getUser()
        );
        return view("site.mypage.top")->with(
            compact("viewModel")
        );
    }

    public function edit()
    {
        $authenticatedUser = Auth::user();
        $viewModel = new EditViewModel($authenticatedUser);
        return view("site.mypage.edit")->with(
            compact("viewModel")
        );
    }
}
