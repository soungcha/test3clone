<?php

namespace App\Http\Controllers\Main;

use App\Http\Model\Talent;
use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends CommonController
{
    //
    public function index()
    {
        $data =  Talent::orderBy("title","asc")->paginate(15);
        return view("main.search")->with("data",$data);
    }
}
