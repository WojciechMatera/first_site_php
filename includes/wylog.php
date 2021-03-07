<?php

include('funkcje_dolacz.php');

unset($_SESSION['uwierz_uzyt']);
unset($_SESSION['haslo']);
unset($_POST['nazwa_uz']);
unset($_POST['haslo']);
session_destroy();
include_once('logon2.php');



?>

