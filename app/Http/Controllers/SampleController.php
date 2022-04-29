<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

/**
 * tailwind sample
 */
class SampleController extends Controller
{
    public function menu()
    {
        return view('sample.menu');
    }

    public function sample1()
    {
        return view('sample.sample1');
    }

    /**
     * alerts
     * @return Application|Factory|View
     */
    public function alerts(): Application|Factory|View
    {
        $title = 'Alerts';
        $url = 'https://flowbite.com/docs/components/alerts/';
        return view('sample.alerts', compact(['title', 'url']));
    }

    /**
     * accordion
     * @return Application|Factory|View
     */
    public function accordion(): Application|Factory|View
    {
        $title = 'Accordion';
        $url = 'https://flowbite.com/docs/components/accordion/';
        return view('sample.accordion', compact(['title', 'url']));
    }

    /**
     * avatar
     * @return Application|Factory|View
     */
    public function avatar(): Application|Factory|View
    {
        $title = 'Avatar';
        $url = 'https://flowbite.com/docs/components/avatar/';
        return view('sample.avatar', compact(['title', 'url']));
    }

    /**
     * badge
     * @return Application|Factory|View
     */
    public function badge(): Application|Factory|View
    {
        $title = 'Badge';
        $url = 'https://flowbite.com/docs/components/badge/';
        return view('sample.badge', compact(['title', 'url']));
    }

    /**
     * breadcrumb
     * @return Application|Factory|View
     */
    public function breadcrumb(): Application|Factory|View
    {
        $title = 'Breadcrumb';
        $url = 'https://flowbite.com/docs/components/breadcrumb/';
        return view('sample.breadcrumb', compact(['title', 'url']));
    }
}
