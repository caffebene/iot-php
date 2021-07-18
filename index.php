<!DOCTYPE html>
<html>
<body>

<h1>openlog</h1>

<?php
//echo file_get_contents("./raw_post_data.log");

$file = fopen("/log/raw_post_data.log","w");
echo fwrite($file,date("Y-m-d H:i:s"));
fclose($file);

?>

</body>
</html>
