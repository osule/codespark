<?php
namespace App\Http\Controllers\CodeSpark;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Show the `About` page.
     *
     * @return Response
     */
    public function getSection($section)
    {
        return view(sprintf('about.%s', $section));
    }
}
