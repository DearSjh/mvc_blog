<?php
    namespace Frame;
//基础模型类
    class BaseModel{
        public $mysql; //声明一个保存Mysql类的对象的属性
        public function __construct(){
            $this->mysql=Mysql::getMysql(); //实例化Mysql，将对象赋值给当前类中的mysql属性
        }
        //其他方法公共的方法
        private function cmment($PDOStat,$arr){
            if($arr){
                foreach($arr as $key=>$value){
                    if(is_int($key)){
                        // 下标是数字类型的，说明传递的是索引数组，SQL中的占位符是 ? 形式的
                        $PDOStat->bindValue($key+1,$value);
                    }else if(is_string($key)){
                        // 下标是字符串类型的，说明传递的是关联数组，SQL中的占位符是 :xxx 形式的
                        $PDOStat->bindValue(':'.$key,$value);
                    }
                }
            }
        }
        //查询方法
        public function select($sql,$arr=array()){
            try{
                    $PDOStat=$this->mysql->pdo->prepare($sql);
                    //如果有占位符，给占位符绑定具体的值
                    $this->cmment( $PDOStat,$arr);
                    if($PDOStat->execute()){
                        return $PDOStat->fetchALL(\PDO::FETCH_ASSOC);
                    }else {
                        echo flies;
                        }
            }catch(\PDOException $e){
                exit($e->getMessage());  //输出错误提示，并终止后续代码运行
            }
        }
        //查询一行方法
        public function find($sql,$arr=array()){
            try{
                $PDOStat=$this->mysql->pdo->prepare($sql);
                $this->cmment( $PDOStat,$arr);
                $PDOStat->execute();
                return $PDOStat->fetch(\PDO::FETCH_ASSOC);
            }catch(\PDOException $e){
                exit($e->getMessage());
            }
        }
        //查询总记录数方法
        public function count($sql,$arr=array()){
            try{
                $PDOStat=$this->mysql->pdo->prepare($sql);
                $this->cmment($PDOStat,$arr);
                if($PDOStat->execute()){
                    return $PDOStat->fetchColumn();
                }else {
                    echo flies;
                }
            }catch(\PDOException $e){
                exit($e->getMessage());
            }
        }
        //添加方法
        public function add($sql,$arr=array()){
            try{
                $PDOStat=$this->mysql->pdo->prepare($sql);
                $this->cmment( $PDOStat,$arr);
                if($PDOStat->execute()){
                    return $this->mysql->pdo->lastInsertId();
                }else{
                    return false;
                }
            }catch(\PDOException $E){
                exit($E->getMessage());
            }
        }
        //修改、删除方法
        public function exec($sql,$arr=array()){
            try{
                $PDOStat=$this->mysql->pdo->prepare($sql);
                $this->cmment( $PDOStat,$arr);
                if($PDOStat->execute()){
                    return $PDOStat->rowCount();// 成功返回受影响的行数
                }else{
                    return false;
                }
            }catch(\PDOException $E){
                exit($E->getMessage());
            }
        }
    }
?>