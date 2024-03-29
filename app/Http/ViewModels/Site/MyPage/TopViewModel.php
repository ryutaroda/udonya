<?php

namespace App\Http\ViewModels\Site\MyPage;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class TopViewModel
{
    /** @var User */
    private User $user;
    /** @var string  */
    private string $userName;
    /** @var string  */
    private string $userCreatedAt;
    /** @var UserProfile  */
    private UserProfile $userProfile;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->userName = $user->name;
        $this->userCreatedAt = $user->created_at->format('Y.m.d');
        $this->userProfile = $user->user_profile;
    }

    /**
     * @return UserProfile
     */
    public function getUserProfile(): mixed
    {
        return $this->userProfile;
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
