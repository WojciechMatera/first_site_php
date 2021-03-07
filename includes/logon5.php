<?php
include_once('funkcje_dolacz.php');
include_once('funkcje_bazy.php');
include_once('naglowek.php');
if (!isset($_SESSION['uwierz_uzyt'])) {
echo '<div id="logan" style="position:relative; top: 10px;">';
echo '<p\>Aby kontynuować, należy wprowadzić nazwę użytkownika i hasło</p>';
echo '<form method="POST" action="lista2.php">';
echo '<input type="hidden" name="react" value="add_user">';
echo '<div align="center"><center><p>Logowanie<br>';
echo 'User: <input type="text" name="nazwa_uz" size="20"><br>';
echo 'Pass: <input type="text" name="haslo" size="20"><br>';
echo 'Name: <input type="text" name="pelne_nazwisko" size="20"><br>';

echo '<input type="submit" value="Loguj"></p></center></div>';
echo '</form>';
echo '</div>';
}
else
{
require('lista2.php');
}
include_once('stopka.php');

?>
<meta charset="utf-8">

