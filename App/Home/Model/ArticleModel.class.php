<?php
    namespace App\Home\Model;
    use Frame\BaseModel;
//处理Article文章表的模型类
    class ArticleModel extends BaseModel {
        public $pageTotal;  //保存总页数
        public  $cate;  //保存顶级类的id和类名
        //获取5篇推荐文章   点击量最高的五篇 order by hits desc
        public function getFiveArticleByHits(){
            $sql="select a.id,a.category_id,a.title,c.name,a.author,a.ptime,a.hits,a.introduce,a.picture from article a ";
            $sql.="join category c on a.category_id=c.id";
            $sql.=" order by hits desc limit 5";
            $model=new BaseModel();
            return $model->select($sql);
        }
        //获取右侧侧边栏8篇最新文章   因为发布时间是瞎写的所有按id值
        public function getNewest(){
            $sql="select id,title from article  order by id desc limit 8";
            $model=new BaseModel();
            return $model->select($sql);
        }
        //获取右侧侧边栏8篇随机文章   order by rand()
        public function getRandom(){
            $sql="select id,title from article  order by rand() limit 8";
            $model=new BaseModel();
            return $model->select($sql);
        }
        //获取文章详情
        public function details($id){
            $sql="select a.*,c.name from article a join category c on a.category_id=c.id where a.id=?";
            $model=new BaseModel();
            return $model->find($sql,[$id]);
        }
        //分配文章上一篇的数据
        public function prev($id){
            $sql="select id,title from article where id<? order by id desc limit 1";
            $model=new BaseModel();
            return $model->find($sql,[$id]);
        }
        //分配文章上一篇的数据
        public function next($id){
            $sql="select id,title from article where id>? order by id limit 1";
            $model=new BaseModel();
             return $model->find($sql,[$id]);
         }
        //根据首页中的“内涵段子”、“茶余饭后”、“风言风语”等等子类，跳转到的页面就是列表页。
        public function newlist($p,$cateId,$pageNum){
            $start=($p-1)*$pageNum;
            $model=new BaseModel();
            $sql="select a.id,a.category_id,a.title,c.name,a.author,a.ptime,a.hits,a.introduce,a.picture ";
            $sql.=" from article a join category c on a.category_id=c.id";
            $sql.=" where a.category_id=?";
            $sql.=" order by a.id desc limit " . $start.','.$pageNum;
            //查询总页数$sqls
            $sqls ="select count(*) from article a join category c on a.category_id=c.id where a.category_id=?";
            $count=$model->count($sqls,[$cateId]);  //总条数
            //总页数
            $this->pageTotal=ceil($count/$pageNum);
            return $model->select($sql,[$cateId]);
        }
        // 根据顶级分类的id，获取它所有的子类id。然后根据这些子类id来查询对应的文章。
        public function newlist2($p,$pageNum,$cateId){
            $start=($p-1)*$pageNum;
            $model=new BaseModel();
            //查询顶级分类对应的文章列表
            $sql="select a.id,a.category_id,a.title,c.name,a.author,a.ptime,a.hits,a.introduce,a.picture from article a ";
            $sql.=" join category c on a.category_id=c.id";
            $sql.=" where a.category_id in (select id from category where parent_id=?)";
            $sql.=" order by a.id desc limit " . $start.','.$pageNum;
            //查询总数  要与查询文章的条件一致
            $sqls="select count(*) from article a join category c on a.category_id=c.id";
            $sqls.=" where a.category_id in (select id from category where parent_id=?)";
            $count=$model->count($sqls,[$cateId]);
            //查询顶级类的类名
            $sql2="select id,name from category where id=?";
            $this->cate=$model->find($sql2,[$cateId]);
            //总页数
            $this->pageTotal=ceil($count/$pageNum);
            return $model->select($sql,[$cateId]);
        }
        public function fabulous($id){
            $sql="update article set fabulous=fabulous+1 where id=?";
            $model=new BaseModel();
           if($model->exec($sql,[$id])){
               //修改成功 则返回最新点赞数
               $sqls="select fabulous from article where id=?";
               return $model->find($sqls,[$id]);
           }
        }
        public function step($id){
            $sql="update article set step=step+1 where id=?";
            $model=new BaseModel();
            if($model->exec($sql,[$id])){
                //修改成功 则返回最新点赞数
                $sqls="select step from article where id=?";
                return $model->find($sqls,[$id]);
            }
        }
    }
?>