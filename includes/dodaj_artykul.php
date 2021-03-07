<?php

// artykul_wyslij.php
// dodanie / modyfikacja rekordu artykułu

include_once('funkcje_dolacz.php');
include_once('funkcje_bazy.php');
include_once('naglowek.php');


$lacz = lacz_bd();

$pola1 = "artykuł";
  $pola3 = $_REQUEST['naglowek'];
  $pola2 =  $_POST['tekst_artykulu'];
  $id = $_REQUEST['id'];
  $czas= 0;
if (isset($_REQUEST['id']) && $_REQUEST['id']!='') 
{   // uaktualnienie
  $pola3 = $_REQUEST['naglowek'];

  $sql = "update pola
          set kolumna1 = '',
			  kolumna3 = '$pola3', 
			  kolumna2 = '$pola2',
              kolumna4 = '',
              kolumna5 = '',
              kolumna6 = '',
              kolumna7 = '',
              kolumna8 = '',
              kolumna9 = '',
              kolumna10 = '',
              kolumna11 = '',
              kolumna12 = '',
              kolumna13 = '',
              kolumna14 = '',
              kolumna15 = '',
			  autor ='".$_SESSION['uwierz_uzyt']."',
			  utworzony = 0,
			  zmodyfikowany = 0
          where id = '$id'";
}
else {         // nowy artykuł
  $sql = "insert into pola 
            (kolumna1,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6,
			 kolumna7,kolumna8,kolumna9,kolumna10,kolumna11,kolumna12,
			 kolumna13,kolumna14,kolumna15,strona, autor, utworzony, zmodyfikowany)
          values 
            ('$pola1', '$pola2','$pola3', '$pola4','$pola5', '$pola6','$pola7', '$pola8',
			 '$pola9', '$pola10','$pola11', '$pola12','$pola13','$pola14','$pola15','$strona', '"
             .$_SESSION['uwierz_uzyt']."', $czas, $czas)";
}

$wynik = $lacz->query($sql);

if (!$wynik)
{ 
  echo " Wystąpił błąd bazy danych podczas wykonywania <pre>$sql</pre>";
  echo mysqli_error();
  exit;
}
require('lista.php');
?>
