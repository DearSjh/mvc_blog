<?php
/* Smarty version 3.1.33, created on 2018-12-15 15:59:00
  from 'D:\wamp\WWW\blog\App\Home\View\Article\newslist2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c14b444db4394_86283088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa5c9c2cc38bb7d34a099735fac96ca117b95f80' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Home\\View\\Article\\newslist2.html',
      1 => 1544860730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../nav.tpl' => 1,
  ),
),false)) {
function content_5c14b444db4394_86283088 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>如影随形</title>
    <meta name="keywords" content="个人博客模板,博客模板,响应式"/>
    <meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。"/>
    <link href="./Public/Reception/css/base.css" rel="stylesheet">
    <link href="./Public/Reception/css/style.css" rel="stylesheet">
    <link href="./Public/Reception/css/media.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="./Public/Reception/js/modernizr.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body>
<div class="ibody">
    <header>
        <h1>如影随形</h1>
        <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
        <div class="logo"><a href="?m=Admin&c=Login&a=login"></a></div>
        <?php $_smarty_tpl->_subTemplateRender('file:../nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
    <article>
        <h2 class="about_h">您现在的位置是：<a href="/">首页</a>>
            <a href="?c=Article&a=newslist2&cateId=<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['name'];?>
</a>
        </h2>
        <div class="bloglist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classification']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="newblog">
                <ul>
                    <h3><a href="?c=Article&a=art&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h3>
                    <div class="autor">
                        <span>作者：<?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</span>
                        <span>分类：[<a href="?c=Article&a=newslist&cateId=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>]</span>
                        <span>浏览（<a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['hits'];?>
</a>）</span>
                        <!--<span>评论（<a href="/">30</a>）</span>-->
                    </div>
                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['value']->value['introduce'];?>

                        <a href="?c=Article&a=art&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"  class="readmore">全文</a>
                    </p>
                </ul>
                <figure><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['picture'];?>
"></figure>
                <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['value']->value['ptime'];?>
</div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="page">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        </div>
    </article>
    <aside>
        <div class="rnav">
            <li class="rnav1 "><a href="?m=Home&c=Article&a=about">关于我</a></li>
            <li class="rnav2 "><a href="?c=Article&a=newslist2&cateId=2">干净的圈子</a></li>
            <li class="rnav3 "><a href="?c=Article&a=newslist2&cateId=3">规律的生活</a></li>
            <li class="rnav4 "><a href="?m=Home&c=Article&a=share">中意的人</a></li>
        </div>
        <div class="ph_news">
            <h2>
                <p>点击排行</p>
            </h2>
            <ul class="ph_n">
                <li><span class="num1">1</span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
                <li><span class="num2">2</span><a href="/">励志人生-要做一个潇洒的女人</a></li>
                <li><span class="num3">3</span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
                <li><span>4</span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
                <li><span>5</span><a href="/">女生清新个人博客网站模板</a></li>
                <li><span>6</span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
                <li><span>7</span><a href="/">Column 三栏布局 个人网站模板</a></li>
                <li><span>8</span><a href="/">时间煮雨-个人网站模板</a></li>
                <li><span>9</span><a href="/">花气袭人是酒香—个人网站模板</a></li>
            </ul>
            <h2>
                <p>栏目推荐</p>
            </h2>
            <ul>
                <li><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
                <li><a href="/">励志人生-要做一个潇洒的女人</a></li>
                <li><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
                <li><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
                <li><a href="/">女生清新个人博客网站模板</a></li>
                <li><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
                <li><a href="/">Column 三栏布局 个人网站模板</a></li>
                <li><a href="/">时间煮雨-个人网站模板</a></li>
                <li><a href="/">花气袭人是酒香—个人网站模板</a></li>
            </ul>
            <h2>
                <p>最新评论</p>
            </h2>
            <ul class="pl_n">
                <dl>
                    <dt><img src="./Public/Reception/images/s8.jpg"></dt>
                    <dt></dt>
                    <dd>DanceSmile
                        <time>49分钟前</time>
                    </dd>
                    <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
                </dl>
                <dl>
                    <dt><img src="./Public/Reception/images/s7.jpg"></dt>
                    <dt></dt>
                    <dd>yisa
                        <time>2小时前</time>
                    </dd>
                    <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
                </dl>
                <dl>
                    <dt><img src="./Public/Reception/images/s6.jpg"></dt>
                    <dt></dt>
                    <dd>小林博客
                        <time>8月7日</time>
                    </dd>
                    <dd><a href="/">博客色彩丰富，很是好看</a></dd>
                </dl>
                <dl>
                    <dt><img src="./Public/Reception/images/003.jpg"></dt>
                    <dt></dt>
                    <dd>DanceSmile
                        <time>49分钟前</time>
                    </dd>
                    <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
                </dl>
                <dl>
                    <dt><img src="./Public/Reception/images/002.jpg"></dt>
                    <dt></dt>
                    <dd>yisa
                        <time>2小时前</time>
                    </dd>
                    <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
                </dl>
            </ul>
            <h2>
                <p>最近访客</p>
                <ul>
                    <img src="./Public/Reception/images/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
                </ul>
            </h2>
        </div>
        <div class="copyright">
            <ul>
                <p> Design by <a href="/">DanceSmile</a></p>
                <p>冀ICP备11002373号-1</p>
                </p>
            </ul>
        </div>
    </aside>
    <?php echo '<script'; ?>
 src="./Public/Reception/js/silder.js"><?php echo '</script'; ?>
>
    <div class="clear"></div>
    <!-- 清除浮动 -->
</div>
</body>
</html>
<?php }
}
