<?php
include_once('funkcje_dolacz.php');

if (isset($_POST['nazwa_uz'])) {
$nazwa_uz = $_POST['nazwa_uz'];
$haslo = $_POST['haslo'];

if (loguj($nazwa_uz, $haslo)) {
  $_SESSION['uwierz_uzyt'] = $nazwa_uz;
}


}
include_once('naglowek.php');
//ustawienia dla przegladarki zeby nie cachowala wynikow
		if (isset($_SESSION['uwierz_uzyt'])) {
include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();
$result = $baza->query('SELECT id,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6 FROM pola WHERE autor = \''.
         $_SESSION['uwierz_uzyt'].'\' and id = \''.$_REQUEST['id'].'\' ');
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);

	
		     while ($row = mysql_fetch_array($result)) {
			 $naglowek = $row['kolumna3'];
		
			 $tekst_artykulu = $row['kolumna2'];
		
			 }
 
echo '		<div id="nowy" style="position: relative; left: 50px;"> ';
echo '		<h2> Dodawanie Artykułów </h2>';
echo '		<form action="dodaj_artykul.php?id='.$_REQUEST['id'].'" method="post" enctype="multipart/form-data">';
echo '		Nagłówek <br/>';
echo '		<input type=text size="80" name="naglowek" value="'.$naglowek.'"><br/>';
echo '		Treść główna<br/>';
echo '			  <textarea cols="112" rows="20" name="tekst_artykulu"';
echo '           wrap="virtual">'.$tekst_artykulu.'</textarea><br/>';
echo '		   ';
echo '     <input type="submit" value="Dodaj/Aktualizuj">';
echo '	 </form>';
echo '</div>';
}
else
{
echo 'Brak dostępu';
}
include_once('stopka.php');
?>