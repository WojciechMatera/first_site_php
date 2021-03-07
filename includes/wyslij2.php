<?php
 require_once "Mail.php";
 
 $from = 'Automat <'.$_POST['adres_mail'].'>';
 $to = 'Ja < wmaterapl@gmail.com >';
 $subject = " ".$_POST['imie_nazwisko']." ";
 $body = "

Imię i Nazwisko:".$_POST['imie_nazwisko']." 

 
---------------------------------------------------------------------------------
 
".$_POST['komentarz']."";
 $content_type = 'text/html; charset=UTF-8\n';
 if ($email != '') {  $reply_to = ''.$email."\r\n"; } else { $reply_to = $from; }
 
 $host = "smtp.gmail.com";
 $port = "465";
 $username = "wmaterapl@gmail.com";
 $password = "open2011";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject,
   'Content-type' => $content,
   'Reply-to' => $reply_to);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'port' => $port,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo('<META HTTP-EQUIV="Refresh" CONTENT="x;URL=../final.php">');
  }
?>