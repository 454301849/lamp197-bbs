@extends('parent.home')
@section('title')
首页
@endsection()
@section('content')
<!-- start of page content -->
    <!-- content 帖子详情开始 -->
    <div class="span8 page-content">
    <!-- 面包屑导航开始 -->
            <ul class="breadcrumb">
                <li><a href="{{ url('/')}}">首页</a></li>
            </ul>
    <!-- 面包屑导航结束 -->

             @foreach($res as $v)
                                                 
            <article class="format-standard type-post hentry clearfix">
                                               

                    <header class="clearfix">

                            <h3 class="post-title">
                                    <a href='{{ url("post/{$v->id}") }}'>{{ $v->title }}</a>
                            </h3>

                            <div class="post-meta clearfix">
                                    <span class="date">2018-01-31</span>
                                    <span class="category"><a href="#" title="View all posts in Server &amp; Database">标签</a></span>
                                    <span class="comments"><a href="#" title="Comment on Integrating WordPress with Your Website">3 回复</a></span>
                                    <span class="like-count">66</span>
                            </div><!-- end of post meta -->

                    </header>

                    <p>{{ $v->content }}<a class="readmore-link" href="{{ url('post')}}">....详情</a></p>

            </article>
            @endforeach

                                                
            <!-- 分页 -->
            <div id="pagination">
                    <a href="#" class="btn active">1</a>
                    <a href="#" class="btn">2</a>
                    <a href="#" class="btn">3</a>
                    <a href="#" class="btn">上一页 »</a>
                    <a href="#" class="btn">下一页 »</a>
            </div>
    </div>
    <!-- end 帖子详情结束 -->


                                        
@endsection()
        