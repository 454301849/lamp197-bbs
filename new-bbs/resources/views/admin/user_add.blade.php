@extends('admin.common.base')
@section('content')
        <!-- 内容区域 -->
    
    <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span>后台用户<small>添加</small></div>
                        <p class="page-header-description">增加一个管理员用户</p>
                    </div>
                    <div class="am-u-lg-3 tpl-index-settings-button">
                        <button type="button" class="page-header-button"><span class="am-icon-paint-brush"></span> 设置</button>
                    </div>
                </div>

            </div>

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">用户添加</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>


                            <div class="widget-body am-fr">
                          
                                
                            

                                <form class="am-form tpl-form-line-form" action="{{url('admin/user_admin')}}" method="post">
                                {{ csrf_field() }}
                                <!-- {!! method_field('put') !!} -->
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" id="user-name" placeholder="输入要添加的用户名" name="name">
                                            <small>可以为字母数字下划线不少于6位不多于16位字符</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">密码</label>
                                        <div class="am-u-sm-9">
                                            <input type="password" class="tpl-form-input" id="user-name" placeholder="输入密码" name="pass">
                                            <small>不得少于6位，不得超过16位</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">确认密码</label>
                                        <div class="am-u-sm-9">
                                            <input type="password" class="tpl-form-input" id="user-name" placeholder="再次输入密码" name="newpass">
                                            <small>再次确认下密码</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">是否授权</label>
                                        <div class="am-u-sm-9">
                                            <div class="tpl-switch">
                                                <input type="checkbox" name="droit" class="ios-switch bigswitch tpl-switch-btn" checked="">
                                                <div class="tpl-switch-btn-view">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    

                                    

                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">头像</label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="{{ asset('assets/img/a5.png')}}" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                    <i class="am-icon-cloud-upload"></i>添加头像</button>
                                                <input id="doc-form-file" type="file" multiple="">
                                            </div>

                                        </div>
                                    </div>

                                    <input type="hidden"  name="time" id="getBookTime" value="">

                                   

                                    
                                    

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        <script src="{{ asset('layer/layer.js') }}"></script>
        <script>
            window.onload = function(){
            function getDate(){
            debugger;
            var today = new Date();
            var date;
            date = (today.getFullYear()) +"-" + (today.getMonth() + 1 ) + "-" + today.getDate() + "-" + today.toLocaleTimeString();
            return date;
            }
            window.setInterval(function(){
            document.getElementById("getBookTime").value=getDate();
            }, 1000);
            }
        </script>
         @if (session('msg'))
        <script type="text/javascript">
            layer.msg("{{ session('msg') }}");
        </script>
    @endif
        
        
@endsection