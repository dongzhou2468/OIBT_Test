<?php /* Smarty version Smarty-3.1.16, created on 2014-12-15 09:17:07
         compiled from "tpl\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6471547691f14ce8a5-10662082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960134157fa259e4e66125a4a4ef37297a26b6d9' => 
    array (
      0 => 'tpl\\admin\\index.html',
      1 => 1418631393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6471547691f14ce8a5-10662082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_547691f1510f48_64211552',
  'variables' => 
  array (
    'user' => 0,
    'data' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547691f1510f48_64211552')) {function content_547691f1510f48_64211552($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>OEM-ISV Bridge Tool</title>
    <link rel="stylesheet" href="http://down.7po.com/static/down/style3.css">
</head>
<body>
    <a style="color:#999;">Hi，<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
欢迎来到OIBT！</a>
    <ul>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <li>
            <h1><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h1><br>
        </li>
    <?php } ?>
    </ul>
</body>
</html><?php }} ?>
