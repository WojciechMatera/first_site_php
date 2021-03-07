<?php

$nazwa_uz = "Admin";
$haslo = "rybunial";

  $_SESSION['uwierz_uzyt'] = $nazwa_uz;

//ustawienia dla przegl?darki ?eby nie cachowa?a wynik?w
include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();
$tytul="strona_glowna";
$result = $baza->query('SELECT id,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6 FROM pola WHERE autor = \''.
         $_SESSION['uwierz_uzyt'].'\'  and kolumna3 = \''.$tytul.'\'');
mysql_query("SET NAMES latin2");
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>


  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="pl" />
<meta name="Keywords" content="Moja pasja to Informatyka" />
<meta name="google-site-verification" content="PWEgtazysaP5odsaMLYgBHUptLLrPAN4Xhzar-B3o7g" />

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
<div id="container" >
<div id="container-a">
<div id="logo_top"><a href="index.php"><img style="margin-top: 10px; margin-left: 15px; " src="images/logo_top.png" /></a></div>


	  <div id="menu-4" class="clearfix">
    	<span></span>
        <ul>
           <li class="current"><a href="index.php"><b>Strona główna</b></a></li>
            <li><a href="mojahistoria.php?tytul=moja_historia"><b>Moja Historia</b></a></li>
			<li><a href="porady.php?tytul=porady"><b>Porady</b></a></li>
         <!--   <li><a href="formularz.php"><b>Zgłoszenie pytania</b></a></li>
            <li><a href="kursy.php?tytul=kurs"><b>Kursy</b></a></li>  -->
      
        </ul>
	
    </div> <!-- end of menu -->	
<div id="liniak" style=""></div>
		<div id="reklama">
	
<marquee scrollamount="2" bgcolor=""><font size="6" color="blue" >Witamy  na stronie wmatera.pl !!!</font></marquee>

		</div>
				<div id="top">

		  <div id="kontakt" >
	
				<SCRIPT LANGUAGE='php'>
				echo 'Odwiedzin strony: ';
				$count_my_page = ("hitcounter.txt");
				$hits = file($count_my_page);
				$hits[0] ++;
				$fp = fopen($count_my_page, "w");
				fputs($fp, "$hits[0]");
				fclose($fp);
				echo $hits[0];
				</SCRIPT>

		</div><!-- kontakt -->
		<div id="licznik2">
				<h1 style=" margin-left: 520px; width:  200px; font-size: 28px; text-shadow: 2px 2px 2px black;"> Kontakt: <a href="mailto:wmaterapl@gmail.com">mail</a> </h1></div>
<!--	<div id="prawy_top"  style=" border: 2px  solid #e3e3e3; 		border-radius: 10px; padding: 10px; ">
		Chętnie dziele się swoją wiedzą, jeżli macie pytania w sprawie sprzętu, oprogramowania lub wogóle z zakresu 
	tematyki komputerowej proszę o kontakt, jeśli dam radę to pomogę. Zapraszam! 	</div>
	<div id="lewy_boczny"> 	MOJA PASJA TO INFORMATYKA<br/>
	<img src="images/webmaster1.jpg" alt="programista"   width="50%" height="20%" vspace="5px" hspace="5"/><br/>
	<img src="images/linux1.jpg" alt="linux" style="float: left"  width="50%" height="20%" vspace="5px" hspace="5"/>
	<img src="images/erro1r.png" alt="błąd" style="position: absolute; left: 250px; top: 35px; float: left"  width="50%" height="60%" vspace="5px" hspace="5"/>		</div>-->

	</div> <!-- top -->
		<div id="srodek" >
	

	
<!--	<div id="glowny-4">	
	#include stdio.h	// -------------------- załaduj stdio.h<br/>
	#include conio.h	// -------------------- załaduj conio.h<br/>
	main() 	{ // główna część programu <br/>
	printf ("!@#$%^&*() ");		// wyświetl znaki <br/>
	return 0;	// return 0<br/>
	}		// koniec programu <br/>
	</div>
	<div id="prawy_top_2">
	<img src="images/kompiler.jpg" alt="image" style="float: left" width="100%" height="50%" vspace="5px" hspace="5"/>

	</div>-->
	<!--                            G??wny                                   --->