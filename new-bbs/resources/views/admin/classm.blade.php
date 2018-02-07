

@extends('admin.common.base')
@section('content')  
        <!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="container-fluid am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-10">
                        <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 表格 <small>Amaze UI</small></div>
                        <p class="page-header-description">Amaze UI 有许多不同的表格可用。</p>
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
                                <div class="widget-title am-fl">基本边框</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                                
                                <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-archive"></span> 删除</button>
                                            </div>
                                        </div>
                            </div>
                            <div class="widget-body  widget-body-lg am-fr">
                            

                                <table width="100%" class="am-table am-table-compact am-table-bordered tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>帖子标题</th>
                                            <th>帖子作者</th>
                                            <th>发帖时间</th>
                                            <th>相关操作</th>
                                        </tr>
                                    </thead>
                                <form action="" method="post">
                                    <tbody>
                                @foreach($list as $v)    
                                        <tr class="gradeX">
                                            <td>{{$v->title}}</td>
                                            <td>{{$v->author}}</td>
                                            <td>{{$v->time}}</td>
                                            <td>
                                                <div class="tpl-table-black-operation">
                                                    <a href="{{url('admin/').$v->id}}">
                                                        <i class="am-icon-pencil"></i> 编辑
                                                    </a>
                                                    <a href="javascript:;" class="tpl-table-black-operation-del">
                                                        <i class="am-icon-trash"></i> 删除
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                @endforeach
                                    </tbody>
                                </form>
                                </table>
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
            
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/amazeui.datatables.min.js"></script>
    <script src="assets/js/dataTables.responsive.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>

</html>
@endsection