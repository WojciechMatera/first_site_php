<?php
include_once('funkcje_dolacz.php');
if (isset($_POST['nazwa_uz'])) {
$nazwa_uz = $_POST['nazwa_uz'];
$haslo = $_POST['haslo'];

if (loguj($nazwa_uz, $haslo)) {
  $_SESSION['uwierz_uzyt'] = $nazwa_uz;
}


}
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 

include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();
 $result = $baza->query('SELECT id,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6 FROM pola WHERE autor = \''.
         $_SESSION['uwierz_uzyt'].'\' ');     
// $result = $baza->query('SELECT salesgroup, COUNT(*) AS 'count' FROM pola GROUP BY salesgroup WHERE autor = "Baza" ');
$dataArray=array();
  
//get data from database
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["kolumna4"];
      $count=$row["kolumna5"];
      //add to data areray
      $dataArray[$salesgroup]=$count;
  }
}
  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Twoja Statystyka");
$graph->setTitle("Twoja Statystyka");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>
