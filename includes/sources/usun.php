<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//tu by si� te� przyda� warunek if �eby sprawidzi� czy u�ytkownik ma prawo kasowa� z bazy.
include '../classes/dbconn.class.php';
$baza=dbconn::instance();
$zapytanie='DELETE FROM pola_tab WHERE id="'.$baza->escape($_POST['id']).'"';
if($baza->query($zapytanie)){
    echo '1';
}else{
    echo '0';
}

?>
