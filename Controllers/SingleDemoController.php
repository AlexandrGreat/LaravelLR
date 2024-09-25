<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleDemoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,String $res)
    {
        if ($res=='no')
        return redirect('/CorrectAnswer');
        else
        return redirect('/WrongAnswer');
    }
}
