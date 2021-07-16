<!DOCTYPE html>
<html>
<body>

<h1>openlog</h1>

<?php
$file = fopen("./raw_post_data.log","w");
echo fwrite($file,date("Y-m-d H:i:s"));
fclose($file);
?>

</body>
</html>
