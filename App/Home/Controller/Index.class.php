<?php
    namespace App\Home\Controller;
    use Frame\BaseController;
//前台首页控制器
    class Index extends BaseController{
        //引用前台首页
        public function index(){
            $date=new \App\Home\Model\ArticleModel();
            //获得5篇推荐文章
            $recommend=$date->getFiveArticleByHits();
            //获得8篇最新文章
            $newest=$date->getNewest();
            //获得8篇随机文章
            $random=$date->getRandom();
            $this->smarty->assign('recommend',$recommend);
            $this->smarty->assign('newest',$newest);
            $this->smarty->assign('random',$random);
            $this->smarty->display('index.html');
        }
    }
?>