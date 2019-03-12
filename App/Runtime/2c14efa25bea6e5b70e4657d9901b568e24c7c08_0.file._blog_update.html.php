<?php
/* Smarty version 3.1.33, created on 2018-11-28 16:32:27
  from 'D:\wamp\WWW\blog\App\Admin\View\Article\_blog_update.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfe529b4e9d10_25178531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c14efa25bea6e5b70e4657d9901b568e24c7c08' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Admin\\View\\Article\\_blog_update.html',
      1 => 1543308081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../left.tpl' => 1,
  ),
),false)) {
function content_5bfe529b4e9d10_25178531 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a href="?m=Home&c=Index&a=index">网站首页</a></li>
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
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">博文管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">修改博文</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?m=Admin&c=Article&a=updateHand&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" enctype="multipart/form-data" method="post" id="myform" >
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>所属分类：</th>
                                <td>
                                   <select name="category_id">
                                       <option value="0">请选择</option>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                       <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['date']->value['category_id'] == $_smarty_tpl->tpl_vars['value']->value['id']) {?> selected='selected' <?php }?>  <?php if ($_smarty_tpl->tpl_vars['value']->value['parent_id'] == 0) {?> disabled <?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" name="title" size="50" value="<?php echo $_smarty_tpl->tpl_vars['date']->value['title'];?>
" type="text">
                                </td>
                            </tr>

                            <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td>
                                    <input class="common-text required" name="author" size="10" type="text" value="<?php echo $_smarty_tpl->tpl_vars['date']->value['author'];?>
">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>发布时间：</th>
                                <td>
                                    <input class="common-text required laydate-icon"  value="<?php echo $_smarty_tpl->tpl_vars['date']->value['ptime'];?>
" id="ptime" name="ptime" size="20" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>文章配图：</th>
                                <td>
                                    <input type="file" name="picture"  value="<?php echo $_smarty_tpl->tpl_vars['date']->value['picture'];?>
">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>SEO标题：</th>
                                <td>
                                    <input class="common-text required"  value="<?php echo $_smarty_tpl->tpl_vars['date']->value['seotitle'];?>
" name="seotitle" size="87" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>关键字：</th>
                                <td>
                                    <input class="common-text required"  value="<?php echo $_smarty_tpl->tpl_vars['date']->value['keywords'];?>
" name="keywords" size="87" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>描述：</th>
                                <td>
                                    <textarea name="description" class="common-textarea" cols="100" rows="3"> <?php echo $_smarty_tpl->tpl_vars['date']->value['description'];?>
</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>摘要：</th>
                                <td>
                                    <textarea name="introduce" class="common-textarea" cols="100" rows="3"> <?php echo $_smarty_tpl->tpl_vars['date']->value['introduce'];?>
"</textarea>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>点击量：</th>
                                <td>
                                    <input class="common-text required" name="hits"  value="<?php echo $_smarty_tpl->tpl_vars['date']->value['hits'];?>
" size="10" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td>
                                    <textarea name="content" class="common-textarea" id="content" cols="100" rows="20" > <?php echo $_smarty_tpl->tpl_vars['date']->value['content'];?>
</textarea>
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
<!--设置富文本编辑器-->
<?php echo '<script'; ?>
 src="./Public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    CKEDITOR.replace('content',{
        customConfig:'my.js'
    });
<?php echo '</script'; ?>
>
<!--设置日期-->
<?php echo '<script'; ?>
 src="./Public/laydate/laydate.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    !function(){
        laydate.skin('molv');
        laydate({
            elem: '#ptime'
        })

    }();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    /*********<!--控制器设置分类必选-->***********/
    var fm=document.getElementById('myform');  //选择ID为myform的元素
    //当表单提交的时候，判断分类是否选择了
    //  当表单提交的时候执行这个函数
    fm.onsubmit=function(){
        if(fm.category_id.value==0){
            alert('请选择分类');
            return false;//阻止表单提交
        }
    };
    /*******设置随机点击量*********/
    // var random=Math.floor(20+Math.random()*(100-20));
    // fm.hits.value=random;

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
