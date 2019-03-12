<?php
    namespace App\Admin\Controller;
//分类控制器
use App\Home\Model\ArticleModel;

class Category extends Common {
            public function cate_list(){
       //调用CategoryModel模型 getCategory方法 获取数据
            $cate=new \App\Admin\Model\CategoryModel();
            $date=$cate->getCategory();
            $i=1;
       //将数据分配到指定模版
            $this->smarty->assign('date',$date);
            $this->smarty->assign('i',$i);
            $this->smarty->display('_cate_list.html');
            }
            public function add(){
                $cate=new \App\Admin\Model\CategoryModel();
                $date=$cate->getCategory();
                $this->smarty->assign('date',$date);
                $this->smarty->display('_cate_add.html');
            }
            public function addHand(){
                $post=$_POST;
                $cate=new \App\Admin\Model\CategoryModel();
                $date=$cate->addHandle($post);
                $this->jump($date,"./index.php?m=Admin&c=Category&a=cate_list","分类添加成功","分类添加失败");
            }
            public function delete(){
                $id=$_GET['id'];
                $cate=new \App\Admin\Model\CategoryModel();
                $date=$cate->deleteHand($id);
                $this->jump($date,"./index.php?m=Admin&c=Category&a=cate_list","分类删除成功","分类删除失败");
            }
            public function update(){
                $id=$_GET['id'];
                //调用CategoryModel模型 getCategory方法 获取分类 用于下拉列表
                $category=new \App\Admin\Model\CategoryModel();
                $cat=$category->getCategory();
                $cate=new \App\Admin\Model\CategoryModel();
                $date=$cate->update($id);
                $this->smarty->assign('id',$id);
                $this->smarty->assign('date',$date);
                $this->smarty->assign('cat',$cat);
                $this->smarty->display('_cate_update.html');
            }
            public function updateHand(){
                $id=$_GET['id'];
                $_POST['id']=$id;
                $post=$_POST;
                $date=new \App\Admin\Model\CategoryModel();
                $cate=$date->updateHand($post);
                $this->jump($cate,"./index.php?m=Admin&c=Category&a=cate_list","分类修改成功","分类修改失败");
            }
    }
?>