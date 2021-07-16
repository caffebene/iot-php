<!DOCTYPE html>
<html>
<body>

<h1>openlog</h1>

<?php
$file = fopen("./raw_post_data.log","w");
echo fwrite($file);
fclose($file);
?>

</body>
</html>
