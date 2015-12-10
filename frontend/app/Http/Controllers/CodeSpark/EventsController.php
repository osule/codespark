<?php
namespace App\Http\Controllers\CodeSpark;

use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Show the `About` page.
     *
     * @return Response
     */
    public function getSection($section)
    {
        if ($section === 'all') {
            return view('events.events');
        }

        return view(sprintf('events.%s', $section));
    }
}
