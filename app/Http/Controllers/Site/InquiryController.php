<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Inquiry\StoreRequest;
use App\Models\Inquiry;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class InquiryController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('site.inquiry.create');
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $inquiry = new Inquiry();
        $inquiry->email = $request->email;
        $inquiry->name = $request->name;
        $inquiry->title = $request->title;
        $inquiry->contents = $request->contents;
        $inquiry->save();
        return back()->with('flash_message', 'お問合せ完了です。');
    }
}
