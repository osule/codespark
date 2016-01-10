<?php

namespace App\Http\Controllers\CodeSpark;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * Show the `Home` page.
     *
     * @return Response
     */
    public function getIndex()
    {
        return view('app.home');
    }

    /**
     * Show the `Get More` page.
     *
     * @return Response
     */
    public function getMore()
    {
        return view('app.more');
    }

    /**
     * Show the `Get Involved` page.
     *
     * @return Response
     */
    public function getInvolved($name)
    {
        return view('app.getinvolved');
    }
}
