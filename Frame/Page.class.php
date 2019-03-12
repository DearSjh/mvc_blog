<?php
    namespace Frame;
// 分页类
    class Page{
        public $p=1;   //表示当前页码
        public $get;  //表示保存地址栏参数
        public $config=[    //分页配置项
            'prev'=>'上一页',
            'next'=>'下一页',
            'link'=>5,    //表示中间显示的页码个数
            'theme'=>['prev','middle','next','search']    //   “上一页 、中间的单个页、 下一页、 搜索框”
        ];
        public function __construct(){
            $this->p=$_GET['p'] ?? 1;
            $this->get=$_GET;
        }

        public function showPage($pageTotal){
            $p=$this->p;
            $params='?';  //表示地址栏原来就存在的其他参数，比如m=Admind等，默认是？ 然后foreach 不断去连接他
            $frome='';    //存储跳转页面表单的隐藏域
            foreach($this->get as $key=>$value){
                if($key!='p'){
                    $params.="$key=$value&";    //?m=Home&c=Article&a=cate_list&
                    $frome.="<input type='hidden' name='$key' value='$value' />";  //连接效果类似<input type='hidden' name='m' value='Admin' />
                }
            }
            //设置分页连接
            $page='';
     //上一页  $prev
            $prev='';
            if($p>1){
                $prev.='<a href="'.$params.'p='.($p-1).'">'.$this->config['prev'].'</a>';   //使用配置设置上一页
            }else{
                $prev.='<a href="javascrip:void(0);">'.$this->config['prev'].'</a>';   //javascrip:void(0); 表示连接不可点
            }
                                                        //设置中间的12345页面   一次显示5个页面，
                                                            /*
                                                        * 当前第1页   1  2  3  4  5
                                                        * 当前第2页   1  2  3  4  5
                                                        *
                                                        * 当前第3页   1  2  3  4  5
                                                        * 当前第4页   2  3  4  5  6
                                                        * ...
                                                        * 当前14页   12 13 14 15 16
                                                        *
                                                        * 当前15页   12 13 14 15 16
                                                        * 当前16页   12 13 14 15 16
                                                        */
    //中间页  $middle
            $middle='';
            if($p>ceil($this->config['link']/2)){
                $middle.='<a href="'.$params.'p=1">首页</a>';
                $middle.='...';
            }
            //有规律的当前页在中间
            $link=$this->config['link'];
            $s=$p-floor($link/2);    //floor向下取整
            $e=$s+$link-1;
            //前两页单独处理
            if($p<=floor($link/2)){
                $s=1;
                $e=$link;
            }
            //后两页单独处理
            if($p>$pageTotal-floor($link/2)){
                $s=$pageTotal-$link+1;
                $e=$pageTotal;
            }
            //如果总页数不足5页，那么有几页显示几页
            if($pageTotal<=$link){
                $s=1;
                $e=$pageTotal;
            }
            for($i=$s;$i<=$e;$i++){
                $middle.="<a href={$params}p=$i> $i </a>";
            }
            if($p<$pageTotal-floor($link/2)){
                $middle.='...';
                $middle.='<a href="'.$params.'p='.$pageTotal.'">尾页</a>';
            }
     //下一页  $next
            $next='';
            if($p<$pageTotal){
                $next.='<a href="'.$params.'p='.($p+1).'">'.$this->config['next'].' </a>';   //使用配置设置下一页
            }else{
                $next.='<a href="javascrip:void(0);">'.$this->config['next'].'</a>';   //javascrip:void(0); 表示连接不可点
            }


    //设置跳转框  $search
            $search= <<<aa
                <form style="display:inline">  <!--style="display:inline" 将表单设为行内元素-->
                $frome
                <input type='text' name='p' size=1 id="input"/>
                <input type='submit' value='GO' />
                </form>
aa;
            foreach($this->config['theme'] as $value){
              $page.= $$value;    //$value 为数组的值 比如：$value=prev      $$value=$prev
            }
            return $page;
        }
    }
?>