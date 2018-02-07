<!doctype html>
        <!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
        <!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
        <!--[if IE 8]>    <html class="lt-ie9" lang="en-US"> <![endif]-->
        <!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
        <head>
                <!-- META TAGS -->
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>四神论坛-@yield('title')</title>

                <link rel="shortcut icon" href="{{ asset('/homes/images/favicon.png') }}" />

                <!-- Style Sheet-->
                <!-- <link rel="stylesheet" href="style.css"/> -->
                <link rel='stylesheet' id='bootstrap-css-css'  href="{{ asset('/homes/css/bootstrap5152.css?ver=1.0') }}" type='text/css' media='all' />
                <link rel='stylesheet' id='responsive-css-css'  href="{{ asset('/homes/css/responsive5152.css?ver=1.0') }}" type='text/css' media='all' />
                <link rel='stylesheet' id='pretty-photo-css-css'  href="{{ asset('/homes/js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4') }}" type='text/css' media='all' />
                <link rel='stylesheet' id='main-css-css'  href="{{ asset('/homes/css/main5152.css?ver=1.0') }}" type='text/css' media='all' />
                <link rel='stylesheet' id='custom-css-css'  href="{{ asset('/homes/css/custom5152.html?ver=1.0') }}" type='text/css' media='all' />
                <!-- login样式 -->
                
                <link rel="stylesheet" type="text/css" href="{{ asset('/homes/css/login/login.css') }}">
                <script src="{{ asset('/homes/js/login/jquery-1.10.2.js') }}"></script>


                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
                <![endif]-->

        </head>

        <body>

                <!-- Start of Header -->
                <div class="header-wrapper">
                        <header>
                                <div class="container">


                                        <div class="logo-container">
                                                <!-- Website Logo -->
                                                <a href="index-2.html"  title="Knowledge Base Theme">
                                                        <img src="{{ asset('/homes/images/logo.png') }}" alt="Knowledge Base Theme">
                                                </a>
                                                <span class="tag-line">欢迎光临四神论坛</span>
                                        </div>


                                        <!-- Start of Main Navigation -->
                                        <nav class="main-nav">
                                                <div class="menu-top-menu-container">
                                                        <ul id="menu-top-menu" class="clearfix">
                                                                <li class="current-menu-item"><a href="{{ url('/')}}">首页</a></li>

                                                                @foreach($classm as $v)
                                                                <li><a href='{{url("classm/{$v->id}") }}'>{{ $v->cname }}</a>
                                                                
                                                                        <ul class="sub-menu">
                                                                        @foreach($plate as $b)
                                                                                <li><a href='{{url("plate/{$b->id}") }}'>{{ $b->bname }}</a></li>
                                                                        @endforeach
                                                                        </ul>
                                                                </li>
                                                                @endforeach
                                                                
                                                        </ul>
                                                </div>
                                        </nav>
                                        <!-- End of Main Navigation -->

                                </div>
                        </header>
                </div>
                <!-- End of Header -->

                <!-- Start of Search Wrapper 帖子搜索-->
                <div class="search-area-wrapper">
                        <div class="search-area container">
                                <h3 class="search-header">有问题 ？</h3>
                                <p class="search-tag-line">如果你有任何问题，可以直接搜索，或者输入你想要的 ！ ！</p>

                                <form id="search-form" class="search-form clearfix" method="get" action="#" autocomplete="off">
                                        <input class="search-term required" type="text" id="s" name="s" placeholder="在这里输入搜索条件。" title="* Please enter a search term!" />
                                        <input class="search-btn" type="submit" value="搜索" />
                                        <div id="search-error-container"></div>
                                </form>
                        </div>
                </div>
                <!-- End of Search Wrapper 帖子搜索结束 -->

                <!-- Start of Page Container -->
                 
                <!-- End of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <!-- content 帖子详情开始 -->
                                        @section('content')
                                        @show
                                        <!-- end 帖子详情结束 -->

                                        
                                        <!-- start of sidebar -->
                                        @if(session('id'))
                                        <!-- 登录后显示的右侧 -->
                                        <aside class="span4 page-sidebar">

                                                <section class="widget">
                                                        <div class="support-widget" style='background-color: #fefbdc;'>
                                                            
                                                            <div style="float:left;width:100px;height:100px">
                                                                 <img src="../homes/images/1.png" alt="" style="display: block;width:100px;height:100px">
                                                            </div>
                                                            <div style="float:right;width:200px">
                                                                <h3 class="title">用户名</h3><span>12</span>
                                                                <p class="intro" style="word-break: break-all;">这是我的签名，这是我的签名，这是我的签名，这是我的签名这是我的</p>

                                                            </div>
                                                            <div style="clear:both;"></div> 
                                                        </div>
                                                </section>

                                                <section class="widget">
                                                        <h3 class="title">中心管理</h3>
                                                        <ul class="articles">
                                                                <li class="article-entry standard">
                                                                        <h4><a href="mypost.html">我的帖子</a></h4>
                                                                        <span></span>
                                                                </li>
                                                                <li class="article-entry standard">
                                                                        <h4><a href="">回复的帖子</a></h4>
                                                                        <span></span>
                                                                </li>
                                                                <li class="article-entry video">
                                                                        <h4><a href="">用户资料</a></h4>
                                                                        <span></span>                                         
                                                                </li>
                                                                <li class="article-entry image">
                                                                        <h4><a href="">点赞</a></h4>
                                                                        <span class="like-count">11</span>
                                                                </li>
                                                                </li>
                                                                <li class="article-entry image">
                                                                        <h4><a href="">转发</a></h4>
                                                                        <span></span>
                                                                </li>
                                                                 <li class="article-entry image">
                                                                        <h4><a href="">收藏</a></h4>
                                                                        <span></span>
                                                                </li>
                                                                <li class="article-entry image">
                                                                        <h4><a href="">消息</a></h4>
                                                                        <span></span>
                                                                </li>

                                                        </ul>
                                                </section>


                                        </aside>
                                        @else
                                        <!-- 未登录显示的右侧 -->
                                        <aside class="span4 page-sidebar">

                                                <section class="widget">
                                                        <div class="support-widget">
                                                                <h3 class="title">登录</h3>
                                                                <form action="{{ url('/login/index')}}" method="post">
                                                                {{ csrf_field() }}
                                                                        <input type="text" name="name" placeholder="用户名">
                                                                        <input type="password" name="pass" placeholder="密码">
                                                                        <input class="search-btn" type="submit" value="登录" />
                                                                        <button><a href="{{ url('show/zhuce') }}">注册</a></button>
                                                                        <a href="{{url('login')}}">点击显示个人中心</a>

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
                                        @endif
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- Start of Footer -->
                <footer id="footer-wrapper">
                        <div id="footer" class="container">
                                <div class="row">

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">我们的初衷</h3>
                                                        <div class="textwidget">
                                                                <p>这是一种很有意义的方法，它可以使你的生活变得更美好 </p>
                                                                <p>但是，如果我们的研究结果很好，那么我们就可以得出结论 </p>
                                                        </div>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget"><h3 class="title">友情链接</h3>
                                                        <ul>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">百度</a> </li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">腾讯游戏</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">新浪新闻</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet, ">知乎</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">LAMP兄弟连</a></li>
                                                        </ul>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">联系我们</h3>
                                                        <div id="twitter_update_list">
                                                                <ul>
                                                                        <li>phone：88888888</li>
                                                                </ul>
                                                        </div>
                                                       
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">意见建议</h3>
                                                        <div class="flickr-photos" id="basicuse">
                                                        </div>
                                                </section>
                                        </div>

                                </div>
                        </div>
                        <!-- end of #footer -->

                        <!-- Footer Bottom -->
                        <div id="footer-bottom-wrapper">
                                <div id="footer-bottom" class="container">
                                        <div class="row">
                                                <div class="span6">
                                                        <p class="copyright">
                                                                版权 &copy; 2018.四神论坛版权所有.<a target="_blank" href="">盗版必究</a>
                                                        </p>
                                                </div>
                                                <div class="span6">
                                                        <!-- Social Navigation -->
                                                        <ul class="social-nav clearfix">
                                                                <li class="linkedin"><a target="_blank" href="#"></a></li>
                                                                <li class="stumble"><a target="_blank" href="#"></a></li>
                                                                <li class="google"><a target="_blank" href="#"></a></li>
                                                                <li class="deviantart"><a target="_blank" href="#"></a></li>
                                                                <li class="flickr"><a target="_blank" href="#"></a></li>
                                                                <li class="skype"><a target="_blank" href="skype:#?call"></a></li>
                                                                <li class="rss"><a target="_blank" href="#"></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"></a></li>
                                                                <li class="facebook"><a target="_blank" href="#"></a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- End of Footer Bottom -->

                </footer>
                <!-- End of Footer -->

                <a href="#top" id="scroll-top"></a>

                <!-- script -->
                <script type='text/javascript' src="{{ asset('/homes/js/jquery-1.8.3.min.js') }}"></script>
                <script type='text/javascript' src="{{ asset('/homes/js/jquery.easing.1.3.js') }}"></script>
                <script type='text/javascript' src="{{ asset('/homes/js/prettyphoto/jquery.prettyPhoto.js') }}"></script>
                <script type='text/javascript' src="{{ asset('/homes/js/jflickrfeed.js')}}"></script>
				<script type='text/javascript' src="{{ asset('/homes/js/jquery.liveSearch.js')}}"></script>
                <script type='text/javascript' src="{{ asset('/homes/js/jquery.form.js')}}"></script>
                <script type='text/javascript' src="{{ asset('/homes/js/jquery.validate.min.js')}}"></script>
                <script type='text/javascript' src="{{ asset('/homes/js/custom.js')}}"></script>
                <!-- login js -->
                <script type="text/javascript" src="{{ asset('/homes/js/login/login.js') }}"></script>
                <script type="text/javascript" src="{{ asset('/homes/js/login/form.js') }}"></script> 
                <script type="text/javascript" src="{{ asset('/homes/js/login/config.js') }}"></script> 
                <script type="text/javascript" src="{{ asset('/homes/js/login/login_ajax.js') }}"></script>

        <!-- <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div> -->
</body>
</html>