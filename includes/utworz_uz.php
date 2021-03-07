<?php
include_once('funkcje_bazy.php');
include_once('funkcje_dolacz.php');
      
	  $nazwa_uz = $_POST['nazwa_uz'];
	  $haslo = $_POST['haslo'];
	
	  $pelne_nazwisko = $_POST['pelne_nazwisko'];	  
	  echo dodaj_uzytkownika($nazwa_uz,$haslo,$pelne_nazwisko);
	  echo 'Uzytkownik dodany';
$nazwa_uz = $_POST['nazwa_uz'];
$haslo = $_POST['haslo'];

if (loguj($nazwa_uz, $haslo)) {
  $_SESSION['uwierz_uzyt'] = $nazwa_uz;

}  

  	  require('logowanie_uzyt.php');
?>