<?php
/* Smarty version 3.1.33, created on 2018-11-28 14:04:54
  from 'D:\wamp\WWW\blog\App\Admin\View\Login\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfe30067c3b41_26316019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c46a1414b46fce85a49eba4924fe965d5aa7c1' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Admin\\View\\Login\\login.html',
      1 => 1543385090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfe30067c3b41_26316019 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link rel="stylesheet" type="text/css" href="./Public/Backstage/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="./Public/Backstage/css/main.css"/>
    <style>
        #cc{
            width:350px;
            margin:20px auto;
        }
        td{
            padding:10px 5px;
        }
        #logo{
            display:block;
            margin:150px auto 20px;
        }
        body{
            FILTER: progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#ccc,endColorStr=#fff); /*IE 6 7 8*/ 

background: -ms-linear-gradient(top, #ccc,  #fff);        /* IE 10 */

background:-moz-linear-gradient(top,#ccc,#fff);/*火狐*/ 

background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#ccc), to(#fff));/*谷歌*/ 

background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ccc), to(#fff));      /* Safari 4-5, Chrome 1-9*/

background: -webkit-linear-gradient(top, #ccc, #fff);   /*Safari5.1 Chrome 10+*/

background: -o-linear-gradient(top, #ccc, #fff);  /*Opera 11.10+*/

} 
        }

        
    </style>
</head>
<body>



<div class="container clearfix">
    <img src='./Public/Backstage/images/logo.png' id='logo' />
    <!--右侧主操作区-->
    <div class="main-wrap" id="cc">
        <div class="result-wrap">
            <div class="result-content">
                <form action="?m=Admin&c=Login&a=loginHandle" method="post" id="myform" >
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th>用户名：</th>
                            <td>
                                <input class="common-text required" id="title" name="user" size="20" value="" type="text"  placeholder="请输入用户名" />
                            </td>
                        </tr>
                        <tr>
                            <th>密码：</th>
                            <td>
                                <input class="common-text required" name="pwd" size="20" value="" type="password"  placeholder="请输入密码" />
                            </td>
                        </tr>
                        <tr>
                            <th>验证码：</th>
                            <td>
                                <input class="common-text required" name="yzm" size="4" value="" type="text">
                                <!--  onclick="this.src='?m=Admin&c=Login&a=yzm&t='+Math.random()    鼠标点击更新   -->
                                <img src="?m=Admin&c=Login&a=yzm" width="80" height="30" onclick="this.src='?m=Admin&c=Login&a=yzm&t='+Math.random()">
                            </td>
                        </tr>
                        <tr>
                            <td  colspan="2" align="center">
                                <a href="?m=Admin&c=Login&a=update"  style="display: inline; float: left">更改密码</a>
                                <input class="btn btn-primary btn4 mr10" value="登录" type="submit">
                                <input class="btn btn4" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}