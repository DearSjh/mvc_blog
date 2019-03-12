<?php
    namespace App\Home\Controller;
    use Frame\BaseController;
//文章详情类
    class Article extends BaseController {
        //点击首页文章链接 跳转到文章详情页
        public function art(){
            $id=!empty($_GET['id'])?$_GET['id']:die('参数错误');   //empty 检查变量是否为空，若为空 0 null 则返回true
            $date=new \App\Home\Model\ArticleModel();
            $details=$date->details($id);  //获取文章详情
            $prev=$date->prev($id);
            $next=$date->next($id);
            $this->smarty->assign('details',$details);
            $this->smarty->assign('prev',$prev);
            $this->smarty->assign('next',$next);
            $this->smarty->display('news.html');
        }
        //点击子类跳转到列表页  文章的category_id就是分类id
        public function newslist(){
            $cateId=!empty($_GET['cateId'])?$_GET['cateId']:die('参数错误');
            $p=$_GET['p']??1;
            $pageNum=5;
            $date=new \App\Home\Model\ArticleModel();
            $classification=$date->newlist($p,$cateId,$pageNum);
            $pageTotal=$date->pageTotal;
            $cet=new \Frame\Page();
            $cet->config['prev']='<';
            $cet->config['next']='>';
            $page=$cet->showPage($pageTotal);
            $this->smarty->assign('classification',$classification);
            $this->smarty->assign('page',$page);
            $this->smarty->display('newslist.html');
        }
        //点击“顶级类”跳转到列表页  先获取顶级类的id
        public function newslist2(){
            $cateId=!empty($_GET['cateId'])?$_GET['cateId']:die('参数错误');
            $p=$_GET['p']??1;
            $pageNum=8;
            $date=new \App\Home\Model\ArticleModel();
            $classification=$date->newlist2($p,$pageNum,$cateId);
            $cate=$date->cate;
            $pageTotal=$date->pageTotal;
            $cet=new \Frame\Page();
            $cet->config['prev']='<';
            $cet->config['next']='>';
            $page=$cet->showPage($pageTotal);
            $this->smarty->assign('classification',$classification);
            $this->smarty->assign('page',$page);
            $this->smarty->assign('cate',$cate);
            $this->smarty->display('newslist2.html');
        }
        //点赞方法
        public function fabulous(){
            $id=$_GET['id'];
            $date=new \App\Home\Model\ArticleModel();
            $res=$date->fabulous($id);
            echo "abc('$res[fabulous]')";  //表示在news.html页面，执行一个叫abc的函数，并把点赞的数量传递给abc函数

        }
        //点踩方法
        public function step(){
            $id=$_GET['id'];
            $date=new \App\Home\Model\ArticleModel();
            $res=$date->step($id);
            echo "cba('$res[fabulous]')";  //表示在news.html页面，执行一个叫abc的函数，并把点赞的数量传递给abc函数
        }
        public function about(){
            $this->smarty->display('about.html');
        }
        public function share(){
            $this->smarty->display('share.html');
        }
    }
?>