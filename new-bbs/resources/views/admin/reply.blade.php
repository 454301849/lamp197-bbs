

@extends('admin.common.base')
@section('content')  
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">文章列表</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a type="button" class="am-btn am-btn-default am-btn-success" href="{{ url('adminuser') }}"><span class="am-icon-plus"></span> 添加后台用户</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
          </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>用户头像</th>
                                                <th>用户简介</th>
                                                <th>用户名称</th>
                                                <th>添加时间</th>
                                                <th>相关操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $v)
                                            <tr class="gradeX">
                                                <td>
                                                    <img src="assets/img/k.jpg" class="tpl-table-line-img" alt="">
                                                </td>
                                                <td class="am-text-middle">{{ $v->droit }}</td>
                                                <td class="am-text-middle">{{ $v->name }}</td>
                                                <td class="am-text-middle">注册时间</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                        <a href="javascript:;">
                                                            <i class="am-icon-pencil"></i> 修改
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                            
                                            <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
@endsection