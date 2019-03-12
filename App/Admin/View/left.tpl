{*后台页面的左侧菜单栏begin*}
<div class="sidebar-wrap">
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
                    {*给数据库article表添加一个字段，设置两个值0和1，0代表假删除，1代表显示，假删除的文章放在回收站里面 也就是数据还原里面  *}
                </ul>
            </li>
        </ul>
    </div>
</div>