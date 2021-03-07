<?php
include_once('funkcje_dolacz.php');
include_once('naglowek.php');
if (isset($_POST['nazwa_uz'])) {
$nazwa_uz = $_POST['nazwa_uz'];
$haslo = $_POST['haslo'];

if (loguj($nazwa_uz, $haslo)) {
  $_SESSION['uwierz_uzyt'] = $nazwa_uz;
}



//ustawienia dla przegladarki zeby nie cachowala wynikow
include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();
$result = $baza->query('SELECT id,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6 FROM pola WHERE autor = \''.
         $_SESSION['uwierz_uzyt'].'\'  ');
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);


?>
 

		<div id="nowy" style="position: relative; left: 50px;">
		<h2> Dodawanie Artykułu </h2>
		<form action="dodaj_artykul.php" method="post" enctype="multipart/form-data">
		Nagłówek <br/>
		<input type=text size="80" name="naglowek"
              value="<?php echo $naglowek; ?>"><br/>

		Treść główna<br/>
			  <textarea cols="112" rows="20" name="tekst_artykulu"
           wrap="virtual"><?php echo $tekst_artykulu;?></textarea><br/>
		   
     <input type="submit" value="Dodaj artykuł">
	 </form>
		</div>
<?php	
}	
include_once('stopka.php');
?>