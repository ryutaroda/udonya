<?php

namespace App\Domain\Application\Site\MyPage;

use App\Models\User;
use App\UseCase\Site\MyPage\TopView\MyPageTopViewInputData;
use App\UseCase\Site\MyPage\TopView\MyPageTopViewOutputData;
use App\UseCase\Site\MyPage\TopView\MyPageTopViewUseCaseInterface;

class MyPageTopViewInteractor implements MyPageTopViewUseCaseInterface
{
    /**
     * @inheritDoc
     */
    public function invoke(MyPageTopViewInputData $input): MyPageTopViewOutputData
    {
        $userId = $input->getUserId();
        $user = User::find($userId);
        if (!$user) {
            abort(404);
        }
        return new MyPageTopViewOutputData(
            $user
        );
    }
}
