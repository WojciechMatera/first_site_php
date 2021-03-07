
<?php

include_once('includes/naglowek2.php');
?>
<title>Informatyk - Formularz - Tutaj napisz co Ci leży z IT</title>
<meta name="description" content="Masz do mnie pytanie zadaj je w Formularz-u. Postaram się jak najszybciej odpowiedzieć."> 
	<div id="kol_1">
<div id="menu2">
   <div id="menu" class="clearfix change_window">
    	<span></span>
        <ul>
           <li ><a href="index.php"><b>Strona główna</b></a></li>
            <li ><a href="mojahistoria.php?tytul=moja_historia"><b>Moja Historia</b></a></li>
            <li class="current"><a href="formularz.php"><b>Zgłoszenie pytania</b></a></li>
			<li><a href="kursy.php?tytul=kurs"><b>Kursy</b></a></li> 
 			<li><a href="porady.php?tytul=tworzenie_stron"><b>Tworzenie WWW</b></a></li>     
        </ul>

    </div> <!-- end of menu --> 
		</div>
			<div id="menu3" class="change_window">
	
	<p style="position: relative;top: -7px;left: 30px; font-size: 20px;">Twoje Pytanie </p>
	</div>
	<div id="glowny-3" class="change_window">
				<p>	mov ax, 123H<br/>	push ax<br/>mov ah, 09<br/>int 21h<br/>pop ax<br/><br/><br/>
	</div>

 <div id="prawy_boczny" > </div>

	<div id="licznik"class="change_window" >
		<div id="autor">
		Autor:<br/> Wojciech Matera	
		</div>
		<img style=" left: 30px; top:0px; " src="images/dyskietka2.png" alt="image" style="float: left"  vspace="10px" hspace="20" width="100" height="100" />
	</div>

	</div>
	<div id="kol_2">	
	<div id="glowny" class="change_windows" style=" padding: 10px; ">
	<h2><p style="font-size: 30px; "> Twoje pytanie </p> </h2>
	<odstep></odstep>
  <form "method="post" action="includes/wyslij.php" ">
    <INPUT class="im_i_naz" TYPE="TEXT" NAME="imie_nazwisko" size=33 value="Imie i Nazwisko"><br>
    <INPUT class="mail"     TYPE="TEXT" NAME="adres_mail" size=33 value="adres e-mail"><br>
   <TEXTAREA class="tre_wiad" NAME="komentarz" rows=10 cols=90 value="" >Treść wiadomości</TEXTAREA><br>
    <input class="wys_wiad" type="submit" name="wyslij" value="Wyślij wiadomość">
  </form>
  <br/>
  <br/>
    <br/>
  <br/>
  </div>
  </div>
  <style>

  </style>
<?php

include_once('includes/stopka2.php');
?>