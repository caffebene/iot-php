<!DOCTYPE html>
<html>
<body>

<h1>openlog</h1>

<?php
//echo file_get_contents("./raw_post_data.log");

$file = fopen("raw_post_data.log","r") or die("Unable to open file!");
// 输出单行直到 end-of-file
while(!feof($file)) {
    echo fgets($file) . "<br>";
  }
  fclose($file);

?>

</body>
</html>
