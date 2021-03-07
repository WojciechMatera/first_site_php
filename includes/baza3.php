<?php
include_once('funkcje_dolacz.php');
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
         $_SESSION['uwierz_uzyt'].'\' ');
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);
include_once('naglowek.php');
?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script>
            $(document).ready(function(){
                function createUUID() {
					//funkcja do generowania nowego id - chce moc dodac jednocze?nie kilka wierszy
                    // http://www.ietf.org/rfc/rfc4122.txt
                    var s = [];
                    var hexDigits = "0123456789abcdef";
                    for (var i = 0; i < 36; i++) {
                        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
                    }
                    s[14] = "4";  // bits 12-15 of the time_hi_and_version field to 0010
                    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1);  // bits 6-7 of the clock_seq_hi_and_reserved to 01
                    s[8] = s[13] = s[18] = s[23] = "-";

                    var uuid = s.join("");
                    return uuid;
                }

                $('input[type=submit].zapisz').live('click',function(){
                    //jak klikasz na zapisz
                    var ajdi=$(this).attr('id');
                    //zmienna ajdi trzyma id krotki w bazie
                    $(this).val('Wysy\u0142anie');
                    //jak klikniesz przycisk to jego wartosc zmienia sie na wysylanie
                    $(this).prop('disabled',true);
                    //i staje sie nieaktywny
                    $.ajax({
                        //robie zapytanie AJAX
                        url: 'sources/zapis.php',
                        //do pliku zapis.php
                        type:"POST",
                        //typu POST
                        data:{id:ajdi,imie:$('#imie'+ajdi).val(),nazwisko:$('#nazwisko'+ajdi).val(),ulica:$('#ulica'+ajdi).val(),telefon:$('#telefon'+ajdi).val(),nrrej:$('#nrrej'+ajdi).val()},
                        //tutaj po prostu przesylam wszystkie dane z biezacego wiersza
                        success: function(data) {
                            if(data=='1'){
                                //jezeli zapis sie udal to aktywuje przycisk i zmieniam jego tekst z powrotem na zapisz
                                $('#'+ajdi).prop('disabled',false);
                                $('#'+ajdi).val('Zapisz');    
                            }else{
                                // a jesli sie nie udalo to zmieniam go na czerwony przycisk z tekstem error
                                $('#'+ajdi).prop('disabled',false);
                                $('#'+ajdi).css({'background-color':'red','color':'black'});
                                $('#'+ajdi).val('Error!');
                            }
                            
                        },
                        error:function(){
                            $('#'+ajdi).css({'background-color':'red','color':'black'});
                            $('#'+ajdi).val('Error!');
                        }
                    });
                });
                $('input[type=submit].del').live('click',function(){
                    //analogicznie to samo co wyzej - od usuwania wystarczy znajomo?c tylko id wiec przesylam tylko to pole
                    var ajdi=$(this).attr('id');
                    ajdi2=$.trim(ajdi.substr(3,6));
                    $.ajax({
                        url: 'sources/usun.php',
                        //do pliku usun.php
                        type:"POST",
                        data:{id:ajdi2},
                        //id wiersza wystarcza do usuniecia
                        success: function(data) {
                            if(data=='1'){
                                $('#'+ajdi2).parent().parent('tr').slideUp('slow');
                                //jak usuwanie w bazie sie powiodlo to zwin wiersz
                            }
                        }
                    });
                })
                $('#saveall').click(function(){
                    //jezeli chce zapisac wszystki wiersze to programowo (programatycznie) klikam wszystkie przyciski zapisz
                    $('input[type=submit].zapisz').each(function(){
                        $(this).trigger('click');
                    });
                    //dla nowych wierszy takze
                    $('input[type=submit].newsave').each(function(){
                        $(this).trigger('click');
                    });
                });
                	
                $('#newrow').click(function(){
                    //przycisk do wstawiania nowego wiersza
                    var uuid=createUUID();
				
                    //tworzy nowe ID, czyli mozna dodac jednoczesnie kilka wierszy
                    $('table.glowna tr:last').after('<tr><td>->.<input type="text" id="'+uuid+'imie"  size="50"/></td><td><input type="text" id="'+uuid+'nazwisko"  size="50"/></td><td><input type="text" id="'+uuid+'ulica"  size="1"/></td><td><input type="text" id="'+uuid+'telefon"size="1"/></td><td><input type="text" id="'+uuid+'nrrej"size="1"/></td><td><input type="submit" value="Zapisz" id="'+uuid+'" class="newsave"/></td><tr>');
                 //   $('table.glowna tr:last').after('<tr><td><input type="text" id="'+uuid+'imie" value="'+ajdi+'"/></td><td><input type="text" //	id="'+uuid+'imie"/></td><td><input type="text" id="'+uuid+'nazwisko"/></td><td><input type="text" //id="'+uuid+'ulica"/></td><td><input type="text" id="'+uuid+'telefon"/></td><td><input type="text" //id="'+uuid+'nrrej"/></td><td><input type="submit" value="Zapisz" id="'+uuid+'" class="newsave"/></td><tr>');
                    //po ostatnim wierszu w tabeli wstawia nowy wiersz z elementami z nowym id
                });
                $('input[type=submit].newsave').live('click',function(){
                    var ajdi=$(this).attr('id');
                    $.ajax({
                        url: 'sources/insert.php',
                        //do pliku insert.php
                        type:"POST",
                        //typ zmiennej POST
                        data:{uwierz_uzytk:"<?php echo $_SESSION['uwierz_uzyt']; ?>",imie:$('#'+ajdi+'imie').val(),nazwisko:$('#'+ajdi+'nazwisko').val(),ulica:$('#'+ajdi+'ulica').val(),telefon:$('#'+ajdi+'telefon').val(),nrrej:$('#'+ajdi+'nrrej').val()},
                        //data - dane ktore przekazuje, czyli wszystkie inputy z losowym id
                        success:function(data){
                            if(data==1){
                                //jezeli zapis sie powiodl
                        //        $('#'+ajdi).attr('disabled',true);
                                //przycisk zapisz staje sie nieaktywny
                          //      $('#'+ajdi).val('Zapisano');
						         //przycisk zapisz zmienia tekst na zapisano
                            }else{
                                alert('B\u0142ad zapisu');
                            }
                        },
                        error:function(){
                            alert('B\u0142ad polaczenia')
                        }
                    });
                });
            });
        </script>
 
		
		<div id="nowy" >
        <table class="glowna">
            <thead>
                <tr>
           
				 <th> A </th>
				 <th> B </th>
				 <th> C </th>
				 <th> D </th>
				 <th> E </th>
			
                </tr>
            </thead>
		
            <?php
			$i = 1;
            while ($row = mysql_fetch_array($result)) {
         
				echo '<tr>';
             /*   echo '<td><input type="text" value="' . $row['id'] . '"/></td>';*/
                echo '<td><font size="3">'.$i.'.</font> <input type="text" id="imie' . $row['id'] . '" value="' . $row['kolumna2'] . '" size="50"/></td>';
                echo '<td><input type="text" id="nazwisko' . $row['id'] . '" value="' . $row['kolumna3'] . '" size="50"/></td>';
                echo '<td><input type="text" id="ulica' . $row['id'] . '" value="' . $row['kolumna4'] . '"size="1"/></td>';
                echo '<td><input type="text" id="telefon' . $row['id'] . '" value="' . $row['kolumna5'] . '"size="1"/></td>';
                echo '<td><input type="text" id="nrrej' . $row['id'] . '" value="' . $row['kolumna6'] . '"size="1"/></td>';
                echo '<td><input type="submit" class="zapisz" id="' . $row['id'] . '" value="Zapisz"/><input type="submit" class="del" id="del' . $row['id'] . '" value="Usun"/></td>';
                echo '</tr>';
	           $i=++$i;
            }
            ?>
        </table>
        <input type="submit" id="newrow" value="Dodaj nowy wiersz"/>
        <input type="submit" id="saveall" value="Zapisz wszystko"/>
		</div>
		<?php
		}
		else
		{
		echo 'Brak dostêpu.';
		
		}
		?>