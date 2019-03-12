<?php
    namespace Frame;
    class BaseController{
        protected $smarty; //属性用于保存Smarty类的对象
        //创建方法，完成引入Smarty并配置Smarty的工作
        public function __construct(){
            //使用Smarty
            require_once FRAME_PATH.'Smarty/Smarty.class.php';
            $this->smarty=new \Smarty();
            //配置一下模板目录
            $this->smarty->setTemplateDir(VIEW_PATH.C);
            //配置编译文件目录
            $this->smarty->setCompileDir(APP_PATH.'Runtime');
        }
        //封装一个跳转的方法
        protected function jump($res,$url,$Hint1='',$Hint2=''){
            if($res){
                echo "<script>alert('$Hint1'); location.href='$url';</script>";
            }else{
                echo "<script>alert('$Hint2');  history.back();</script>";
            }
        }
    }
?>