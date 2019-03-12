<?php
/* Smarty version 3.1.33, created on 2018-11-27 16:26:52
  from 'D:\wamp\WWW\blog\App\Admin\View\Login\login_update2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfcffcc227b67_24930427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e80ff98bafed82645d5199f5a9a5e9b9bbf69448' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Admin\\View\\Login\\login_update2.html',
      1 => 1543306734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfcffcc227b67_24930427 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>
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
    <!--右侧主操作区-->
    <div class="main-wrap" id="cc">
        <div class="result-wrap">
            <div class="result-content">
                <form action="?m=Admin&c=Login&a=update3" method="post" id="myform" >
                    <input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
                    <table class="insert-tab" width="300" align="center">
                        <tbody>
                        <tr>
                            <th>密码：</th>
                            <td>
                                <input class="common-text required" name="pwd" size="20" value="" type="password"  placeholder="请输入密码" />
                            </td>
                        </tr>
                        <tr>
                            <th>确认密码：</th>
                            <td>
                                <input class="common-text required" name="truepwd" size="20" value="" type="password"  placeholder="请输入密码" />
                            </td>
                        </tr>
                        <tr align="center">
                            <td  colspan="2" >
                                <input class="btn btn-primary btn4 mr10" value="下一步" type="submit">
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
