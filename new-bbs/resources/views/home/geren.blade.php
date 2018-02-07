@extends('parent.home')
@section('title')
个人中心
@endsection
@section('content')


                                        <!-- start of page content -->
                                        <div class="span8 page-content">

                                                <article class="type-page hentry clearfix">
                                                        <h1 class="post-title">
                                                                <a href="#">个人中心</a>
                                                        </h1>
                                                        <hr>
                                                        
                                                </article>


                                                <form id="contact-form" class="row" action="http://inspirythemes.com/templates/knowledgebase-html/contact_form_handler.php" method="post">

                                                        <div class="span2">
                                                                <label for="name">名字<span>*</span> </label>
                                                        </div>
                                                        <div class="span6">
                                                                <input type="text" name="name" id="name" class="required input-xlarge" value="" title="* 对不起，您的名称不符合要求，请从新输入" placeholder="请输入您的名字">
                                                        </div>

                                                        <div class="span2">
                                                                <label for="name">密码<span>*</span> </label>
                                                        </div>
                                                        <div class="span6">
                                                                <input type="text" name="password" id="password" class="required input-xlarge" value="" title="* 对不起，您的密码不符合要求，请从新输入" placeholder="请输入您的密码">
                                                        </div>






                                                        <div class="span2">
                                                                <label for="age">年龄<span>*</span></label>
                                                        </div>
                                                        <div class="span6">
                                                                <input type="text" name="" id="" class=" required input-xlarge" value="" title="* 对不起，您的年龄不符合标准" placeholder="请输入您的年龄">
                                                        </div>

                                                        <div class="span2">
                                                                <label for="sex">性别<span>*</span></label>
                                                        </div>
                                                        <div class="span6">
                                                              <select name="select" id="">
                                                                        <option value="1">男</option>
                                                                        <option value="2">女</option>
                                                              </select>

                                                        </div>

                                                        <div class="span2">
                                                                <label for="phone">电话<span>*</span></label>
                                                        </div>
                                                        <div class="span6">
                                                                <input type="text" name="phone" id="phone" class="phone required input-xlarge" value="" title="* 请输入正确的电话位数" placeholder="请输入您的手机号">
                                                        </div>

                                                        <div class="span2">
                                                                <label for="email">邮箱<span>*</span></label>
                                                        </div>
                                                        <div class="span6">
                                                                <input type="text" name="email" id="email" class="email required input-xlarge" value="" title="* 请输入正确的邮箱" placeholder="请输入您的邮箱">
                                                        </div>

                                                        <div class="span2">
                                                                <label for="email">地址<span>*</span></label>
                                                        </div>
                                                        <div class="span6">
                                                                <select name="" id="" style="width:93px">
                                                                    <option value="">辽宁省</option>
                                                                </select>
                                                                <select name="" id="" style="width:93px">
                                                                    <option value="">朝阳市</option>
                                                                </select>
                                                                <select name="" id="" style="width:93px">
                                                                    <option value="">双塔区</option>
                                                                </select>
                                                        </div>

                                                        

                                                        <div class="span2">
                                                                <label for="image">头像<span>*</span></label>
                                                        </div>
                                                        <div class="span6">
                                                                <div name="imagepic" id="pic" class="image required input-xlarge">
                                                                    <img src="/homes/images/1.png" style="margin:8px; width:100px;height:100px;" >

                                                                </div>  
                                                                <input type="file" name="image" id="image" class="image required input-xlarge" value="" title="* 请上传合法头像">
                                                        </div>
                                                        
                                                        
                                                        <div class="span2">
                                                                <label for="qian">签名<span>*</span> </label>
                                                        </div>
                                                        <div class="span6">
                                                                <textarea name="qian" id="qian" class="required span6" rows="6" title="* 您的签名不符合标准，请重新输入"></textarea>
                                                        </div>

                                                        <div class="span6 offset2 bm30">
                                                                <input type="submit" name="submit" value="提交" class="btn btn-inverse">
                                                                <img src="images/loading.gif" id="contact-loader" alt="Loading...">
                                                        </div>

                                                        <div class="span6 offset2 error-container"></div>
                                                        <div class="span8 offset2" id="message-sent"></div>

                                                </form>
                                        </div>
                                        <!-- end of page content -->
@endsection


