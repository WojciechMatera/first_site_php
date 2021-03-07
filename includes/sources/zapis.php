<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//tutaj wypada³oby daæ ifa który sprawdza³by czy u¿ytkownik ma prawo do zapisu
// oraz zweryfikowaæ czy wszystkie pola istniej± ;)
include '../classes/dbconn.class.php';
$baza = dbconn::instance();

$zapytanie='UPDATE pola SET kolumna2="'.$baza->escape($_POST['imie']).'", kolumna3="'.$baza->escape($_POST['nazwisko']).'", kolumna4="'.$baza->escape($_POST['ulica']).'", kolumna5="'.$baza->escape($_POST['telefon']).'", kolumna6="'.$baza->escape($_POST['nrrej']).'" WHERE id='.$baza->escape($_POST['id']);
//echo $zapytanie;
if($baza->query($zapytanie)){
    echo '1';
}else{
    echo '0';
}
?>
