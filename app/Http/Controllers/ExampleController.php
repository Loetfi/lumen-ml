<?php

namespace App\Http\Controllers;

use Log;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        Log::emergency('The system is down!');
        // Log::info('An informational message.');
    }

    //
}
