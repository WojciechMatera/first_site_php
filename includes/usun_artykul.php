<?php

// usun_artykul.php 

include_once('funkcje_dolacz.php');
include_once('naglowek.php');
$lacz = lacz_bd();

$id = $_REQUEST['id'];
if (sprawdz_uprawnienia($_SESSION['uwierz_uzyt'], $id))
{
  $sql = "delete from pola where id = $id";
  $wynik = $lacz->query($sql);
}
require('lista.php');
?>

