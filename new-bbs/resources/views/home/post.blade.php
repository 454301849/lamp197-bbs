@extends('parent.home')
@section('title')
发帖
@endsection()
@section('content')



                                        <!-- start of page content -->
                                        <div class="span8 page-content">
                                        <!-- 面包屑导航开始 -->
                                                <ul class="breadcrumb">
                                                        <li><a href="#">首页</a><span class="divider">/</span></li>
                                                        <li><a href="#" title="View all posts in Server &amp; Database">IT</a> <span class="divider">/</span></li>
                                                        <li><a href="#" title="View all posts in Server &amp; Database">PHP</a> <span class="divider">/</span></li>
                                                        <li class="active">发帖</li>
                                                </ul>
                                                

                                        <!-- 面包屑导航结束 -->
                                                <!-- content 发帖开始 -->
                                                
                                                <div id="respond">

                                                        <h3>发帖</h3>
                                                        <form action="#" method="post" id="commentform">
                                                                <div>
                                                                        <label for="url">标题</label>
                                                                        <input class="span4" type="text" name="url" id="url" value="" size="22" placeholder="在这里输入一个标题">
                                                                </div>


                                                                <div>
                                                                        <label for="comment">内容</label>
                                                                        <textarea class="span8" name="comment" id="comment" cols="58" rows="10" placeholder="发表你的观点吧"></textarea>
                                                                </div>

                                                                                                                

                                                                <div>
                                                                        <input class="btn" name="submit" type="submit" id="submit" value="发布">
                                                                </div>

                                                        </form>

                                                </div>

                                               
                                        </div>
                                        <!-- end 发帖结束 -->


                                       
@endsection('content')

