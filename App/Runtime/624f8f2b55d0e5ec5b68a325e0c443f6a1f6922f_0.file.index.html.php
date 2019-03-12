<?php
/* Smarty version 3.1.33, created on 2019-02-25 20:43:20
  from 'D:\wamp\WWW\blog1\App\Home\View\Index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c73e2e8843b50_44178181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '624f8f2b55d0e5ec5b68a325e0c443f6a1f6922f' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog1\\App\\Home\\View\\Index\\index.html',
      1 => 1544857150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../nav.tpl' => 1,
  ),
),false)) {
function content_5c73e2e8843b50_44178181 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>如影随形</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="./Public/Reception/css/base.css" rel="stylesheet">
<link href="./Public/Reception/css/index.css" rel="stylesheet">
<link href="./Public/Reception/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <?php echo '<script'; ?>
 src="../../../../Public/Reception/highlight.pack.js"><?php echo '</script'; ?>
>
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
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recommend']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
      <div class="blogs">
        <h3><a href="?c=Article&a=art&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h3>
        <figure><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['picture'];?>
"></figure>
        <ul>
          <p>
            <?php echo $_smarty_tpl->tpl_vars['value']->value['introduce'];?>

          </p>
          <a href="?c=Article&a=art&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor">
          <span>作者：<?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</span>
          <span>分类：【<a href="?c=Article&a=newslist&cateId=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>】</span>
          <span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['value']->value['hits'];?>
</a>）</span>
          <!--<span>评论（<a href="/">30</a>）</span>-->
        </p>
        <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['value']->value['ptime'];?>
</div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="?m=Home&c=Article&a=about"><span>关于我</span></a></div>
    <div class="topspaceinfo">
      <h1 align="center">执手永年</h1>
      <p>人事多变迁总归要顺着心走。</p>
    </div>
    <div class="about_c">
      <p>网名：DanceSmile | 即步非烟</p>
      <p>职业：PHP </p>
      <p>籍贯：河北省—保定市</p>
      <p>电话：15227033400</p>
      <p>邮箱：756575346@qq.com</p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newest']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <li><a href="?c=Article&a=art&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <h2>
        <p class="tj_t2">随机文章</p>
      </h2>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['random']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
        <li><a href="?c=Article&a=art&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="/">W3C</a></li>
        <li><a href="/">3DST技术社区</a></li>
      </ul>
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
