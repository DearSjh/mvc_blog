<?php
//搜索关键字高亮显示  $str  表示要进行调节的变量
    function smarty_modifier_my_replace($str){
        if(empty($_GET['keywords'])){
            //没有搜索关键字
           return $str;
        }else{
            //有搜索关键字
            $keywords=$_GET['keywords'];
            $search='<span style="color:red;background-color:yellow;">'.$keywords.'</span>';
            return str_replace($keywords,$search,$str);  //有搜索的关键字，就替换成有颜色的
        }
    }
?>