<!DOCTYPE html>
<html>
<body>

<h1>Enable Test</h1>

<?php
ini_set('display_errors',1);            //错误信息  
ini_set('display_startup_errors',1);    //php启动错误信息  
error_reporting(-1);                    //打印出所有的 错误信息  

// 获取时间戳
function microtime_float()
{
       list($usec, $sec) = explode(" ", microtime());
       return ((float)$usec + (float)$sec);
}
function microtime_format($tag, $time)
{
       list($usec, $sec) = explode(".", $time);
       $date = date($tag,$usec);
       return str_replace('x', $sec, $date);
}
$time = microtime_float();
$strtime = microtime_format('Ymd-His.x ', $time);

// 接收Post数据
$raw_post_data = file_get_contents('php://input');

// 输出数据
echo $strtime , '#post body:' , $raw_post_data , "\r\n";

// 记录信息
file_put_contents("./raw_post_data.log","$raw_post_data\r\n",FILE_APPEND);
?>


</body>
</html>
