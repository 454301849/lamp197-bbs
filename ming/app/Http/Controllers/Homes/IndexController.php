<?php

namespace App\Http\Controllers\Homes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\post;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * 首页展示控制器
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = post::get();
        return view('homes/index',compact('res'));
    }

   
}
