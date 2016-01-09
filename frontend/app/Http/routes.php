<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$app->group(['namespace' => 'App\Http\Controllers\CodeSpark'], function ($app) {
    /*
    |--------------------------------------------------------------------------
    | Home
    |--------------------------------------------------------------------------
    |
     */
    $app->get('/', ['as' => 'home', 'uses' => 'AppController@getIndex']);

    /*
    |--------------------------------------------------------------------------
    | About us
    |--------------------------------------------------------------------------
    |
     */
    $app->get('/about/{name:[A-Za-z-]+}', ['as' => 'about', 'uses' => 'AboutController@getSection']);

    /*
    |--------------------------------------------------------------------------
    | Our Programmes
    |--------------------------------------------------------------------------
    |
     */
    $app->get('/programmes/{name:[A-Za-z-]+}', ['as' => 'programmes', 'uses' => 'ProgrammesController@getSection']);

    /*
    |--------------------------------------------------------------------------
    | Upcoming Events
    |--------------------------------------------------------------------------
    |
     */
    $app->get('/events/{name:[A-Za-z-]+}', ['as' => 'events', 'uses' => 'EventsController@getSection']);

    /*
    |--------------------------------------------------------------------------
    | News
    |--------------------------------------------------------------------------
    |
     */
    $app->get('/news/{name:[A-Za-z-]+}', ['as' => 'news', 'uses' => 'NewsController@getSection']);

    /*
    |--------------------------------------------------------------------------
    | More
    |--------------------------------------------------------------------------
    |
     */
    $app->get('/more/name:[A-Za-z-]+}/', ['as' => 'more', 'uses' => 'AppController@getMore']);

    /*
    |--------------------------------------------------------------------------
    | Get Involved
    |--------------------------------------------------------------------------
    |
     */
    $app->get('/get-involved/{name:[A-Za-z-]+}', ['as' => 'get-involved', 'uses' => 'AppController@getInvolved']);

});
