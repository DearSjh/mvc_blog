<?php
/* Smarty version 3.1.33, created on 2018-12-15 15:30:34
  from 'D:\wamp\WWW\blog\App\Admin\View\left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c14ad9adbf935_03964217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681b2df8af2ca1319e6c6ed6f878b5f936a29283' => 
    array (
      0 => 'D:\\wamp\\WWW\\blog\\App\\Admin\\View\\left.tpl',
      1 => 1543495526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c14ad9adbf935_03964217 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                <ul class="sub-menu">
                    <li><a href="?m=Admin&c=Category&a=cate_list"><i class="icon-font">&#xe008;</i>分类管理</a></li>
                    <li><a href="?m=Admin&c=Article&a=show"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                    <li><a href="#"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                    <li><a href="#"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                <ul class="sub-menu">
                    <li><a href="#"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                    <li><a href="#"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                    <li><a href="#"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                                    </ul>
            </li>
        </ul>
    </div>
</div><?php }
}
