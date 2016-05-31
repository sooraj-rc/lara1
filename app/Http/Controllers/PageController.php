<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class pageController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function getIndex(){
        return view('welcome');
    }


    public function getAbout()
    {
        $aboutdata = "This is the content";
        return view('pages.about')->  with("aboutdata",$aboutdata);
    }
}