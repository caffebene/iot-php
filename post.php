<!DOCTYPE html>
<html>
<body>

<h1>接收Post数据</h1>

<?php
// 接收Post数据
$raw_post_data = file_get_contents('php://input');
// 输出数据
echo $strtime , '#post body:' , $raw_post_data , "\r\n";
// 记录信息
file_put_contents("raw_post_data.txt", "$strtime date("Y-m-d H:i:s"): $raw_post_data\r\n", FILE_APPEND | LOCK_EX);
?>


</body>
</html>
