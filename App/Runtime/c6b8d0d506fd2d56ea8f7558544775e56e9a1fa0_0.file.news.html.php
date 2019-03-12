<?php
/* Smarty version 3.1.33, created on 2018-12-15 15:39:59
  from 'D:\wamp\WWW\blog\App\Home\View\Article\news.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c14afcfe58b68_81542820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6b8d0d506fd2d56ea8f7558544775e56e9a1fa0' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Home\\View\\Article\\news.html',
      1 => 1544857641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../nav.tpl' => 1,
  ),
),false)) {
function content_5c14afcfe58b68_81542820 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['details']->value['title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['details']->value['keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['details']->value['description'];?>
"/>
    <link href="./Public/Reception/css/base.css" rel="stylesheet">
    <link href="./Public/Reception/css/style.css" rel="stylesheet">
    <link href="./Public/Reception/css/media.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="./Public/Reception/js/modernizr.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <!--前台高亮显示-->
    <link rel="stylesheet" href="./Public/Reception/styles/dark.css">
    <!--加一个提示插件-->
    <?php echo '<script'; ?>
 src="./Public/layer/jquery-3.3.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./Public/layer/layer.js"><?php echo '</script'; ?>
>
    <!--高亮插件-->
    <?php echo '<script'; ?>
 src="./Public/Reception/highlight.pack.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>hljs.initHighlightingOnLoad();<?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="?c=Article&a=fabulous&id=<?php echo $_GET['id'];?>
"><?php echo '</script'; ?>
>&lt;!&ndash;<?php echo $_GET['id'];?>
 获取地址栏的id&ndash;&gt;-->

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
            <a href="?c=Article&a=newslist2&cateId=<?php echo $_smarty_tpl->tpl_vars['details']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['details']->value['name'];?>
</a>
        </h2>
        <div class="index_about">
            <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['details']->value['title'];?>
</h2>
            <p class="box_c">
                <span class="d_time">发布时间：<?php echo $_smarty_tpl->tpl_vars['details']->value['ptime'];?>
</span>
                <span>分类：<?php echo $_smarty_tpl->tpl_vars['details']->value['name'];?>
</span>
                <span>浏览（<?php echo $_smarty_tpl->tpl_vars['details']->value['hits'];?>
）</span>
                <!--<span>评论览（14）</span>-->
            </p>
            <ul class="infos">
                <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['details']->value['content']);?>

                <!--添加数据的时候，使用htmlspecialchars对插入的内容中的标签进行的转义，取出文章的时候，需要使用htmlspecialchars_decode()方法对内容进行转回操作-->
            </ul>
            <div class="keybq">
                <p><span>标签</span>：黑色,个人博客,时间轴,响应式</p>
            </div>
            <div>
                <div class="caizan">
                    <a id="zan" class="zan" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['details']->value['fabulous'];?>
</a>
                    <a id="cai" class="cai" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['details']->value['step'];?>
</a>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="nextinfo">
                <?php if ($_smarty_tpl->tpl_vars['prev']->value) {?>
                <p>上一篇：<a href="?c=Article&a=art&id=<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['prev']->value['title'];?>
</a></p>
                <?php } else { ?>
                <p>当前是第一篇</p>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['next']->value) {?>
                <p>下一篇：<a href="?c=Article&a=art&id=<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['next']->value['title'];?>
</a></p>
                <?php } else { ?>
                <p>当前是最后一篇</p>
                <?php }?>
            </div>
            <!--评论 start-->
            <div class="pinglun">
                <h2>精彩评论</h2>
                <ul>
                    <li>
                        <img src="./Public/Reception/images/50.jpg">
                        <div class="parea">
                            <div class="sender">王大拿</div>
                            <p class="pcontent">吃好喝好玩好</p>
                            <div>
                                <span>2016-11-11</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="./Public/Reception/images/s7.jpg">
                        <div class="parea">
                            <div class="sender">谢大脚</div>
                            <p class="pcontent">休息好睡好</p>
                            <div>
                                <span>2016-11-13</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <form action="?c=Art&a=addComment" method="post">
                    <textarea name="content"></textarea>
                    <input type="submit" value="发表">
                </form>
            </div>
            <!--评论 end-->
            <div class="otherlink">
                <h2>相关文章</h2>
                <ul>
                    <li><a href="/news/s/2013-07-25/524.html" title="现在，我相信爱情！">现在，我相信爱情！</a></li>
                    <li><a href="/newstalk/mood/2013-07-24/518.html" title="我希望我的爱情是这样的">我希望我的爱情是这样的</a></li>
                    <li><a href="/newstalk/mood/2013-07-02/335.html" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情</a></li>
                    <li><a href="/newstalk/mood/2013-07-01/329.html" title="世上最美好的爱情">世上最美好的爱情</a></li>
                    <li><a href="/news/read/2013-06-11/213.html" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
                    <li><a href="/news/s/2013-06-06/24.html" title="爱情的背叛者">爱情的背叛者</a></li>
                </ul>
            </div>
        </div>
    </article>
    <aside>
        <div class="rnav">
            <li class="rnav1 "><a href="/">日记</a></li>
            <li class="rnav2 "><a href="/">欣赏</a></li>
            <li class="rnav3 "><a href="/">程序人生</a></li>
            <li class="rnav4 "><a href="/">经典语录</a></li>
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
<?php echo '<script'; ?>
>
    function cba(x){
        cai.innerText=x;   //xj就是article fabulous方法船体进来的真实的点赞数
    }
    //找到id为cai的元素
    var cai=document.getElementById('cai');
    //给cai绑定点击事件 （鼠标点击页面的cai的时候，执行这个函数）
    cai.onclick=function(){
        //创建一个script标签
        var s=document.createElement('script');
        //设置script标签的src属性
        s.src="?c=Article&a=step&id=<?php echo $_GET['id'];?>
";
        //把创建的script标签放到boby中
        document.body.appendChild(s);  //append 追加 Child 孩子
        //更新页面中的cai数量加1
        var old=parseInt(cai.innerText); //innerText获取标签里面的文本内容 parseInt把获取的文本转成数字
        cai.innerText=old+1;   //给zan这个标签的内容赋值，赋值的时候会覆盖原来的内容
        //点踩完成之后 提示
        layer.msg('点踩成功');
    };
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function abc(x){
        zan.innerText=x;   //xj就是article fabulous方法船体进来的真实的点赞数
    }
    //找到id为zan的元素
    var zan=document.getElementById('zan');
    //给zan绑定点击事件 （鼠标点击页面的zan的时候，执行这个函数）
    zan.onclick=function(){
        //创建一个script标签
        var s=document.createElement('script');
        //设置script标签的src属性
        s.src="?c=Article&a=fabulous&id=<?php echo $_GET['id'];?>
";
        //把创建的script标签放到boby中
        document.body.appendChild(s);  //append 追加 Child 孩子
        //更新页面中的zan数量加1
        var old=parseInt(zan.innerText); //innerText获取标签里面的文本内容 parseInt把获取的文本转成数字
        zan.innerText=old+1;   //给zan这个标签的内容赋值，赋值的时候会覆盖原来的内容
        //点赞完成之后 提示
        layer.msg('点赞成功');
    };
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
