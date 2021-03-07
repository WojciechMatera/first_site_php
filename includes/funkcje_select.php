<?php

function zapytanie_select($nazwa, $zapytanie, $domyslny='')
{

  $lacz = lacz_bd();

  $wynik = $lacz->query($zapytanie);

  if (!$wynik)
    return(0);

  $select  = "<SELECT NAME=\"$nazwa\">";
  $select .= "<OPTION VALUE=\"\">-- Wybór --</OPTION>";

  for ($i=0; $i < $wynik->num_rows; $i++) {
    $wiersz = $wynik->fetch_row();    
    $opt_kod = $wiersz[0];
    $opt_opis = $wiersz[1];
    $select .= "<OPTION VALUE=\"$opt_kod\"";
    if ($opt_kod == $domyslny) {
      $select .= ' SELECTED';
    }
    $select .=  ">[$opt_kod] $opt_opis</OPTION>";
  }
  $select .= "</SELECT>\n";

  return($select);

}

