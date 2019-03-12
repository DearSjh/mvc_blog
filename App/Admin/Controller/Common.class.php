<?php
    namespace App\Admin\Controller;
    use Frame\BaseController;

    class Common extends BaseController{
        //判断是否登录，整体防翻墙
        public function __construct(){
            if(!isset($_SESSION['admin'])){
                $this->jump(true,"./index.php?m=Admin&c=Login&a=login","请先登录");
                die();
            }
            parent::__construct();
        }
    }
?>