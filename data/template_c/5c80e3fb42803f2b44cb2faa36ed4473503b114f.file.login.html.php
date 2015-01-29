<?php /* Smarty version Smarty-3.1.16, created on 2014-11-27 09:09:58
         compiled from "tpl\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:192265476863ad78540-54640524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c80e3fb42803f2b44cb2faa36ed4473503b114f' => 
    array (
      0 => 'tpl\\admin\\login.html',
      1 => 1417075201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192265476863ad78540-54640524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5476863add22f5_02008972',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5476863add22f5_02008972')) {function content_5476863add22f5_02008972($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link charset="utf-8" type="text/css" rel="stylesheet" href="res/css/login.css">
</head>
<body>
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
        //var range = getRange();
        //$('doing').style.width = range.width + "px";
        //$('doing').style.height = range.height + "px";
        $('doing').style.display = "block";
        document.getElementById("divLogin").style.display = "";
    }
    /*function getRange()                      //得到屏幕的大小
    {
        var top = document.body.scrollTop;
        var left = document.body.scrollLeft;
        var height = document.body.clientHeight;
        var width = document.body.clientWidth;

        if (top == 0 && left == 0 && height == 0 && width == 0) {
            top = document.documentElement.scrollTop;
            left = document.documentElement.scrollLeft;
            height = document.documentElement.clientHeight;
            width = document.documentElement.clientWidth;
        }
        return { top: top, left: left, height: height, width: width };
    }*/
</script>
    <a class="test" href="#" onclick="showFloat()">登录</a>
    <!--半透明层-->
    <div id="doing" style="filter:alpha(opacity=40);-moz-opacity:0.4;opacity:0.4;background-color:#404040;width:100%;height:100%;z-index:1000;position: absolute;left:0;top:0;display:none;overflow: hidden;">
    </div>
    <!--登录层-->
    <div id="divLogin" style="border:solid 0 #898989;background:#fff;padding:10px;width:400px;z-index:1001;height:200px; position: absolute; display:none;top:50%; left:50%;margin:-200px 0 0 -200px;">
        <div id="signin" class="rl-modal in" aria-hidden="false">
            <div class="rl-modal-header">
                <h1>
                    <span class="active-title">登录</span>
                </h1>
                <button type="button" class="rl-close" data-dismiss="modal" onclick="ShowNo()"></button>
            </div>
            <div class="rl-modal-body">
                <form id="signup-form" method="post" action="admin.php?controller=admin&method=login">
                    <div>
                        <input type="text" name="email" data-validate="email" autocomplete="off" class="rlf-input rlf-input-email" placeholder="请输入登录邮箱"><br/><br/><br/>
                    </div>
                    <div>
                        <input type="password" name="password" autocomplete="off" class="rlf-input rlf-input-pwd" placeholder="请输入密码"><br/><br/><br/>
                    </div>
                    <div>
                        <label for="auto-signin" class="l"><input type="checkbox" checked="checked" id="auto-signin">自动登录</label>
                        <a href="#" class="rlf-forget r" target="_blank">忘记密码？</a>
                    </div>
                    <div><br/><br/>
                        <input type="submit" value="登录" class="rlf-btn-green btn-full r">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html><?php }} ?>
