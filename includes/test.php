<?php

$nazwa_uz = "Admin";
$haslo = "haslo";

  $_SESSION['uwierz_uzyt'] = $nazwa_uz;

//ustawienia dla przegl?darki ?eby nie cachowa?a wynik?w
include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();
$result = $baza->query('SELECT id,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6 FROM pola WHERE autor = \''.
         $_SESSION['uwierz_uzyt'].'\'  and kolumna3 = \''.$_REQUEST['tytul'].'\'');
mysql_query("SET NAMES latin2");
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
<title>Informatyk</title>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="pl" />
<meta name="Keywords" content="Moja pasja to Informatyka" />
<meta name="google-site-verification" content="PWEgtazysaP5odsaMLYgBHUptLLrPAN4Xhzar-B3o7g" />
<meta name="description" content="Wiek 27 lat Wojciech Matera -  Moja pasja to Informatyka!"> 
<meta name="Keywords" content="naprawa, wymiana, modernizacja, programowanie, oprogramowywanie,instalcja, serwis" />
<link rel="stylesheet" type="text/css" href="css/strona.css" />

<style type="text/CSS">
a:link  
{
           text-decoration: none;
}
a:hover  
{
           text-decoration: none;
}
a:active  
{
           text-decoration: none;
}
a:visited
{
           text-decoration: none;
}
</style>
</head>
<body>
<div id="container">
<div id="top">  

top
<div id="container-2">
</div>
	<div id="prawy_top"  style=" border: 2px  solid #e3e3e3;
				prawy_top
	</div>


		<div id="lewy_boczny">
		lewy boczny
		</div>
	  <div id="menu-4" class="clearfix">
	  menu-4
     </div> <!-- end of menu -->	
	top koniec
	</div>
		<div id="srodek">
	<	srodek
	
		<div id="glowny-4">
	
		glowny-4
	
	</div>
	<div id="prawy_top_2">

			prawy_top_2
	
	</div>
	<!--                            G??wny                                   --->