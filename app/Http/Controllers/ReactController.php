<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $greeting = 'hola';

        return view('react', ['greeting' => $greeting]);
        // return response()->json(['greeting' => 'hola']);
    }
}
