<?php /* Smarty version Smarty-3.1.16, created on 2014-12-26 08:58:32
         compiled from "tpl\admin\home.html" */ ?>
<?php /*%%SmartyHeaderCode:15407548e56d0556367-07456442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fca81ab6eb3a2ba8292a2be88bff5c92e927b817' => 
    array (
      0 => 'tpl\\admin\\home.html',
      1 => 1418809017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15407548e56d0556367-07456442',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_548e56d06d1270_08439611',
  'variables' => 
  array (
    'user' => 0,
    'count' => 0,
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e56d06d1270_08439611')) {function content_548e56d06d1270_08439611($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>全部应用-OIBT</title>
    <meta name="keywords" content="OIBT">
    <meta name="description" content="OIBT (OEM-ISV Bridge Tool) is a portal for CTE OEMs to search for Intel enabled ISV resources.">
    <!--[if IE]>
    <script src="http://down.7po.com/static/down/js/html5.js"></script>
    <![endif]-->
    <script src="res/index_files/jquery-latest.js"></script>
    <script src="res/index_files/jquery.easing.1.3.js"></script>
    <script src="res/index_files/jquery.slide.js"></script>
    <link rel="stylesheet" href="http://down.7po.com/static/down/style3.css">
    <script	type="text/javascript" src="res/js/md5.js"></script>
    <script	type="text/javascript" src="res/js/myjs.js"></script>
    <link charset="utf-8" type="text/css" rel="stylesheet" href="res/css/login.css">
</head>
<body>
<input id="user" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"/>
<script  type="text/javascript">
    //弹出式登录
    function ShowNo()                        //隐藏两个层
    {
        document.getElementById("doing").style.display = "none";
        document.getElementById("divLogin").style.display = "none";
    }
    function $(id) {
        return (document.getElementById) ? document.getElementById(id) : document.all[id];
    }
    function showFloat()                    //根据屏幕的大小显示两个层
    {
        if(document.getElementById("user").value == '登录') {
            //var range = getRange();
            //$('doing').style.width = range.width + "px";
            //$('doing').style.height = range.height + "px";
            $('doing').style.display = "block";
            document.getElementById("divLogin").style.display = "";
        }else{
//            window.alert(document.getElementById("user").value);
        }

    }
</script>
<!--半透明层-->
<div id="doing" style="filter:alpha(opacity=40);-moz-opacity:0.4;opacity:0.4;background-color:#404040;width:100%;height:100%;z-index:1000;position: absolute;left:0;top:0;display:none;overflow: hidden;">
</div>
<!--登录层-->
<div id="divLogin" style="border:solid 0 #898989;background:#fff;padding:10px;width:400px;z-index:1001;height:200px; position: absolute; display:none;top:50%; left:50%;margin:-200px 0 0 -200px;">
    <div id="signin" class="rl-modal in" aria-hidden="false">
        <div class="rl-modal-header" style="height:60px;line-height: 10px;">
            <h1>
                <span class="active-title" style="font-size: 19px;">登&nbsp;&nbsp;录</span>
            </h1>
            <button type="button" class="rl-close" data-dismiss="modal" onclick="ShowNo()"></button>
        </div>
        <p class="errorTips" id="loginErrorTips"></p>
        <div class="rl-modal-body">
            <form id="signup-form" method="post" onsubmit="return checkLogin()" action="admin.php?controller=admin&method=loginSuccess">
                <div>
                    <input id="loginEmail" type="text" name="email" data-validate="email" autocomplete="off" class="rlf-input rlf-input-email" placeholder="请输入登录邮箱"><br/><br/><br/>
                </div><br>
                <div>
                    <input id="loginPasswd" type="password" name="password" autocomplete="off" class="rlf-input rlf-input-pwd" placeholder="请输入密码"><br/><br/><br/>
                </div><br>
                <div>
                    <label for="auto-signin" class="l" style="font-size: 14px;"><input type="checkbox" checked="checked" id="auto-signin">自动登录</label>
                    <a href="#" class="rlf-forget r" target="_blank" style="font-size: 14px;">忘记密码？</a>
                </div><br><br>
                <div>
                    <input id="loginBtn" style="line-height: 20px;font-size: 18px" type="submit" value="登&nbsp;&nbsp;录" class="rlf-btn-green btn-full r">
                </div><br>
            </form>
        </div>
    </div>
</div>
<header>
	<div id="top">
		<div class="wp" style="height:35px;font-size: 14px;">
			<div class="z" style="padding-top: 2px">
				<a style="color:#999;">Hi，欢迎来到OIBT！</a>
			</div>
			<div class="y" style="padding-top: 2px">
				<a href="#" class="test" onclick="showFloat()"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</a>
				<a href="#" target="_blank">资讯</a>
				<a href="#">关于我们</a>
			</div>
		</div>
	</div>
	<div id="header" style="height:135px">
		<img src="res/img/index/logo.jpg" style="float: left"></img>
		<form method="get" action="#">
			<fieldset id="search">
				<input type="text" id="search_input" name="q" autocomplete="off">
                <input type="hidden" name="sort" value="hot">
				<input type="submit" id="button_input" value="搜索" hidefocus="hidefocus">
			</fieldset>
			<p>
				<span>热门搜索：</span>
                <a href="#" target="_blank">360平板卫士</a>
                <a href="#" target="_blank">声纹锁屏</a>
                <a href="#" target="_blank">AppLock</a>
                <a href="#" target="_blank">360云盘</a>
			</p>
		</form>
	</div>
</header>
<div id="nav">
	<nav>
		<a href="#">首页</a>
		<a href="./index_files/index.html" class="selected">应用</a>
		<a href="#" target="_blank">论坛</a>
	</nav>
</div>

<section>
<div class="mid" style="top: 5px;height: 1370px">            <!-- height to be variable -->
    <div class="trace">
        <a href="#">首页</a> &gt; <a href="#">应用</a> &gt; <a href="#">全部应用</a>
    </div>
    <div class="small">
        <div class="cate">
            <div class="cate_head app">应用分类</div>
            <a class="cate_name selected" href="./index_files/index.html">全部应用</a>
            <a class="cate_name " href="http://down.7po.com/apps_hot.html">热门应用</a>
            <a class="cate_name " href="http://down.7po.com/apps/1.html">影视聚合</a>
            <a class="cate_name " href="http://down.7po.com/apps/2.html">电视直播</a>
            <a class="cate_name " href="http://down.7po.com/apps/3.html">特色视频</a>
            <a class="cate_name " href="http://down.7po.com/apps/5.html">音乐相关</a>
            <a class="cate_name " href="http://down.7po.com/apps/4.html">教育学习</a>
            <a class="cate_name " href="http://down.7po.com/apps/7.html">资讯阅读</a>
            <a class="cate_name " href="http://down.7po.com/apps/6.html">生活服务</a>
            <a class="cate_name " href="http://down.7po.com/apps/8.html">系统工具</a>
			<!--
            <div class="cate_sort">
                <span>排序：</span>
                <a href="http://down.7po.com/apps_new.html?sort=new" id="new" class="cate_type selected">最新上线</a>
                <a href="http://down.7po.com/apps_new.html?sort=hot" id="down" class="cate_type ">下载最多</a>
            </div>
			-->
        </div>
    </div>
    <div class="big right" style="top:22px;">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['count']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <li id="1416795630" class="apk_infos">
                <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['imgPath'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"></a>
                <p class="apk_title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
 v<?php echo $_smarty_tpl->tpl_vars['value']->value['version'];?>
</a><span>TV版</span></p>
                <p class="apk_desc"><?php echo $_smarty_tpl->tpl_vars['value']->value['dscp'];?>
</p>
                <span class="apk_info">2014-11-24 • <?php echo $_smarty_tpl->tpl_vars['value']->value['dlTimes'];?>
次下载</span>
                <span class="apk_tag">分类标签：<?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
</span>
                <a class="apk_down" href="#">立即下载</a>
            </li>
            <?php } ?>
            <?php } ?>

        </ul>
        <div id="page">

            <a href="http://down.7po.com/apps_new.html#" class="page_num curr_page">1</a>
            <a href="http://down.7po.com/apps_new_2.html" class="page_num">2</a>
            <a href="http://down.7po.com/apps_new_3.html" class="page_num">3</a>
            <a href="http://down.7po.com/apps_new_4.html" class="page_num">4</a>
            <a href="http://down.7po.com/apps_new_5.html" class="page_num">5</a>
            <a href="http://down.7po.com/apps_new_6.html" class="page_num">6</a>
            <a href="http://down.7po.com/apps_new_7.html" class="page_num">7</a>
            <a href="http://down.7po.com/apps_new_8.html" class="page_num">8</a>
            <a href="http://down.7po.com/apps_new_9.html" class="page_num">9</a>
            <a href="http://down.7po.com/apps_new_10.html" class="page_num">10</a>
            <a href="http://down.7po.com/apps_new_11.html" class="page_num">11</a>
            <span>...</span>
            <a href="http://down.7po.com/apps_new_54.html" class="page_last">... 54</a>
            <a class="page_to">
                <form method="get" action="http://down.7po.com/search">
                <input type="hidden" name="sort" autocomplete="new">
                <input type="text" value="1" name="page" class="page_to_num"> / 54 页
                </form>
            </a>
            <a href="http://down.7po.com/apps_new_2.html" class="page_next">下一页</a>

        </div>

    </div>
    <div style="clear:both;"></div>          <!-- 消除浮动 -->
</div>
</section>

<footer>
	<div id="line"></div>
	<div id="footer">
		<div id="foot_other">
			<p id="foot_left">Copyright©2014 SSG_MET All Rights Reserved</p>
			<p id="foot_right">
				<a href="http://www.7po.com/thread-88267-1-1.html" target="_blank">联系我们</a>
				|
				<a href="http://dev.7po.com/" id="dev" target="_blank">提交应用</a>
			</p>
		</div>
	</div>
</footer>
<a id="scrolltop" hidefocus="true" title="返回顶部"></a>

</body></html><?php }} ?>
