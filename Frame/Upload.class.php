<?php
    namespace Frame;
//单文件上传类
    class Upload{
        private $uploads;//存放处理过的上传的文件的一维数组
        public $ext=['jpg','gif','png','jpeg']; //允许上传文件的后缀
        public $size=5;  //允许上传文件的最大值
        public $rootDir='./Public/Uploads'; // 默认的保存路径
        public $arr=array('image/jpeg','image/jpg','image/png','image/gif');//允许的上传类型
        //将上传的文件处理成一维数组
        public function __construct(){
           $this->uploads=array_values($_FILES)[0];   //$_FILES是一个二维数组,
        }
        //判断是否有错误
        private function checkError(){
            $err=[
                1 => '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值',
                2 => '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值',
                3 => '文件只有部分被上传',
                4 => '没有文件被上传',
                6 => '找不到临时文件夹',
                7 => '文件写入失败'
            ];
            if(array_key_exists($this->uploads['error'],$err)){
                die($err[$this->uploads['error']]);
            }
        }
        //判断类型
        private function checkType(){
            $finfo=finfo_open(FILEINFO_MIME);//获取资源
            $temp=$this->uploads['tmp_name'];//获取临时目录
            $type=finfo_file($finfo,$temp);//获得一个字符串  image/jpeg; charset=binary"
            $arr=explode(';',$type); //通过；号将字符串分成一个数组
           if(!in_array($arr[0],$this->arr)){
               die("当前文件类型不符合上传类型");
           }
        }
        //判断后缀
        private function checkExt(){
            //获取后缀   strrchr($aa,'.'),从最后一个 . 开始截取字符串，包括点 ;    ltrim($arr,'.') 去除字符串左侧的字符
            $ext=ltrim(strrchr($this->uploads['name'],'.'),'.');
            if(!in_array(strtolower($ext),$this->ext)){  //strtolower()将所的的字符转为小写
                die('不允许的后缀');
            }
            return $ext; //返回后缀
        }
        //判断大小
        private function checkSize(){
            if($this->size*1024*1024 < $this->uploads['size']){
                die("文件过大");
            }
        }
        //设置存放目录
        private function setDir(){
            $dir=rtrim($this->rootDir,'/').'/'.date('Ym/');  //./Public/Uploads/2018-11/
            if(!file_exists($dir)){  //判断文件或目录是否存在，
                mkdir($dir,0777,true);//创建目录
            }
            return $dir;
        }
        //设置唯一文件名
        private function setName(){
           return  uniqid().mt_rand(00,99);  //uniqid()生成一个唯一的ID
        }

        //完成上传
        public function up(){
            //判断是否有错误
            $this->checkError();
            //检测类型
            $this->checkType();
            //检测后缀
            $this->checkExt();
            //检测大小
            $this->checkSize();
            //移动文件
            if(is_uploaded_file($this->uploads['tmp_name'])){   //is_uploaded_file 判断这个文件是否是post方式上传
                //移动文件之前，获取上传目录、文件名、后缀
                $dir= $this->setDir();
                $name=$this->setName();
                $ext=$this->checkExt();
                $filename=$dir.$name.'.'.$ext;  //移动的新位置
               // move_uploaded_file() 函数将上传的文件移动到新位置
                if(move_uploaded_file($this->uploads['tmp_name'],$filename)){
                    return $filename;
                }else{
                    die('文件移动失败');
                }

            }else{
                die('文件上传失败');
            }
        }
    }
?>