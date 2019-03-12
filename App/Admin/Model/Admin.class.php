<?php
    namespace App\Admin\Model;
    use Frame\BaseModel;
//判断用户名 密码
    class Admin extends BaseModel {
        public function check(){
            $user=$_POST['user'];
            $pwd=md5($_POST['pwd']);
            $sql="select * from admin where username='$user'";
            $result=$this->find($sql);
            if($result){  //判断返回的$result结果，如果有结果则判断密码是否正确，若无结果则flase，用户名错误
                if($result['pwd']==$pwd){
                    return $result;
                }else{
                    echo "<script>alert('密码错误');</script>";
                }
            }else{
                echo "<script>alert('用户名错误');</script>";
            }
        }
    }
?>