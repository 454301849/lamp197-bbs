@extends('parent.home')
@section('content')

                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="login_cont">
                                <div class="login_nav">
                                        <div class="nav_slider">
                                                <a href="#" class="signup focus">注册</a>
                                                
                                        </div>
                                </div>
                                <form>
                                        <div class="input_signup active">
                                                <input class="input" id="user_name" type="text" aria-label="用户名（包含字母／数字／下划线" placeholder="用户名">
                                                <div class="hint">请填写符合格式的用户名</div>
                                                <input class="input" id="user_email" type="text" aria-label="邮箱" placeholder="邮箱">
                                                <div class="hint">请填写邮箱</div>
                                                <input class="input" id="phone" type="text" class="account" aria-label="手机号（仅支持中国大陆）" placeholder="手机号（仅支持中国大陆）">
                                                <div class="hint">请填写手机号</div>
                                                <input class="input" id="password" type="password" aria-label="密码" placeholder="密码（不少于 6 位）">
                                                <div class="hint">请填写符合格式的密码</div>
                                                <input class="input" id="repassword" type="password" aria-label="密码" placeholder="再次输入密码">
                                                <div class="hint">请再次输入密码</div>
                                                <input type="submit" id="submit" class="button" name="button" value="注册">
                                        </div>
                                </form>
                        </div>
                </div>
                <!-- End of Page Container -->
@endsection('content')
