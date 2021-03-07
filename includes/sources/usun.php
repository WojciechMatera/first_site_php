<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//tu by siê te¿ przyda³ warunek if ¿eby sprawidziæ czy u¿ytkownik ma prawo kasowaæ z bazy.
include '../classes/dbconn.class.php';
$baza=dbconn::instance();
$zapytanie='DELETE FROM pola_tab WHERE id="'.$baza->escape($_POST['id']).'"';
if($baza->query($zapytanie)){
    echo '1';
}else{
    echo '0';
}

?>
