@extends('admin.common.base')
@section('content')
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                
                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a class="am-btn am-btn-default am-btn-success" href="{{url('admin/user_admin/create')}}"><span class="am-icon-plus"></span>添加用户</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             

                                   
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button">搜索</button>
          </span>
                                    </div>
                                </div>
  
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>用户名</th>
                                                <th>注册时间</th>
                                                <th>权限</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($res as $v)
                                            <tr class="gradeX">
                                               
                                                <td class="am-text-middle">{{ $v->name}}</td>
                                                <td class="am-text-middle">{{ $v->time}}</td>
                                                <td class="am-text-middle">开启</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href='{{url("admin/user_admin/$v->id/edit")}}'>
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <button onclick="del({{$v->id}},this)">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </button>
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
    <!-- <script src="{{ asset('layer/jquery-1.8.3.min.js') }}"></script> -->
    <script src="{{ asset('layer/layer.js') }}"></script>
    <script>
    function del(id,_this){
       
        layer.confirm('确定要删除吗？', {
        btn: ['确定','取消'] //按钮
        }, function(){
             $.post('{{url("admin/user_admin")}}/'+id,{'_token':'{{csrf_token()}}','_method':'delete'},function(data){
                if(data){
                    layer.msg('删除成功', {icon: 1});
                    $(_this).parents(".gradeX").remove();
                }else{
                    layer.msg('删除失败', {icon: 1});
                }
                // alert(123);
            });
         // 
        });
    }
    
     // layer.msg("{{ session('msg') }}");  
    
    
        
    </script>
     @if (session('msg'))
        <script type="text/javascript">
            layer.msg("{{ session('msg') }}");
        </script>
    @endif
    <script src="admins/js/amazeui.min.js"></script>
    <script src="admins/js/app.js"></script>

</body>

</html>
@endsection