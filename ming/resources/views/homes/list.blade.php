@extends('parent.home')
@section('title')
帖子列表
@endsection
@section('content')

                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 page-content">
                                        <!-- 面包屑导航开始 -->
                                                <ul class="breadcrumb">
                                                        <li><a href="#">首页</a><span class="divider">/</span></li>
                                                        <li><a href="#" title="View all posts in Server &amp; Database">国内新闻</a> <span class="divider">/</span></li>
                                                        <li class="active">正文</li>
                                                </ul>
                                                

                                        <!-- 面包屑导航结束 -->
                                                <!-- content 帖子详情开始 -->
                                                <div class="row separator">
                                                        <section class="span8 articles-list">
                                                                <h3>php</h3>
                                                                <button><a href='{{ url("posting") }}'>发帖</a></button>
                                                                <ul class="articles">
                                                                @foreach($res as $v)
                                                                        <li class="article-entry standard">
                                                                                <h4><a href='{{ url("post/{$v->id}") }}'>{{$v->title}}</a></h4>
                                                                                <span class="article-meta">发帖时间 ：2018-01-31<a href='{{ url("post/{$v->id}") }}' title="View all posts in Server &amp; Database">         点击详情</a></span>
                                                                                <span class="like-count">66</span>
                                                                        </li>
                                                                 @endforeach       
                                                                </ul>
                                                        </section>
                                                        <!-- 分页 -->
                                                <div id="pagination">
                                                        <a href="#" class="btn active">1</a>
                                                        <a href="#" class="btn">2</a>
                                                        <a href="#" class="btn">3</a>
                                                        <a href="#" class="btn">上一页 »</a>
                                                        <a href="#" class="btn">下一页 »</a>
                                                </div>


                                                        
                                                </div>


                                               
                                        </div>
                                        <!-- end 帖子详情结束 -->


                                        <!-- start of sidebar -->
                                        <aside class="span4 page-sidebar">

                                                <section class="widget">
                                                        <div class="support-widget">
                                                                <h3 class="title">登录</h3>
                                                                <form action="">
                                                                        <input type="text" name="" placeholder="用户名">
                                                                        <input type="password" name="" placeholder="密码">
                                                                        <input class="search-btn" type="submit" value="登录" />
                                                                        <input class="search-btn" type="button" value="注册" />

                                                                </form>
                                                        </div>
                                                </section>

                                                <section class="widget">
                                                        <div class="quick-links-widget">
                                                                <h3 class="title">快速链接</h3>
                                                                <ul id="menu-quick-links" class="menu clearfix">
                                                                        <li><a href="index-2.html">首页</a></li>
                                                                        <li><a href="articles-list.html">帖子列表</a></li>
                                                                        <li><a href="faq.html">常见问题</a></li>
                                                                        <li><a href="contact.html">联系我们</a></li>
                                                                </ul>
                                                        </div>
                                                </section>

                                                <section class="widget">
                                                        <h3 class="title">标签</h3>
                                                        <div class="tagcloud">
                                                                <a href="#" class="btn btn-mini">PHP</a>
                                                                <a href="#" class="btn btn-mini">下载</a>
                                                                <a href="#" class="btn btn-mini">图片</a>
                                                                <a href="#" class="btn btn-mini">Java</a>
                                                                <a href="#" class="btn btn-mini">css</a>
                                                                <a href="#" class="btn btn-mini">JavaScript</a>
                                                                <a href="#" class="btn btn-mini">国内</a>
                                                                <a href="#" class="btn btn-mini">趣闻</a>
                                                                <a href="#" class="btn btn-mini">美女</a>
                                                                <a href="#" class="btn btn-mini">实时</a>
                                                                <a href="#" class="btn btn-mini">明星八卦</a>
                                                                <a href="#" class="btn btn-mini">视频专区</a>
                                                        </div>
                                                </section>

                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->
@endsection('content')

