<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * 帖子详情展示方法
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = post::where('id',$id)->get();
        return view('home/show',compact('res'));
    }

    
}
