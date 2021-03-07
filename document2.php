	<div id="kol_1">
   <div id="menu" class="clearfix change_window">
    
        <ul>
		
            <li class="current"><a href="index.php"><img src="images/wsk.png" width="30" height="30" /><b>	Strona główna</b></a></li>
            <li><a href="mojahistoria.php?tytul=moja_historia"><img src="images/moja.png" width="30" height="30" /><b>Moja Historia</b></a></li>
            <li><a href="formularz.php"><img src="images/pytanie.png" width="30" height="30" /><b>Zgłoszenie pytania</b></a></li>
            <li><a href="kursy.php?tytul=kurs"><img src="images/kursy.png" width="30" height="30" /><b>Kursy</b></a></li>  
			<li><a href="porady.php?tytul=tworzenie_stron"><img src="images/www.png" width="30" height="30" /><b>Tworzenie WWW</b></a></li>
        </ul>

    </div> <!-- end of menu -->  
				<div id="menu3" class="change_window">
	
	<p style=";top: -7px;left: 10px; font-size: 20px;">Strona główna </p>
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
	<div id="glowny" class="change_windows" style="width: 775px;" >


  <?php
		      mysql_query('SET NAMES utf8');
			$i = 1;
            while ($row = mysql_fetch_array($result)) {
	
				echo '<h2><p style="	padding: 20px; margin: 0px;">'.stripslashes($row['kolumna2']).'</p></h2><br/>';
				
			
       $i=++$i;
            }
            ?>

	
	</div>
	</div>