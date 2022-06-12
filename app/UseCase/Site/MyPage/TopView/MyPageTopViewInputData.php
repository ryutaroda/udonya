<?php

namespace App\UseCase\Site\MyPage\TopView;


class MyPageTopViewInputData
{
    /** @var int */
    private int $userId;

    /**
     * @param int $userId
     */
    public function __construct(int $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }
}
