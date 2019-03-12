<?php
    namespace Frame;
//连接数据库
    class Mysql{
        private static $mysql=null;
        public $pdo;
        private function __construct(){
            $this->connet();
        }
        private function connet(){
            $dsn='mysql:host='.CONF['host'].';dbname='.CONF['dbname'].';charset='.CONF['charset'].';port='.CONF['port'];
            $user=CONF['user'];
            $pwd=CONF['pwd'];
            $this->pdo=new \PDO($dsn,$user,$pwd,$arr=array(
                \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION,
            ));
        }
        private function __clone(){}
        public static function getMysql(){
            if(self::$mysql===null){
                self::$mysql=new self();
            }
            return self::$mysql;
        }
    }

?>