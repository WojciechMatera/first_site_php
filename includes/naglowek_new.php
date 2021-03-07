<?php

$nazwa_uz = "Admin";
$haslo = "rybunial";

  $_SESSION['uwierz_uzyt'] = $nazwa_uz;

//ustawienia dla przegl?darki ?eby nie cachowa?a wynik?w
include('classes/dbconn.class.php');
include_once('funkcje_bazy.php');
$baza = dbconn::instance();
$tytul="strona_glowna";
$useragent = $_SERVER['HTTP_USER_AGENT'];
if(strstr($useragent, '98')) { $system = 'Windows 98'; $i = '1'; }
if(strstr($useragent, 'NT 5.0')) { $system = 'Windows 2000'; $i = '1'; }
if(strstr($useragent, 'NT 5.1')) { $system = 'Windows XP'; $i = '1'; }
if(strstr($useragent, 'NT 6.0')) { $system = 'Windows Vista'; $i = '1'; }
if(strstr($useragent, 'Linux')) { $system = 'GNU/Linux'; $i = '1'; }
if(strstr($useragent, 'Mac')) { $system = 'MacOSX'; $i = '1'; }
if(!$i == '1') { $system = 'Inny'; $i = '1'; }
if(strstr($useragent, 'MSIE')) { $browser = 'Internet Explorer'; $a = '1'; }
if(strstr($useragent, 'WebKit')) { $browser = 'Safari/Chrome'; $a = '1'; }
if(strstr($useragent, 'Firefox')) { $browser = 'Firefox'; $a = '1'; }
if(strstr($useragent, 'Opera')) { $browser = 'Opera'; $a = '1'; }
if(!$a == '1') { $browser = 'Inna'; $a = '1'; }
$ip = $_SERVER['REMOTE_ADDR'];
$data =  date("Y-m-d H:i:s");
$result = $baza->query('INSERT INTO `statystyka` (`ip`, `system`, `browser`, `data`) VALUES

(' . "'" . $ip . "', '" . $system . "', '" . $browser . "', '" . $data. "' )" ) or die( mysql_error() );

mysql_query("SET NAMES latin2");
$result = $baza->query('SELECT id,kolumna2,kolumna3,kolumna4,kolumna5,kolumna6 FROM pola WHERE autor = \''.
         $_SESSION['uwierz_uzyt'].'\'  and kolumna3 = \''.$tytul.'\'');
mysql_query("SET NAMES latin2");
//$sql = 'SELECT * FROM STATYSTYKI  WHERE autor = \''.
//         $_SESSION['uwierz_uzyt'].'\' order by utworzony desc';
//  $wynik = $baza->query($r);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">


<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<!-- 
Kool Store Template
http://www.templatemo.com/preview/templatemo_428_kool_store
-->
    <meta charset="utf-8">
  <title>elp-rec - oferta</title>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="pl" />
    <meta name="description" content="komputery, laptopy, dell, ibm, lenovo, hp, toshiba ">
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
	<link rel="Shortcut icon" href="images/logo.jpg" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/templatemo-style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    
    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="top-header-left">
                             <a href="#">EL-REC</a>
                         <!--       <a href="#">Log In</a>-->
                        </div> <!-- /.top-header-left -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div> <!-- /.social-icons -->
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-8">
                        <div class="logo">
                          <a href="#"><img src="images/logo.jpg" width="50" /> -  SPRZEDAŻ SPRZĘTU ODNAWIANEGO</a>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-4">
                        <div class="main-menu">
                            <a href="#" class="toggle-menu">
                                <i class="fa fa-bars"></i>
                            </a>
                            <ul class="menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Catalogs</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Policies</a></li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="list-menu">
                            <ul>
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="site.php?tytul=oferta">OFERTA</a></li>
                                <li><a href="contact.html">KONTAKT</a></li>
                            </ul>
                        </div> <!-- /.list-menu -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                        <div class="notification" >
                            <span> <b style=" font-size: 18px; color: white;">Telefon: 606 739 489 &nbsp;&nbsp; email: elrec000@gmail.com</b></span>
                        </div>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->
    </header> <!-- /.site-header -->

	<!--                            G??wny                                   --->