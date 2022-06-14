<?php

namespace App\Http\Controllers\Site\MyPage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\MyPage\UserProfile\PostUserProfileUpdateRequest;
use App\Http\ViewModels\Site\MyPage\EditViewModel;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function edit()
    {
        $authenticatedUser = Auth::user();
        if (!$authenticatedUser) {
            return redirect()->route('login');
        }
        $viewModel = new EditViewModel($authenticatedUser);
        return view("site.mypage.edit")->with(
            compact("viewModel")
        );
    }

    public function update(PostUserProfileUpdateRequest $request)
    {
        $user = Auth::user();
        if ((int)$user->id !== (int)$request->userId) {
            return redirect()->route('login');
        }
        // usersテーブル更新
        $user->name = $request->name;
        $user->save();
        // user_profilesテーブル更新
        $userProfile = $user->user_profile;
        $userProfile->like_shops = $request->like_shops;
        $userProfile->many_times_shops = $request->many_times_shops;
        $userProfile->profile = $request->profile;
        $userProfile->url = $request->url;
        $userProfile->save();

        return redirect()->route('site.mypage.top', Auth::id())->with('flash_message', 'プロフィールを更新しました!!');
    }
}
