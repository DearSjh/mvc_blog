<?php
    namespace App\Admin\Model;
    use Frame\BaseModel;
//分类模型
    class CategoryModel extends BaseModel{
        public function getCategory(){
            //查询所有的分类
            $sql="select * from category";
            $result=$this->select($sql);
            //将查询结果当做参数调用sortCategory()方法，进行排序，然后返回
            $result=$this->sortCategory($result);
            return $result;
        }
        //使用递归进行排序,表中的parent_id值为父类的id，根据父级id，查询子级分类
        public function sortCategory($result,$parent_id=0,$level=0){
            static $arr=[];    //静态变量可以永久保存值
            foreach($result as $key=>$value){
                if($value['parent_id']==$parent_id){   //先遍历一级分类，parent_id为0的分类
                    $value['level']=$level;  //找到value之后，给它添加一个表示它等级的字段level，，
                    $arr[]=$value;//找的一个分类然后保存
                    $this->sortCategory($result,$value['id'],$level+1); //然后以父类的id为参数，找他的子类，（即parent_id值为父类id值的分类）
                                            //默认一级分类的level值为0，寻找他子类的时候+1
                }
            }
            return $arr;//将递归排序的数组返回
        }
        public function addHandle($arr=[]){
            $sql="insert into category(name,parent_id) values(:name,:parent_id)";
            $result=$this->add($sql,$arr);
            return $result;

        }
        public function deleteHand($id){
            $sql="delete from category where id=:id";
            $arr=['id'=>$id];
            $res=$this->exec($sql,$arr);
           return $res;
        }
        public function update($id){
            $sql="select * from category where id=?";
            return $this->find($sql,[$id]);
        }
        public function updateHand($arr=[]){
            $sql="update category set name=:name,parent_id=:parent_id where id=:id";
            return $this->exec($sql,$arr);
        }
    }
?>