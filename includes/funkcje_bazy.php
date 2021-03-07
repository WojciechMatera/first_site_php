<?php

function lacz_bd()
{
   $wynik = new mysqli ('localhost', 'admin', 'rybunial', 'wmatera'); 
   if (!$wynik)
      return false;

   return $wynik;
}

function pobierz_rekord_autora($nazwa_uz)
{
  $lacz = lacz_bd();
  $sql = "select * from autorzy where nazwa_uz = '$nazwa_uz'";
  $wynik = $lacz->query($sql);
  return($wynik->fetch_assoc());
}

function pobierz_rekord_artykulu($artykul)
{
  $lacz = lacz_bd();
  $sql = "select * from artykuly where id = '$artykul'";
  $wynik = $lacz->query($sql);
  return($wynik->fetch_assoc());
}
function dodaj_uzytkownika($nazwa_uz,$haslo,$pelne_nazwisko)
{

	  $lacz = lacz_bd();
      $sql = "INSERT into autorzy VALUES ( ";
      $sql .= " '$nazwa_uz', sha1('$haslo'),'$pelne_nazwisko' )";
	  $wynik = $lacz->query($sql);
     return($wynik);
}
?>