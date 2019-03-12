<?php
/* Smarty version 3.1.33, created on 2018-11-28 16:31:06
  from 'D:\wamp\WWW\blog\App\Admin\View\Category\_cate_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfe524a701283_60508042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf0e9c5f50fdac5e6314b35031562862248f3285' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Admin\\View\\Category\\_cate_list.html',
      1 => 1543308081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../left.tpl' => 1,
  ),
),false)) {
function content_5bfe524a701283_60508042 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href="?m=Admin&c=Index&a=index">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">分类管理</span>
            </div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option>
                                    <option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text">
                            </td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?m=Admin&c=Category&a=add"><i class="icon-font"></i>添加分类</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%">
                                <input class="allChoose" name="" type="checkbox" id="ck">
                            </th>
                            <th>ID</th>
                            <th>分类名称</th>
                            <th>操作</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['date']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <tr>
                            <td class="tc">
                                <input name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" type="checkbox">
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                            <td style="text-indent: <?php echo $_smarty_tpl->tpl_vars['value']->value['level']*2;?>
em;"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
                            <td>
                                <a class="link-update" href="?m=Admin&c=Category&a=update&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                                <a class="link-del" href="?m=Admin&c=Category&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>

    </div>
    <!--/右侧主操作区-->
</div>
<!--全选功能-->
<?php echo '<script'; ?>
>
    document.getElementById("ck").onclick = function(){
        var checked = document.getElementById("ck").checked;
        var checkson = document.getElementsByName("id[]");
        if(checked){
            for(var i = 0; i < checkson.length ;i++){
                checkson[i].checked = true;
            }
        }else{
            for(var i = 0; i < checkson.length ;i++){
                checkson[i].checked = false;
            }
        }
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
