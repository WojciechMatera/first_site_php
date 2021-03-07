<?php

include_once('funkcje_bazy.php');
include_once('naglowek.php');

$lacz = lacz_bd();


$strony_sql = 'select * from strony order by kod';
$strony_wynik = $lacz->query($strony_sql);;
echo '<div id="logan" >';
echo '<form method="POST" action="utworz_uz.php">';
echo '<input type="hidden" name="react" value="add_user">';
echo '<div align="center"><center><p>Tworzenie użytkownika<br>';
echo 'User: <input type="text" name="nazwa_uz" size="20"><br>';
echo 'Pass: <input type="text" name="haslo" size="20"><br>';
echo 'Name: <input type="text" name="pelne_nazwisko" size="20"><br>';

echo '<input type="submit" value="Utwórz Użytkownika"></p></center></div>';
echo '</form>';
echo '</div>';
include_once('stopka.php');
?>

