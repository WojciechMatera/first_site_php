﻿<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
if(strstr($useragent, '98')) { $system = 'Windows 98'; $i = '1'; }
if(strstr($useragent, 'NT 5.0')) { $system = 'Windows 2000'; $i = '1'; }
if(strstr($useragent, 'NT 5.1')) { $system = 'Windows XP'; $i = '1'; }
if(strstr($useragent, 'NT 6.0')) { $system = 'Windows Vista'; $i = '1'; }
if(strstr($useragent, 'Linux')) { $system = 'GNU/Linux'; $i = '1'; }
if(strstr($useragent, 'Mac')) { $system = 'MacOSX'; $i = '1'; }
if(!$i == '1') { $system = 'Inny'; $i = '1'; }
if(strstr($useragent, 'MSIE')) { $browser = 'Internet Explorer'; $a = '1'; }
if(strstr($useragent, 'WebKit')) { $browser = 'Safari/Chrome'; $a = '1'; }
if(strstr($useragent, 'Firefox')) { $browser = 'Firefox'; $a = '1'; }
if(strstr($useragent, 'Opera')) { $browser = 'Opera'; $a = '1'; }
if(!$a == '1') { $browser = 'Inna'; $a = '1'; }
$ip = $_SERVER['REMOTE_ADDR'];
echo("Twoje IP to: $ip, system to: $system, a przeglądarka to: $browser.");
?>