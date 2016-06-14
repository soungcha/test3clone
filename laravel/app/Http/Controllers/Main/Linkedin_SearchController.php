<?php

namespace App\Http\Controllers\Main;

use App\Http\Model\Talent;
use Illuminate\Http\Request;

use App\Http\Requests;

class Linkedin_SearchController extends CommonController
{
    //
    public function index2()
    {
        return view("main.linkedin_search");
    }

    public function index()
    {
        return view("main.link_search");
    }
}
