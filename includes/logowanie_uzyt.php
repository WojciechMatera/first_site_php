<?php
    include_once('funkcje_bazy.php');
    include_once('naglowek.php');

echo '<p ><font size="10">Tworzenie Statystyki </font><br/><br/>
		 1. Utwórz nazwy kolumn </p>';

echo '<div id="wlasny" >';
echo '<form method="POST" action="dodaj_artykul2.php">';

echo '<div  ><p><br/>';

echo '	  <input type="hidden" name="react" value="add_user">';
echo ' 1: <input type="text" name="kolumna_1" size="20"><br>';
echo ' 2: <input type="text" name="kolumna_2" size="20"><br>';
echo ' 3: <input type="text" name="kolumna_3" size="20"><br>';
echo ' 4: <input type="text" name="kolumna_4" size="20"><br>';
echo ' 5: <input type="text" name="kolumna_5" size="20"><br>';
echo ' 6: <input type="text" name="kolumna_6" size="20"><br>';
echo ' 7: <input type="text" name="kolumna_7" size="20"><br>';
echo ' 8: <input type="text" name="kolumna_8" size="20"><br>';
echo ' 9: <input type="text" name="kolumna_9" size="20"><br>';
echo '10: <input type="text" name="kolumna_10" size="20"><br>';
echo '11: <input type="text" name="kolumna_11" size="20"><br>';
echo '12: <input type="text" name="kolumna_12" size="20"><br>';
echo '13: <input type="text" name="kolumna_13" size="20"><br>';
echo '14: <input type="text" name="kolumna_14" size="20"><br>';
echo '15: <input type="text" name="kolumna_15" size="20"><br>';

echo '<p style="position: relative; left: 100px;"><input type="submit" value="Utworz"></p></p></div>';
echo '</form>'; 

echo '</div>';



	

?>
