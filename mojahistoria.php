<?php
include_once('includes/naglowek2.php');

?>
	<div id="kol_1">
<div id="menu2">
   <div id="menu" class="clearfix change_window">
    
        <ul>
           <li ><a href="index.php"><b>Strona główna</b></a></li>
            <li class="current"><a href="mojahistoria.php?tytul=moja_historia"><b>Moja Historia</b></a></li>
            <li><a href="formularz.php"><b>Zgłoszenie pytania</b></a></li>
			<li><a href="kursy.php?tytul=kurs"><b>Kursy</b></a></li>   
   			<li><a href="porady.php?tytul=tworzenie_stron"><b>Tworzenie WWW</b></a></li>  
        </ul>

    </div> <!-- end of menu -->  
		</div>
			<div id="menu3" class="change_window">
	
	<p style="position: relative;top: -7px;left: 30px; font-size: 20px;">Moja Historia </p>
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
		  <div id="glowny" class="change_windows" style=" width: 775px;" >
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
			<style>
		
		
			</style>
	<?php
include_once('includes/stopka2.php');
?>