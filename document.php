	<div id="kol_1">
   
				<div id="menu3" class="change_window">
	
	<p style=";top: -7px;left: 10px; font-size: 20px;">Strona główna </p>
	</div>

	</div>
	<div id="kol_2">
	<div id="glowny"  style="width: 775px;" >


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