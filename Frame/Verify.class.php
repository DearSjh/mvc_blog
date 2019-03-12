<?php
    namespace Frame;
 //验证码类
    class Verify{
        public static function coed(){
            //①、设置header
            header('content-type:image/png');
            //②、创建画布
            $canvas=imagecreatetruecolor(200,70);
            $bgcolor=imagecolorallocate($canvas,120,120,120);
            imagefill($canvas,0,0,$bgcolor);   //imagefill — 区域填充 0,0表示图像上任意一点坐标
            $str='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTVUWXYZ';
            $str=str_shuffle($str);   //打乱字符串
            $str=substr($str,0,4);  //截取四个字符串
            $_SESSION['yzm']=$str; //将得到的四个字符保存到session，
            for($i=0;$i<4;$i++){
                $ttfcolor=imagecolorallocate($canvas,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));  //字符颜色
                imagettftext($canvas,50,mt_rand(-15,15),10+40*$i,60,$ttfcolor,FRAME_PATH.'Inkfree.ttf',$str[$i]);
            }
            //③、清空缓存
            ob_clean();
            //④、输出图片
            imagepng($canvas);
            //⑤、销毁资源
            imagedestroy($canvas);
        }
    }
?>