@extends('parent.home')
@section('title')
分类表
@endsection()
@section('content')



                                        <!-- start of page content -->
                                        <div class="span8 page-content">
                                        @foreach($res as $v)
                                        <!-- 面包屑导航开始 -->
                                                <ul class="breadcrumb">
                                                        <li><a href="{{ url('/')}}">首页</a><span class="divider">/</span></li>
                                                        <li><a href="#" title="View all posts in Server &amp; Database">{{ $v->cname}}</a></li>
                                                </ul>
                                        <!-- 面包屑导航结束 -->
                                                <!-- content 帖子详情开始 -->
                                                <div class="row separator">
                                                        <div class="span8 page-content">

                                                <!-- Basic Home Page Template -->

                                                <div class="row home-category-list-area">
                                                        <div class="span8">
                                                                <h2>{{ $v->cname}}</h2>
                                                        </div>
                                                </div>

                                                <div class="row-fluid top-cats">

                                                        <section class="span4">
                                                                <h4 class="category"><a href="#">板块1</a></h4>
                                                                <div class="category-description">
                                                                        <p>板块介绍</p>
                                                                </div>
                                                        </section>

                                                        <section class="span4">
                                                                <h4 class="category"><a href="#">板块1</a></h4>
                                                                <div class="category-description">
                                                                        <p>板块介绍</p>
                                                                </div>
                                                        </section>

                                                        <section class="span4">
                                                                <h4 class="category"><a href="#">板块1</a></h4>
                                                                <div class="category-description">
                                                                        <p>板块介绍</p>
                                                                </div>
                                                        </section>
                                                </div>
                                                <div class="row-fluid top-cats">

                                                        <section class="span4">
                                                                <h4 class="category"><a href="#">板块1</a></h4>
                                                                <div class="category-description">
                                                                        <p>板块介绍</p>
                                                                </div>
                                                        </section>

                                                        <section class="span4">
                                                                <h4 class="category"><a href="#">板块1</a></h4>
                                                                <div class="category-description">
                                                                        <p>板块介绍</p>
                                                                </div>
                                                        </section>

                                                        <section class="span4">
                                                                <h4 class="category"><a href="#">板块1</a></h4>
                                                                <div class="category-description">
                                                                        <p>板块介绍</p>
                                                                </div>
                                                        </section>
                                                </div>
                                        @endforeach
                                        </div>
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

               