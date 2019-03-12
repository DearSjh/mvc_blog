<?php
    namespace Frame;
//框架初始化类 或者叫做 框架引导类
//做一些准备工作，使得项目能够正常运行
    class Frame{
        public static function run(){
            self::startSession(); //开启session
            self::readConf();   //读取配置
            self::transferred();  //进行转义处理
            self::getParams();  //获取地址栏的参数
            self::setConts();  //调用路径常量方法
            self::atuoLoad();  //调用自动加载方法
            self::dispath();  //分发功能到控制器中的方法
        }
        //开始sesion会话
        public static function startSession(){
            session_start();
        }
        //读取配置文件，并设为常量
        private static function readConf(){
            $conf=include_once './Frame/config.php';
            define('CONF',$conf);//常量CONF，值是一个数组。
            // $GLOBALS['conf'] = $config;
        }
        //对HTTP请求变量进行转义处理   让网站中所有的添加、修改操作都能够使用这个转义操作，所以在初始化类中完成它
        private static function transferred(){
            //使用array_walk_recursive可以对数组中的每个单元进行处理：
            array_walk_recursive($_POST,function(&$s){   //数组是值传递，加一个引用符号&，将值传递变成引用传递
                $s=htmlspecialchars($s);   // htmlspecialchars函数对数组中的每个单元进行转义处理将：把预定义的字符 "<" （小于）和 ">" （大于）转换为 HTML 实体
            });
            array_walk_recursive($_GET,function(&$s){
                $s=htmlspecialchars($s);
            });
            array_walk_recursive($_REQUEST,function(&$s){
                $s=htmlspecialchars($s);
            });

        }
        //获取地址栏参数，并设为常量
        private static function getParams(){
            $m=$_GET['m']?? CONF['default_m'];  //表示前台后台
            $a=$_GET['a']?? CONF['default_a'];   //表示控制器类的方法
            $c=$_GET['c']?? CONF['default_c'];   //表示控制器类
            define('M',$m);
            define('A',$a);
            define('C',$c);
        }
        //定义路径常量
        private static function setConts(){
            // getcwd()获取当前工作目录： D:\wamp64\www\mvc\v5
            //str_replace把字符串  中的字符 "\" 替换为 "/"：
            define('ROOT',str_replace('\\','/',getcwd()).'/');
            define('APP_PATH',ROOT.'App/');  //项目目录
            define('FRAME_PATH',ROOT.'Frame/');  //框架目录
            define('CONTROLLER_PATH',APP_PATH.M.'/Controller/'); //所有控制器路径
            define('MODEL_PATH',APP_PATH.M.'/Model/');//所有的自定义模型类路径
            define('VIEW_PATH',APP_PATH.M.'/View/'); //所有的视图文件路径
            define('LIBS_PATH',CONTROLLER_PATH.'libs/');
        }
        //封装自动加载
        private static function atuoLoad(){
            spl_autoload_register(function($className){  //$className 命名空间的类，带有命名空间，需要先转换字符  所有命名的空间的名字要跟目录一样
               $fileName=ROOT.str_replace('\\','/',$className).'.class.php';
               if(file_exists($fileName)) include_once $fileName;
//                $classNames=substr(strrchr($className,'\\'),1);
                $fileName=LIBS_PATH.$className.'.class.php';
                if(file_exists($fileName)) include_once $fileName;
            });
        }
        //封装分发控制
        private static function disPath(){
            $c=C;
            $a=A;
            //组合一个带命名空间的类名    （实例化带有命名空间的的类时候，也要带命名空间）
            $Controller='App\\'.M.'\Controller\\'.$c;
            $obj=new $Controller;
            $obj->$a();//调用控制器类中的方法
        }
    }
?>