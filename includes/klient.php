<?php
include_once('funkcje_dolacz.php');
include_once('naglowek_klient.php');


$nazwa_uz = $_POST['nazwa_uz'];
$haslo = $_POST['haslo'];
if (loguj($nazwa_uz, $haslo)) {
  $_SESSION['uwierz_uzyt'] = $nazwa_uz;}
  
if (isset($_SESSION['uwierz_uzyt'] )) {


//ustawienia dla przegladarki zeby nie cachowala wynikow
include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();
$result = $baza->query('SELECT id,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6,kolumna7,kolumna8 FROM pola WHERE autor = \''.
         $_SESSION['uwierz_uzyt'].'\' ');
		 mysql_query("SET NAMES 'utf8'");
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);
	
		     while ($row = mysql_fetch_array($result)) {
			 $naglowek = $row['kolumna3'];
			 $naglowek_2 = $row['kolumna4'];
			 $naglowek_3 = $row['kolumna5'];
			 $naglowek_4 = $row['kolumna6'];
			 $naglowek_5 = $row['kolumna7'];
			 $naglowek_6 = $row['kolumna8'];
			 
			 			 $tekst_artykulu = $row['kolumna2'];
			$id = $row['id'];
			 }
echo '<div id="glowny" style=" " >
  
	<div id="glowny_a" class=" okno " style="font-size: 20px; text-align: center;"> Twoje Dane<br/>'.$_SESSION['uwierz_uzyt'].'
	<div id="wylog" style="padding-top: 50px; "><a href="wylog_klient.php">Wyloguj</a></div>
	</div>
	<div id="glowny_b" class=" okno" style="padding-left: 5px;">';
	
 echo '

		<div id="nowy" style="position: relative; left: 40px; font-size: 16px;">
		<h2> Dodawanie Artykułu </h2>
		<form action="dodaj_klient.php?id='.$id.'" method="post" enctype="multipart/form-data">
		

			Nazwa firmy <br/>
		<input type=text size="80" name="naglowek"
              value="'.$naglowek.'"><br/>	Mail<br/>
		<input type=text size="80" name="mail"
              value="'.$naglowek_2.'"><br/>	Miasto<br/>
		<input type=text size="80" name="miasto"
              value="'.$naglowek_3.'"><br/> Ulica<br/>
		<input type=text size="80" name="ulica"
              value="'.$naglowek_4.'"><br/> Telefon<br/>
		<input type=text size="80" name="telefon"
              value="'.$naglowek_5.'"><br/> Pozycja<br/>
		<input type=text size="80" name="pozycja"
              value="'.$naglowek_6.'"><br/>	Informacja<br/>
			  <textarea cols="65" rows="20" name="tekst_artykulu"
           wrap="virtual">'.$tekst_artykulu.'</textarea><br/>
		   
     <input type="submit" value="Dodaj/Aktualizuj">
	 </form>
		</div>
';
echo'</div></div>';

}
include_once('stopka2.php');

?>

 
<!--	<div id="glowny" style="" >
  
	<div id="glowny_a" class=" okno"> aaaaa</div>
	<div id="glowny_b" class=" okno"> bbbbb </div>-->