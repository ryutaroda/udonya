<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TopController extends Controller
{
    /**
     * GET /.
     *
     * @return Application|Factory|View
     */
    public function top(): Application|Factory|View
    {
        return view('site.top');
    }
}
