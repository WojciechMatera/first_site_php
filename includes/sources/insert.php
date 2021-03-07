<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//print_r($_POST);
include '../classes/dbconn.class.php';

$baza = dbconn::instance();
$autor = $_POST['uwierz_uzytk']; //tutaj autor, w bazie pole jest NOT NULL wiêc nie wiedzia³em co wpisaæ
$strona = 'strona13'; //jakas strona, w bazie pole jest NOT NULL wiêc nie wiedzia³em co wpisaæ

$zapytanie = 'INSERT INTO `wmaterap_wmatera_db`.`pola`
(`autor`,
`strona`,
`kolumna1`,
`kolumna2`,
`kolumna3`,
`kolumna4`,
`kolumna5`,
`kolumna6`,
`kolumna7`,
`kolumna8`,
`kolumna9`,
`kolumna10`,
`kolumna11`,
`kolumna12`,
`kolumna13`,
`kolumna14`,
`kolumna15`,
`utworzony`,
`zmodyfikowany`,
`opublikowany`)
VALUES
("'.$baza->escape($autor).'","'.$baza->escape($strona).'","'.(rand(1,100)).'","'.$baza->escape($_POST['imie']).'","'.$baza->escape($_POST['nazwisko']).'","'.$baza->escape($_POST['ulica']).'","'.$baza->escape($_POST['telefon']).'","'.$baza->escape($_POST['nrrej']).'",NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);';
//echo $zapytanie;
$result = $baza->insert($zapytanie);
if ($result != 0) {
    echo $result;
} else {
    echo '0';
}
?>
