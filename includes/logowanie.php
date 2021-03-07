<?php

include('funkcje_dolacz.php');

if ( (!isset($_POST['nazwa_uz'])) || (!isset($_POST['haslo'])) ) {
  print 'Aby kontynuować, należy wprowadzić nazwę użytkownika i hasło';
  exit;
}

$nazwa_uz = $_POST['nazwa_uz'];
$haslo = $_POST['haslo'];

if (loguj($nazwa_uz, $haslo)) {
  $_SESSION['uwierz_uzyt'] = $nazwa_uz;
}
else {
  print 'Nieprawidłowe hasło';
  echo '<div id="logan">';
echo '<form method="POST" action="baza3.php">';
echo '<input type="hidden" name="react" value="add_user">';
echo '<div align="center"><center><p>Logowanie<br>';
echo 'User: <input type="text" name="nazwa_uz" size="20"><br>';
echo 'Pass: <input type="text" name="haslo" size="20"><br>';
echo '<input type="submit" value="Utwórz Użytkownika"></p></center></div>';
echo '</form>';
echo '</div>';
  exit;
}

?>

