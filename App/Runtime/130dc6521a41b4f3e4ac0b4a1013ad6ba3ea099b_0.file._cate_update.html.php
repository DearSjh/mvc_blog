<?php
/* Smarty version 3.1.33, created on 2018-11-28 16:31:10
  from 'D:\wamp\WWW\blog\App\Admin\View\Category\_cate_update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfe524ef13827_07671972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '130dc6521a41b4f3e4ac0b4a1013ad6ba3ea099b' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Admin\\View\\Category\\_cate_update.html',
      1 => 1543308081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../left.tpl' => 1,
  ),
),false)) {
function content_5bfe524ef13827_07671972 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="./Public/Backstage/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="./Public/Backstage/css/main.css"/>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="?m=Admin&c=Index&a=index">首页</a></li>
                <li><a href="?m=Home&c=Index&a=index" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="?m=Admin&c=Login&a=update">修改密码</a></li>
                <li><a href="?m=Admin&c=Login&a=out">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">

    <!--左侧菜单栏-->

    <!--左侧菜单栏 begin-->
    <?php $_smarty_tpl->_subTemplateRender('file:../left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--左侧菜单栏 begin-->

    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="??m=Admin&c=Index&a=index">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">分类管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">修改分类</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?m=Admin&c=Category&a=updateHand&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" id="myform">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>上级分类：</th>
                            <td>
                                <select name="parent_id">
                                    <option value="0">等级分类</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['date']->value['parent_id'] == $_smarty_tpl->tpl_vars['value']->value['id']) {?> selected='selected' <?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>分类名称：</th>

                            <td>
                                <input class="common-textarea" type="text" name="name" size="50" value="<?php echo $_smarty_tpl->tpl_vars['date']->value['name'];?>
">
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>
<?php echo '<script'; ?>
>
    /*********<!--控制器设置分类名称必填-->***********/
    var fm=document.getElementById('myform');  //选择ID为myform的元素
    //当表单提交的时候，判断分类名称是否填写
    //  当表单提交的时候执行这个函数
    fm.onsubmit=function(){
        // fm.name.value 正则表达式，JS里一组特殊的东东，上例是替换文本前与后的空格，就等于trim
        if(/^\s+$/gi.test(fm.name.value) || fm.name.value==""){
            alert('请填写分类名称');
            return false;//阻止表单提交
        }
    };

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
