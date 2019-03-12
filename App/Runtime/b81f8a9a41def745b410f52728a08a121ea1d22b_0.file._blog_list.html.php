<?php
/* Smarty version 3.1.33, created on 2018-11-29 20:40:23
  from 'D:\wamp\WWW\blog\App\Admin\View\Article\_blog_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bffde37b65984_67311921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b81f8a9a41def745b410f52728a08a121ea1d22b' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Admin\\View\\Article\\_blog_list.html',
      1 => 1543495219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../left.tpl' => 1,
  ),
),false)) {
function content_5bffde37b65984_67311921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\wamp\\WWW\\blog\\Frame\\Smarty\\plugins\\modifier.my_replace.php','function'=>'smarty_modifier_my_replace',),));
?>
<!doctype html>
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
                <form>
                    <input type="hidden" name="m" value="Admin">
                    <input type="hidden" name="c" value="Article">
                    <input type="hidden" name="a" value="show">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <!--<?php echo (($tmp = @$_GET['keywords'])===null||$tmp==='' ? '' : $tmp);?>
  地址栏有关键字就是用它 没有就使用空-->
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="<?php echo (($tmp = @$_GET['keywords'])===null||$tmp==='' ? '' : $tmp);?>
" id="" type="text">
                            </td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="?m=Admin&c=Article&a=batchDel">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?m=Admin&c=Article&a=add"><i class="icon-font"></i>添加文章</a>
                        <a href="javascript:void(0)" id="batchDel" onclick=" document.getElementById('myform').submit()"><i class="icon-font"></i>批量删除</a>
                        <!--<i class="icon-font"></i> <input id="batchDel" value="批量删除" type="submit" style="border:none">-->
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%">
                                <input class="allChoose" name="" type="checkbox" value="''" id='ck'/>
                            </th>
                            <th>标题</th>
                            <th>所属分类</th>
                            <th>作者</th>
                            <th>发布时间</th>
                            <th>点击数</th>
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
                            <td><?php echo smarty_modifier_my_replace($_smarty_tpl->tpl_vars['value']->value['title']);?>
</td>   <!--使用变量调节器my_replace-->
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['ptime'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['hits'];?>
</td>
                            <td>
                                <a class="link-update" href="?m=Admin&c=Article&a=update&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                                <a class="link-del" href="?m=Admin&c=Article&a=delete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
            </form>
            <div class="list-page">
                <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

            </div>
        </div>
    </div>

</div>
<!--/右侧主操作区-->
</div>
<!--规定文本框只允许输入数字，如果你执意要输入其它的字符，则输入的字符将自动消失，除非你输入的是规定内的字符格式，并且对输入数字大小也有限制！-->
<?php echo '<script'; ?>
 type="text/javascript">
    var text = document.getElementById("input");
    text.onkeyup = function(){
        this.value=this.value.replace(/\D/g,'');
        if(text.value><?php echo $_smarty_tpl->tpl_vars['pageTotal']->value;?>
){
            text.value = <?php echo $_smarty_tpl->tpl_vars['pageTotal']->value;?>
;
        }
        if(text.value<1 ){
            text.value = 1;
        }
    }
<?php echo '</script'; ?>
>
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
