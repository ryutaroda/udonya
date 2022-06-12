<?php

namespace App\UseCase\Site\MyPage\TopView;

use App\Models\User;

class MyPageTopViewOutputData
{
    /** @var User */
    private User $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
