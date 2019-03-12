<?php
    namespace App\Admin\Controller;
    //后台首页
    class Index extends Common {
        public function index(){
                $this->smarty->display('_index.html');
        }
    }
?>