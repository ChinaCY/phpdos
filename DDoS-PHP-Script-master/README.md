# DDoS-PHP-Script
PHP脚本执行DDoS UDP洪水
# #使用
从web服务器(访问该页面):
“http://127.0.0.1/ddos.php?pass=apple&host=TARGET&port=PORT&time=SECONDS&packet=NUMBER&bytes=NUMBER”
从终端:
“php / ddos。。php主机=目标端口=端口时间=秒包=字节数=号
# #参数
< >之前帮助打印此帮助总结页面
主机需要指定IP或主机名
通过从网络服务器只需要如果使用
端口指定可选的如果不是一个随机端口将被选中
所需时间可选秒保持DDoS活着,如果不使用包
包可选数量的数据包发送到目标,如果时间不使用要求
字节可选包的大小发送,defualt:65000
可选的输出格式,格式(文本、json、xml),默认值:文本
输出可选的日志文件,将输出保存到文件中
详细的可选0:调试、1:信息,2:注意,3:警告,4:错误,默认值:信息
注意:如果指定时间和包,只有时间能被使用
< / >之前
# #要求
——PHP 5.4或更高版本
# #工作清单
——介绍文件的日志功能
# #学分
*(Andrea Draghetti)(https://twitter.com/AndreaDraghetti)是项目的创造者
特别感谢:
*(@TheZer0)(https://github.com/TheZ3ro)对编码的支持;
*(@Smaury)(https://github.com/smaury)对编码的支持;
*(@moty66)(https://github.com/moty66)支持的编码。
# #许可证
GNU通用公共授权版本2.0(GPLv2)