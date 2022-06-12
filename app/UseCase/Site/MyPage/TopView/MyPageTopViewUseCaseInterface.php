<?php

namespace App\UseCase\Site\MyPage\TopView;

interface MyPageTopViewUseCaseInterface
{
    /**
     * @param MyPageTopViewInputData $input
     * @return MyPageTopViewOutputData
     */
    public function invoke(MyPageTopViewInputData $input): MyPageTopViewOutputData;
}
