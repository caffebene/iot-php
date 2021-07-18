<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<title>Enable应用托管Demo</title>
<head> 
<body>
<h1 style="text-align:center;">欢迎使用物联使能应用托管Demo</h1>
<h2>前置步骤</h2>
<p>本示例将输出由物联网开发平台所转发的设备状态数据。请确认完成如下前置步骤：</p>
<p>步骤1：通过物联网开发平台的<a href="https://cloud.tencent.com/document/product/1081/34739">产品开发</a>功能完成产品的开发；</p>
<p>步骤2：通过物联网开发平台的<a href="https://cloud.tencent.com/document/product/1081/40292">数据开发</a>或<a href="https://cloud.tencent.com/document/product/1081/40298">数据同步</a>功能将产品状态同步至如下url：</p>
<script>
document.write(document.URL+"/post.php");
</script>
<p>步骤3：通过<a href="https://cloud.tencent.com/document/product/1081/34741">虚拟设备调试</a>功能或绑定真实设备完成设备数据上报。</p>
<p>完成上述步骤后，即可于下方查看由物联网开发平台所转发的设备状态数据。</p>
<h2>Post记录</h2>
<button onClick="document.location.reload()">刷新</button>
<?php
$file = fopen("raw_post_data.txt","r") or die("Unable to open file!");
// 输出单行直到 end-of-file
while(!feof($file)) {
    echo fgets($file) . "<br>";
  }
fclose($file);
?>
</body>
</html>
