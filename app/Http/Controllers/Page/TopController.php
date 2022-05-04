<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * tailwind sample
 */
class TopController extends Controller
{
    // 検索フォームのみの画面
    /**
     * @return Application|Factory|View
     */
    public function top(): Application|Factory|View
    {
        return view('page.top');
    }
}
