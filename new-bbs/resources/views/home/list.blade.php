@extends('parent.home')
@section('title')
帖子列表
@endsection
@section('content')

                

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


                                        
@endsection('content')

