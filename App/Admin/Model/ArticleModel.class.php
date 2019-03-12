<?php
    namespace App\Admin\Model;
    use Frame\BaseModel;
//文章模型
    class ArticleModel extends BaseModel{
        public $pageTotal;  //用来保存列表的总页数
        public function artlist($p,$pageNum,$search){
            $start=($p-1)*$pageNum;  //每页从第几条数据开始显示
            //查询文章数据
            $sql="select a.id,a.title,c.name,a.author,a.ptime,a.hits from article a ";
            $sql.="join category c on a.category_id=c.id";
            $sql.=$search;
            $sql.=" order by a.id desc limit ".$start.",".$pageNum;
            $model=new BaseModel();
            $date=$model->select($sql);
            //求总数
            $sql_count="select count(*) from article a join category c on a.category_id=c.id $search";
            $count=$model->count($sql_count);
            $this->pageTotal=ceil($count/$pageNum);
            return $date;
        }
        public function addHandle($arr=[]){
            //占位符必须和$_POST表单一一对应
            $sql="insert into article(picture,category_id,title,author,ptime,seotitle,keywords,description,introduce,hits,content)";
            $sql.=" values(:picture,:category_id,:title,:author,:ptime,:seotitle,:keywords,:description,:introduce,:hits,:content)";
            $model=new BaseModel();
            $date=$model->add($sql,$arr);
            return $date;
        }
        public function deleteHand($id){
            $sql="delete from article where id=:id";
            $arr=['id'=>$id];
            $res=$this->exec($sql,$arr);
            return $res;
        }
        public function update($id){
            $sql="select picture,category_id,title,author,ptime,seotitle,keywords,description,introduce,hits,content";
            $sql.=" from article  where id=?";
            $model=new BaseModel();
            return $model->find($sql,[$id]);
        }
        public function  updateHand($arr=[]){
            $sql="update article set picture=:picture,category_id=:category_id,title=:title,author=:author,ptime=:ptime,";
            $sql.="seotitle=:seotitle,keywords=:keywords,description=:description,introduce=:introduce,hits=:hits,content=:content";
            $sql.=" where id=:id";
            $model=new BaseModel();
            return $model->exec($sql,$arr);
        }
        public function batchDel($arr=[]){
            $arr_string= join(',', $arr);
            $sql="delete from article where id in ($arr_string)";   //in 后面不能跟数组 需要先转成字符串 以‘，’隔开
            return $this->exec($sql);
        }
    }
?>