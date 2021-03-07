<?php
include_once('includes/naglowek2.php');

?>

<div id="menu2">
   <div id="menu" class="clearfix">
    	<span></span>
        <ul>
           <li ><a href="index.php"><b>Strona główna</b></a></li>
            <li><a href="mojahistoria.php?tytul=moja_historia"><b>Moja Historia</b></a></li>
            <li><a href="formularz.php"><b>Zgłoszenie pytania</b></a></li>
			<li class="current" ><a href="kursy.php?tytul=kurs"><b>Kursy</b></a></li>
 
      
        </ul>

    </div> <!-- end of menu -->  
			<div id="menu3">
	
	<p style="position: relative;top: -7px;left: 30px; font-size: 20px;">Kursy - Turbo Pascal</p>
	</div>
		  <div id="glowny" style=" border: 2px  solid #e3e3e3;
		border-radius: 10px; padding: 10px; " >
	
			  <?php
		      mysql_query('SET NAMES utf8');
			$i = 1;
            while ($row = mysql_fetch_array($result)) {
	
				echo '<h2><p style="position: relative; top: -5px; left: 0px;">'.stripslashes($row['kolumna2']).'</p></h2><br/>';
				
			
       $i=++$i;
            }
            ?>


						
			</div>
	<?php
include_once('includes/stopka2.php');
?>