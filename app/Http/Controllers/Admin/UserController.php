<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * GET /users.
     *
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
}
