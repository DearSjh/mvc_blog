<?php
    namespace App\Admin\Controller;
    use Frame\BaseController;
//登录口页面
    class Login extends BaseController{
        public function login(){
            $this->smarty->display('login.html');
        }
        public function LoginHandle(){
            //判断PSOT提交的验证码是否正确  strtolower 将所有的字符都转为小写
            if(strtolower($_SESSION['yzm'])!=strtolower($_POST['yzm'])){
                $this->jump(false,"","",'验证码错误');
                die();
            }
            //实例化admin类，判断用户名 密码
            $admin=new \App\Admin\Model\Admin();
            $res=$admin->check();
            if($res){
                $_SESSION['admin']=$res;
                $this->jump(true,"./index.php?m=Admin&c=Index&a=index","登录成功");
            }else{
                echo "<script> history.back();</script>";

            }
        }
        public function yzm(){
            \Frame\Verify::coed();   //调用verify类的coed方法，得到验证码图片
        }
        public function update(){
            include_once  VIEW_PATH.C."/login_update.html";
        }
        public function update2(){
            //判断PSOT提交的验证码是否正确  strtolower 将所有的字符都转为小写
            if(strtolower($_SESSION['yzm'])!=strtolower($_POST['yzm'])){
                $this->jump(false,"","",'验证码错误');
                die();
            }
            $user=$_POST['username'];
            $sql="select * from admin where username='$user'";
            $model=new \Frame\BaseModel();
            $result=$model->find($sql);
            if($result){  //判断返回的$result结果，如果有结果则判断密码是否正确，若无结果则flase，用户名错误
                $this->smarty->assign('user',$user);
                $this->smarty->display('login_update2.html');
            }else{
                echo "<script>alert('用户名错误'); history.back();</script>";
            }
        }
        public function update3(){
            if(($_POST['pwd'])!=($_POST['truepwd'])){
                echo "<script>alert('两次密码不一致');</script>";
                include_once  VIEW_PATH.C."/login_update2.html";
                die();
            }else{
               $_POST['pwd']=md5($_POST['pwd']);
               $post=$_POST;
                $sql="update admin set pwd=:pwd,truepwd=:truepwd where username=:username";
                $model=new \Frame\BaseModel();
                $date=$model->exec($sql,$post);
                $this->jump($date,"./index.php?m=Admin&c=Login&a=login","密码修改成功","密码修改失败");
            }
        }
        public function out(){
            session_destroy();
            $this->smarty->display('login.html');
        }
    }
?>