<?php
$ip = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="">
<title>PHP DoS, Coded by EXE</title>
</head>
<!-- PHP DOS, coded by EXE -->
<style type="text/css">
<!--
body {
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
font-style: normal;
line-height: normal;
color: #FFFFFF;
background-color: #000000;
}
-->
</style>
<!-- PHP DOS, coded by EXE -->
<body>
<center><br><br>
<br>
<b>你的 IP:</b> <font color="red"><?php echo $ip; ?></font> (请勿以你的ip作为攻击目标)<br>
<br>
<form name="input" action="function.php" method="post">
IP:
<input type="text" name="ip" size="15" maxlength="15" value = "0.0.0.0" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';">
    Time:
<input type="text" name="time" size="14" maxlength="20" value = "时间(单位秒)" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';">
    Port:
<input type="text" name="port" size="5" maxlength="5" value = "端口" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';">
<br><br>
<input type="submit" value=" 开始攻击---> ">
<br><br>
<center>
发起DOS攻击后，请等待浏览器加载
</center>
</form>
</center>
<!-- PHP DOS, coded by EXE -->
</body>
</html>
