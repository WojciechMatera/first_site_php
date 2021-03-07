<?php
include_once('funkcje_dolacz.php');
include_once('naglowek.php');
		 
if (isset($_POST['nazwa_uz'])) {
$nazwa_uz = $_POST['nazwa_uz'];
$haslo = $_POST['haslo'];

if (loguj($nazwa_uz, $haslo)) {
  $_SESSION['uwierz_uzyt'] = $nazwa_uz;
}

}

//ustawienia dla przegladarki zeby nie cachowala wynikow
include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();

$result = $baza->query('SELECT id,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6 FROM pola WHERE autor = \''.
         $_SESSION['uwierz_uzyt'].'\' ');
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);

?>
 <style type="text/CSS">
	 obr {
		background: none;
		box-shadow: 0px 0px 0px 0px;

		float:none;
		margin: 0px;
		list-style:none;
		
		border: 0;
		border-radius: 0px;
}
</style>
		<div id="nowy" style="position: relative; left: 50px; ">
		
				  <?php
					if (isset($_SESSION['uwierz_uzyt'])) {
					echo '<h2> Lista Artykułów </h2>';
		      mysql_query('SET NAMES utf8');
			$i = 1;
			
            while ($row = mysql_fetch_array($result)) {
	
				echo '<div id="pasek" style="position: relative; width: 820px; color: black; background: white; border: 1px  solid black;border-radius: 3px; padding: 0px 4px 0px 4px; 
		margin: 0px;"><p style="position: relative; top: 5px;font-size: 20px; margin:0px; padding:0px; height:5px;width: 400px; ">
				'.$i.'. '.$row['kolumna3'].'</p><a class="obr" style="position: relative; left: 750px; text-decoration:none;"href="dodaj2.php?id='.$row['id'].'"><img  src="../images/dyskietka2.png" width="3%" height="2%"<b></b></a>
												<a class="obr" style="position: relative; left: 750px; text-decoration:none;"href="usun_artykul.php?id='.$row['id'].'"><img  src="../images/kosz.png" width="3%" height="2%"<b></b></a></div>';
				
			
       $i=++$i;
            }}
			else
			{
			echo 'Brak dostępu';
			}
            ?>
		
		
		
		</div>

<?php	
include_once('stopka.php');
?>