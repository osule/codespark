<?php
namespace App\Http\Controllers\CodeSpark;

use App\Http\Controllers\Controller;

class ProgrammesController extends Controller
{
    /**
     * Show the `About` page.
     *
     * @return Response
     */
    public function getSection($section)
    {
        if ($section === 'all') {
            return view('news.news');
        }
        return view(sprintf('programmes.%s', $section));
    }
}
