<?php

namespace App\Http\ViewModels\Site\MyPage;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditViewModel
{
    /** @var User */
    private User $user;
    /** @var string  */
    private string $userName;
    /** @var string  */
    private string $userCreatedAt;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->userName = $user->name;
        $this->userCreatedAt = $user->created_at->format('Y.m.d');
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getUserName(): mixed
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getUserCreatedAt(): mixed
    {
        return $this->userCreatedAt;
    }

    /**
     * @return bool
     */
    public function isMyMyPage(): bool
    {
        if ($this->user->id === Auth::id()) {
            return true;
        }
        return false;
    }
}
