<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\user_admin;
use Session;

class User_AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = user_admin::get();
        
        return view('admin/user_admin',compact('res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/user_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $pass = $request->pass;
        $newpass = $request->newpass;
        if($name !== ''){
            if($pass !== ''){
                if($newpass !== ''){
                    if($pass == $newpass){
                        $res = $request->except('_token','newpass');
                        $add = user_admin::create($res);
                        if($add){
                            return redirect('admin/user_admin')->with('msg','添加成功');
                        }else{
                            return redirect('admin/user_admin/create')->with('msg','添加失败，请重试');
                        }
                    }else{
                         return redirect('admin/user_admin/create')->with('msg','两次密码不一致，请核对');
                    }
                }else{
                     return redirect('admin/user_admin/create')->with('msg','请确认密码');
                }
            }else{
                 return redirect('admin/user_admin/create')->with('msg','密码不能为空');
            }
        }else{
            return redirect('admin/user_admin/create')->with('msg','用户名不能为空');
        }
        
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
        $users = user_admin::where('id',$id)->first();
        return view('admin/edit',compact('users'));
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
        $res = $request->except('_token','_method');
        $res = user_admin::where('id',$id)->update($res);
        // dd($res);
        if($res) {
            return redirect('admin/user_admin')->with('msg','修改成功');
        }else{
            return redirect('admin/user_admin')->with('msg','修改失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = user_admin::where('id',$id)->delete();
        // return $res;
        dd($res);
        
    }
}
