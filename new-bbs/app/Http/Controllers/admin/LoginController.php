<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\user_admin;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = user_admin::where('id',1)->first();
        
        // dd($list);
        return view('admin/login', compact('list'));
    }

    public function login(Request $request)
    {
        
        if ($request->isMethod('post')) {
           // dd($request->all());
            $res = $request->except('_token');
            $uname = user_admin::where('name', $res['name'])->first();
            if (!$uname) {
                // 如果错误返回登陆页
                session()->flash('error', '您输入的用户名或密码不正确!');
                return back();
            }
            // if (!Hash::check($res['pass'], $uname->password)) {
            //     session()->flash('error', '您输入的用户名或密码不正确!');

            //     return back();
            // }

            //设置权限
            // if($uname->role!=10){
            //     session()->flash('error', '此账号没有权限登录后台!');
            //     return redirect('/admin/index');
            // }
            // session(['userid' => $uname->id]);


            //插入用户最后登陆时间及最后登陆ip
            // user_admin::where('user_id',$name->id)->update([

            //     'last_login_at' => Carbon::now(),

            //     'last_login_ip' => $request->ip()

            // ]);

            session()->flash('msg', '登录成功!');

            return redirect('/admin/index');
        }else{
            if (session('userid')) {
                return redirect('/admin/index');
            }

            return view('index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
