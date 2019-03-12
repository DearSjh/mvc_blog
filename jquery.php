<?php
    $json=json_encode(['a','b']);
    //获取地址栏的callback，他就是JS端的函数名
    $fn=$_GET['callback'];
    echo "$fn($json);";
?>