<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class PageController extends Controller
{
    /**
     * GET /pages/privacy-policy.
     *
     * @return Application|Factory|View
     */
    public function privacyPolicy()
    {
        return view('site.pages.privacy-policy');
    }

    /**
     * GET /pages/terms-of-service.
     *
     * @return Application|Factory|View
     */
    public function termsOfService()
    {
        return view('site.pages.terms-of-service');
    }
}
