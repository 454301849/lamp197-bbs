@extends('parent.home')
@section('title')
帖子详情
@endsection()
@section('content')


                                @foreach($res as $v)
                                        <!-- start of page content -->
                                        <div class="span8 page-content">
                                        <!-- 面包屑导航开始 -->
                                                <ul class="breadcrumb">
                                                        <li><a href="#">首页</a><span class="divider">/</span></li>
                                                        <li><a href="#" title="View all posts in Server &amp; Database">国内新闻</a> <span class="divider">/</span></li>
                                                        <li><a href="#" title="View all posts in Server &amp; Database">帖子标题</a> <span class="divider">/</span></li>
                                                        <li class="active">正文</li>
                                                </ul>
                                        <!-- 面包屑导航结束 -->
                                                <!-- content 帖子详情开始 -->
                                                <div class="row separator">
                                                        <article class=" type-post format-standard hentry clearfix">

                                                        <h1 class="post-title"><a href="#">{{ $v->title}}</a></h1>

                                                        <div class="post-meta clearfix">
                                                                <span class="date">25 Feb, 2013</span>
                                                                <span class="category"><a href="#" title="View all posts in Server &amp; Database">标签 &amp; C++</a></span>
                                                                <span class="comments"><a href="#" title="Comment on Integrating WordPress with Your Website">回复</a></span>
                                                                <span class="like-count">66</span>
                                                        </div><!-- end of post meta -->

                                                        <p>{{ $v->content }}</p>

                                                </article>
                                                @endforeach
                                                <div class="like-btn">

                                                        <form id="like-it-form" action="#" method="post">
                                                                <span class="like-it ">66</span>
                                                                <input type="hidden" name="post_id" value="99">
                                                                <input type="hidden" name="action" value="like_it">
                                                        </form>

                                                        <span class="tags">
                                                                <strong>标签:&nbsp;&nbsp;</strong><a href="#" rel="tag">C++</a>, <a href="#" rel="tag">编程</a>, <a href="http://knowledgebase.inspirythemes.com/tag/website/" rel="tag">发展</a>
                                                        </span>
                                                
                                                </div>
                                                <hr>
                                                <!-- 回复列表 -->
                                                <section id="comments">

                                                        <h3 id="comments-title">(3) 回复</h3>

                                                        <ol class="commentlist">

                                                                <li class="comment even thread-even depth-1" id="li-comment-2">
                                                                        <article id="comment-2">

                                                                                <a href="#">
                                                                                        <img alt="" src="/homes/images/temp/user1.jpg" class="avatar avatar-60 photo" height="60" width="60">
                                                                                </a>

                                                                                <div class="comment-meta">

                                                                                        <h5 class="author">
                                                                                                <cite class="fn">
                                                                                                        <a href="#" rel="external nofollow" class="url">小二黑</a>
                                                                                                </cite>
                                                                                                - <a class="comment-reply-link" href="#">回复</a>
                                                                                        </h5>

                                                                                        <p class="date">
                                                                                                <a href="#">
                                                                                                        <time datetime="2013-02-26T13:18:47+00:00">回复时间：2018-01-31 1:18 pm</time>
                                                                                                </a>
                                                                                        </p>

                                                                                </div><!-- end .comment-meta -->

                                                                                <div class="comment-body">
                                                                                        <p>楼主说的很对</p>
                                                                                </div><!-- end of comment-body -->

                                                                        </article><!-- end of comment -->

                                                                        <ul class="children">

                                                                                <li class="comment byuser comment-author-saqib-sarwar bypostauthor odd alt depth-2" id="li-comment-3">
                                                                                        <article id="comment-3">

                                                                                                <a href="#">
                                                                                                        <img alt="" src="/homes/images/temp/user2.jpg" class="avatar avatar-60 photo" height="60" width="60">
                                                                                                </a>

                                                                                                <div class="comment-meta">

                                                                                                        <h5 class="author">
                                                                                                                <cite class="fn"><a href="">冰冰</a></cite>
                                                                                                                - <a class="comment-reply-link" href="#">回复</a>
                                                                                                        </h5>

                                                                                                        <p class="date">
                                                                                                                <a href="#">
                                                                                                                        <time datetime="2013-02-26T13:20:14+00:00">回复时间：2018-01-31 1:20 pm</time>
                                                                                                                </a>
                                                                                                        </p>

                                                                                                </div><!-- end .comment-meta -->

                                                                                                <div class="comment-body">
                                                                                                        <p>我顶你个肺啊</p>
                                                                                                </div><!-- end of comment-body -->

                                                                                        </article><!-- end of comment -->

                                                                                </li>
                                                                        </ul>
                                                                </li>

                                                                <li class="comment even thread-odd thread-alt depth-1" id="li-comment-4">
                                                                        <article id="comment-4">

                                                                                <a href="#">
                                                                                        <img alt="" src="/homes/images/temp/user3.jpg" class="avatar avatar-60 photo" height="60" width="60">
                                                                                </a>

                                                                                <div class="comment-meta">

                                                                                        <h5 class="author">
                                                                                                <cite class="fn"><a href="#" rel="external nofollow" class="url">琳娜</a></cite>
                                                                                                - <a class="comment-reply-link" href="#">回复</a>
                                                                                        </h5>

                                                                                        <p class="date">
                                                                                                <a href="http://knowledgebase.inspirythemes.com/integrating-wordpress-with-your-website/#comment-4">
                                                                                                        <time datetime="2013-02-26T13:27:04+00:00">回复时间：2018-01-31 at 1:27 pm</time>
                                                                                                </a>
                                                                                        </p>

                                                                                </div><!-- end .comment-meta -->

                                                                                <div class="comment-body">
                                                                                        <p>PHP才是世界上最好的语言</p>
                                                                                        
                                                                                </div><!-- end of comment-body -->

                                                                        </article><!-- end of comment -->
                                                                </li>
                                                        </ol>

                                                        <div id="respond">

                                                                <h3>回复</h3>

                                                                <div class="cancel-comment-reply">
                                                                        <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">点击这里取消回复</a>
                                                                </div>


                                                                <form action="#" method="post" id="commentform">

                                                                        <div>
                                                                                <label for="comment">回复内容</label>
                                                                                <textarea class="span8" name="comment" id="comment" cols="58" rows="10" placeholder="说出你的看法"></textarea>
                                                                        </div>

                                                                        

                                                                        <div>
                                                                                <input class="btn" name="submit" type="submit" id="submit"  value="回复">
                                                                        </div>

                                                                </form>

                                                        </div>

                                                </section>

                                                        
                                                </div>


                                               
                                        </div>
                                        <!-- end 帖子详情结束 -->


                                       
@endsection('content')