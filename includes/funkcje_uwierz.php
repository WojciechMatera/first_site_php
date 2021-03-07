<?php
function loguj($nazwa_uz, $haslo)
// sprawdzenie nazwy użytkownika i hasła w bazie danych
// jeżeli prawdziwe, zwraca true
// w przeciwnym wypadku zwraca false
{
  // łączenie z bazą danych
  $lacz = lacz_bd();
  if (!$lacz)
    return 0;

  $wynik = $lacz->query("select * from autorzy
                         where nazwa_uz='$nazwa_uz'
                         and haslo = sha1('$haslo')");
  if (!$wynik)
     return 0;
  
  if ($wynik->num_rows>0)
     return 1;
  else 
     return 0;
}

function sprawdz_uwierz_uzyt()
// sprawdzenie zalogowania i powiadomienie jeżeli nie
{
  global $_SESSION;
  if (isset($_SESSION['uwierz_uzyt']))
    return true;
  else
    return false;
}

function formularz_logowania()
{
  ?>
  <form action="logowanie.php" method="post">
  <table border="0">
  <tr>
    <td>Nazwa użytkownika</td>
    <td><input size="16" name="nazwa_uz"></td>
  </tr>
  <tr>
    <td>Hasło</td>
    <td><input size="16" type="password" name="haslo"></td>
  </tr>
  </table>
  <input type="submit" value="Logowanie">
  </form>
  <?php
}

function sprawdz_uprawnienia($nazwa_uz, $artykul)
// sprawdzenie, czy użytkownik ma prawo zmieniać wskazany artykuł
{
  // połączenie z bazą danych
  $lacz = lacz_bd();
  if (!$lacz)
    return 0;

  if(!$_SESSION['uwierz_uzyt'])
    return 0;

  $wynik = $lacz->query("select * from pola 
                         where autor = '{$_SESSION['uwierz_uzyt']}'  and
                               id = $artykul
                        ");
  if (!$wynik)
  {
    return 0;
  }
  if ($wynik->num_rows>0)
  {
    return 1;
  }
  else 
  {
    return 0;
  }
}

?>