<?php
 require_once "Mail.php";
 
 $from = $_GET['adres_mail'];
 $to = 'biuro@wmatera.pl';
 $subject = " ".$_GET['imie_nazwisko']." ".$_GET['adres_mail']." ";
 $body = "

Imię i Nazwisko:".$_GET['imie_nazwisko']." ".$_GET['adres_mail']." 

 
---------------------------------------------------------------------------------
 
".$_GET['komentarz']."";
 $content_type = 'text/html; charset=UTF-8\n';
 
  // $from = $_POST['adres_mail']; // sender
 //   $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
 
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("biuro@wmatera.pl",$subject,$body,"From: $from\n");
    echo "Dziękujemy za skorzystanie z formularza<br/>";

 /*
 
 
 
 if ($email != '') {  $reply_to = ''.$email."\r\n"; } else { $reply_to = $from; }
 
 $host = "n23.netmark.pl";
 $port = "465";
 $username = "biuro@wmatera.pl";
 $password = "wm00--00";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject,
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
  }*/
?>