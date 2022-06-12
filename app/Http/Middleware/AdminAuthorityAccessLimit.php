<?php

namespace App\Http\Middleware;

use App\Enums\UserRoles;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthorityAccessLimit
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        // マスター権限管理者のみアクセス可能
        if (Auth::user()->role === UserRoles::MASTER_USER) {
            return $next($request);
        }
        return redirect()->route('site.top');
    }
}
