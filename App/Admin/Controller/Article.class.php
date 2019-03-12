<?php
    namespace App\Admin\Controller;
 //文章控制器
    class Article extends Common {
        //获取文章列表方法
        public function show(){
            $p=$_GET['p']?? 1;
            $pageNum=5;
            if(empty($_GET['keywords'])){
                //没有搜索关键字
                $search=" where 1=1 ";
            }else{
                //有搜索关键字
                $keywords=$_GET['keywords'];
                $search=" where title like '%$keywords%' ";
            }
            //ArticleMode 模型的artlist方法获取数据
            $cate=new \App\Admin\Model\ArticleModel();
            $date=$cate->artlist($p,$pageNum,$search); //获取查询的列表文章
            $pageTotal=$cate->pageTotal;  //总页数
            $cet=new \Frame\Page();
            //根据需求，设置分页的样式
            $cet->config['prev']='<';
            $cet->config['next']='>';
            //$cet->config['theme']=['middle','search'];
            //获取分页数据
            $page=$cet->showPage($pageTotal);
            $this->smarty->assign('page',$page);
            $this->smarty->assign('pageTotal', $pageTotal);
            //调用模版 展示数据
            $this->smarty->assign('date',$date);
            $this->smarty->display('_blog_list.html');
        }
        //展示添加模版
        public function add(){
            //调用CategoryModel模型 getCategory方法 获取分类 用于下拉列表
            $cate=new \App\Admin\Model\CategoryModel();
            $date=$cate->getCategory();
            //展示模版
            $this->smarty->assign('date',$date);
            $this->smarty->display('_blog_add.html');
        }
        public function addHand(){
            //实例化 上传类
            $file=new \Frame\Upload();
            $filename=$file->up();   //调用up方法实现上传，并得到上传后路径+文件名
            $_POST['picture']=$filename; //将上传的文件路径 保存到P0ST数组中， 下标为图片的字段名
            $post=$_POST;
            $cate=new \App\Admin\Model\ArticleModel();
            $date=$cate->addHandle($post);
            $this->jump($date,"./index.php?m=Admin&c=Article&a=show","文章添加成功","文章添加失败");
        }
        public function delete(){
            $id=$_GET['id'];
            $cate=new \App\Admin\Model\ArticleModel();
            $date=$cate->deleteHand($id);
            $this->jump($date,"./index.php?m=Admin&c=Article&a=show","文章删除成功","文章删除失败");
        }
        public function update(){
          $id=$_GET['id'];
          $cate=new \App\Admin\Model\ArticleModel();
          $date=$cate->update($id);
          //调用CategoryModel模型 getCategory方法 获取分类 用于下拉列表
          $category=new \App\Admin\Model\CategoryModel();
          $cat=$category->getCategory();
            //展示模版
          $this->smarty->assign('id',$id);
          $this->smarty->assign('cat',$cat);
          $this->smarty->assign('date',$date);
          $this->smarty->display('_blog_update.html');
        }
        public function updateHand(){
            //实例化 上传类
            $id=$_GET['id'];
            $file=new \Frame\Upload();
            $filename=$file->up();   //调用up方法实现上传，并得到上传后路径+文件名
            $_POST['id']=$id; //将上传的文件路径 保存到P0ST数组中， 下标为图片的字段名
            $_POST['picture']=$filename; //将上传的文件路径 保存到P0ST数组中， 下标为图片的字段名
            $post=$_POST;
            $cate=new \App\Admin\Model\ArticleModel();
            $date=$cate-> updateHand($post);
            $this->jump($date,"./index.php?m=Admin&c=Article&a=show","文章修改成功","文章修改失败");
        }
        public function batchDel(){
            $post = $_POST["id"];
            $cate = new \App\Admin\Model\ArticleModel();
            $date = $cate->batchDel($post);
            $this->jump($date,"./index.php?m=Admin&c=Article&a=show","文章批量删除成功","文章批量删除失败");
        }
    }
?>