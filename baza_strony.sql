-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: sql3.netmark.pl:3306
-- Czas wygenerowania: 18 Lut 2018, 21:07
-- Wersja serwera: 5.0.77
-- Wersja PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `wmaterap_wmatera_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE IF NOT EXISTS `autorzy` (
  `nazwa_uz` varchar(16) NOT NULL,
  `haslo` varchar(40) NOT NULL,
  `pelne_nazwisko` text,
  PRIMARY KEY  (`nazwa_uz`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`nazwa_uz`, `haslo`, `pelne_nazwisko`) VALUES
('', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pola`
--

CREATE TABLE IF NOT EXISTS `pola` (
  `id` int(11) NOT NULL auto_increment,
  `autor` varchar(16) NOT NULL,
  `strona` varchar(16) NOT NULL,
  `kolumna1` text,
  `kolumna2` text,
  `kolumna3` text,
  `kolumna4` text,
  `kolumna5` text,
  `kolumna6` text,
  `kolumna7` text,
  `kolumna8` text,
  `kolumna9` text,
  `kolumna10` text,
  `kolumna11` text,
  `kolumna12` text,
  `kolumna13` text,
  `kolumna14` text,
  `kolumna15` text,
  `utworzony` int(11) default NULL,
  `zmodyfikowany` int(11) default NULL,
  `opublikowany` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=70 ;

--
-- Zrzut danych tabeli `pola`
--

INSERT INTO `pola` (`id`, `autor`, `strona`, `kolumna1`, `kolumna2`, `kolumna3`, `kolumna4`, `kolumna5`, `kolumna6`, `kolumna7`, `kolumna8`, `kolumna9`, `kolumna10`, `kolumna11`, `kolumna12`, `kolumna13`, `kolumna14`, `kolumna15`, `utworzony`, `zmodyfikowany`, `opublikowany`) VALUES
(8, 'Admin', 'strona13', '', '<title>Informatyk/Historia - Moja Historia - Kilka sĹĂłw o moim Ĺźyciu :) </title>\r\n<meta name="description" content="Moja pasja to! - WiÄc Moja Historia !!!  - w kilku sĹowach przedstawiam swojÄ historiÄ, mĂłj punkt widzenia na IT"> \r\nC:\\\\> - proste co nie ....................<br />\r\n<br/>\r\nDawno, dawno temu w odlegĹej wiosce siedziaĹ sobie jaĹ i myĹlaĹ jak zrobiÄ coĹ z niczego<br />\r\nwziÄĹ ksiÄĹźkÄ ABC pascal  i zaczÄĹ psuc komp. sasiada. Wtedy doszedĹ do wniosku Ĺźe to co psuje tak naprawdÄ jest poczÄtkiem wspaniaĹej przygody, ktĂłra dopiero miaĹa siÄ zaczÄÄ.<br />\r\n<br/>\r\nDĹugo siÄ zastanawiaĹem jak zaczÄÄ pisaÄ, a jest co opowiadaÄ przeszĹo to 20 lat ( dĹugo )<br />\r\n<br/>\r\nKomputer metalowa skrzynka z przyciskami i rĂłĹźnym pierdoĹami w Ĺrodku, co tak naprawdÄ nie wiadomo o co chodzi ale obraz siÄ wyĹwietla.<br />\r\nSystem - zbiĂłr komend i gÄszcz okienek nie wiadomo po co i dlaczego<br />\r\nMyszka - bez kota.<br />\r\n+ gÄszcz kabli i rĂłĹźnych przeĹÄcznikĂłw, lampek, skzynek z doĹÄczonym przewodami same piedoĹy,<br />\r\n<br/>\r\nZaczynaĹem tak naprawdÄ od comodore i zx spectrum, pamiÄtacie te cudowne gry<br />\r\n<br/>\r\n A tak naprawdÄ cofnijmy zegarki o 20 lat wstecz, pamiÄtne czasy 486 i Pentium II ile to nocy siÄ spÄdziĹo przy grach takich jak Duke Nukem 3d i Warcraft II.<br />\r\n<br/>\r\n286 - Pierwszy mĂłj komputer, duĹźy monitor duĹźa skrzynia a monitor z dwoma kolorami ĹźĂłĹtym i czarnym,<br />\r\nkolorowy byĹ pĂłĹşniej duĹźo pĂłĹźniej, klawiatura duĹźa, gruba z wysokimi klawiszami, myszka kanciata,<br />\r\nkupa kabli, a i gĹoĹny dysk twardy.<br />\r\n<br/>\r\nPamiÄtacie prince of persja, supaplex to moje pierwsze gry. Do tej ostatniej wracam co jakiĹ czas - przeszedĹem caĹoĹÄ bez jedej planszy. Wtedy to komputer naprawdÄ robiĹ wraĹźenie.<br />\r\n<br/>\r\nCo dalej ksiÄĹźki z serii dla opornych , poznawanie dziaĹanie dos-u , komend, synonimĂłw komputerowych <br />\r\n<br/>\r\n Przede wszystkim na komputerach krĂłlowaĹ DOS . \\"c:\\\\>\\" Dla niektĂłych do tej pory ten znak zachÄty przyprawia o koszmary nocne, dla mnie miĹe wspomnienia wtedy to byĹo trochÄ prostsze,ale od poczÄtku wedĹug mnie najlepszy system. Linia poleceĹ ,Norton Commander, Turbo Pascal to byĹ dla mnie Ĺwiat z bajki. ByĹa to takĹźe era horroru w postci dyskietek, nigdy nie zapomnÄ dĹşwiÄku gĹowic :). Ale to co byĹo piÄkne niosĹo takĹźe zagroĹźenie w postaci wirusĂłw,   i wtedy zaczÄĹo siÄ poznawanie systemu ile razy siÄ sformatowaĹo system aby dojĹÄ do tego Ĺźe w cale nie jest to jedyne rozwiÄzanie na te szkodniki.<br />\r\n<br/>\r\nPamiÄtam pierwszy program antywirusowy MksVir to byĹo coĹ ale pomagaĹo odzyskaÄ system,  kaĹźdy chyba miaĹ zapas dyskietek startowych, szkoda Ĺźe tak siÄ szybko psuĹy, wiele projektĂłw utraciĹem.<br />\r\nAle wtedy to byĹ jedyny zapis trwaĹy ktĂłry dawaĹ moĹźliwoĹÄ zachowania danych. A Ĺźe dane byĹy w kilobajtach wiÄc miejsca byĹo w brud. Czasy dystkietek byĹy niesamowite poniewaĹź dobrze to wspominam.<br />\r\n<br/>\r\nNiestety czasami postawienie systemu od nowa nie byĹo takie proste gdyĹź dyskietki potrafiĹy siÄ psuÄ, a akurat pod rÄkÄ nie byĹo zamiennika, nie byĹo to takie proste Ĺźe szedĹeĹ do kolegi kopiuj - wklej i system jest i wtedy rodzi siÄ pytanie a co moĹźna robiÄ gdy brak podstawowego narzÄdzia tzn. okienek,? trzeba sobie radziÄ w inny sposĂłb, jak? w postaci napisania wĹasnego programu albo systemu.<br />\r\n<br/>\r\nWtedy Projekt9000 mĂłgĹ byÄ tylko marzeniem, tryb tekstowy  pozwalaĹ na napisanie systemĂłw opartych na znakach ascii,o trybie graficznym mogĹem tylko pomarzyÄ, zbudowanie tak zaawansowanego systemu przerastaĹo mnie,c++, assembler wyĹźsza szkoĹa jazdy, a pascal pozwalaĹ na bardzo nie wiele ale co siÄ dziwiÄ zostaĹ stworzony do nauki programowania.  Historia jest taka Ĺźe to wszystko siÄ staĹo przez przypadek, poszedĹem do bibloteki i szukaĹem ksiÄĹźki do C++ ale o dziwo nie byĹo, wÄtpie Ĺźeby byĹy wypoĹźyczone, a akurat do tpascal nie , dziwne :( , nie :) widocznie tak miaĹo byÄ, moĹźe to i lepiej Ĺźe poznawaĹem jÄzyk programowania od podstaw a byĹ bardziej zaawansowany od basic.<br />\r\n<br/>\r\n<br />\r\nAle mĂłj upĂłr i zaangaĹźowanie sprawiĹy Ĺźe poĹwiÄciĹem temu jÄzykowi ponad 5 lat i sÄ to jedne z najpiÄkniejszych lat mojej przygody z programowaniem.<br />\r\n<br/>\r\ni zasada:<br />\r\n<br/>\r\nProgram test;<br />\r\n<br/>\r\nvar<br />\r\n   nazwa : string;<br />\r\n<br/>\r\nbegin<br />\r\nwriteln(\\'' Witaj Ĺwiecie  !!!\\'');<br />\r\nend.<br />\r\n<br/>\r\nPozostaĹmy jeszcze przy tym schemacie, aby zrozumieÄ ideologie jakÄ stosuje przy rozumieniu podejĹcia do komputerĂłw i programowania. StosujÄc kwestie warunku if then oraz repeat moĹźna nakazaÄ systemowi dokonywanie decyzji, dodajmy jeszcze funkcjÄ readln i moĹźemy przejÄc funkcjÄ nad komputerem.<br />\r\nA co powiecie nazwa : string[10]; Wprowadzanie konkretnych danych uĹatwia nawigacje.<br />\r\n<br/>\r\na co powiecie na ukĹad \\" a = b \\" . W sumie od tego tak naprawdÄ siÄ zaczeĹo, jedno rĂłwna siÄ drugie, czysta zasada dziaĹania komputera, moĹźe teĹź byÄ to przykĹad do zastanowienia siÄ jak stworzyÄ sztucznÄ inteligencje, nawet przy tworzeniu programĂłw wydajemy warunkĂłw<br />\r\n<br/>\r\nif ( a =\\"1\\") lub if ( nazwa = \\"nazwa\\" ).<br />\r\n<br/>\r\nNabraĹa to nowego znaczenia.<br />\r\n<br/>\r\nWrĂłÄmy do czasu jaki poĹwiÄciĹem na rozwaĹźanie powyĹźszych zaĹoĹźeĹ, okres trudny wiele nie przespanych nocy , wiele kartek zapisanych. PamiÄtam Ĺźe potrafiĹem odejĹÄ od komputera aby pomysĹy weszĹy mi do gĹowy inspiracje czerpaĹem ze wszystkiego co siÄ da, przyglÄdaĹem siÄ rĂłĹźnym systemom operacyjny programom, wiele mi pomogĹo uĹźywanie windows 3.11,podobaĹ mi siÄ ukĹad tego systemu, wyglÄd okien program zwijany do postaci ikony. A takĹźe wyglÄd przeglÄdarki, wszytsko tak naprawdÄ siÄ zaczeĹo od okĹadki pcworld ktĂłra miaĹa w tle wĹaĹnie przeglÄdarke.<br />\r\n<br/>\r\nInspirowaĹem siÄ teĹź animacjami, najwiÄcej napewno daĹy gry, na marginesie mam w gĹowie caĹy czas projekt menadĹźera nie waĹźne pod jaki system , wzorowaĹem siÄ na filmie the hackers, tak naprawdÄ film teĹź byĹ mojÄ siĹÄ napÄdowÄ w sumie caĹy czas jest, czerpie inspiracje ze wszystkiego, nawet nasz Ĺwiat podsuwa mi pomysĹy.<br />\r\n<br/>\r\n5 lat to 5x365 dni nieĹşle najlepsze pomysĹy przychodziĹy do gĹowy wtedy kiedy miaĹem trochÄ wolnego czasu. Tak na marginesie dzisiaj jest tyle moĹźliwoĹÄ uĹÄtwieĹ w postaci chociaĹź Eclipsce i innych IDE Ĺźe musiaĹy upĹynÄÄ lata abym mĂłgĹ siÄ odnaleĹşÄ w tym gÄszczu programĂłw i wybraÄ coĹ dla siebie.<br />\r\n<br/>\r\nJedno jest pewne czasy tamte nie powrĂłcÄ moĹźe to i dobrze Ĺźe technika idzie do przodu, piszÄc swĂłj projekt chce wypeĹniÄ pustkÄ tego okresu. <br />\r\n<br/>\r\nCzas leciaĹ moje moĹźliwoĹci rosĹy ale bez porzÄdnego kopniaka w tyĹek mogĹem tylko pomarzyÄ o zbudowaniu czegoĹ czym mĂłgĹbym siÄ pochwaliÄ przed innymi.Ale stworzyÄ jeden problem, wymyĹleÄ dwa a trzy czas, Fakt Ĺźe udaĹo mi siÄ napisaÄ prosty program ktĂły tylko w niewielkim stopniu przypominaĹ system - miaĹem mnĂłstwo koncepcji na niego szkoda Ĺźe nie miaĹem takiego dobrego dostÄpu do internetu.<br />\r\n<br/>\r\nBudowanie wĹasnego jÄzyka programowania, nie jest to proste ale moĹźliwoĹci Turbo Pascala byĹy wystarczajÄce bym mĂłgĹ go zbudowaÄ w takiej formie jaka mi odpowiadaĹa. SiedziÄc kiedyĹ w ĹĂłĹźku doszĹo do mnie Ĺźe tak naprawdÄ mam umysĹ programisty wiem, co jak,  gdzie. Wiem Ĺźe mam dobre pomysĹy i czas to przelaÄ na ekran.<br />\r\n<br/>\r\n Systemy stawaĹy siÄ coraz bogatsze a maszyny coraz potÄĹźniejsze. W koĹcu kontakt ze Ĺwiatem staĹ siÄ o wiele prostszy poĹÄczyĹem siÄ z internetem.<br />\r\n<br/>\r\nW tym samym czasie procesory ewoluowaĹy moc obliczeniowa wzrosĹa z parÄ mega hercĂłw do 200,400 do 1,7 , 2,4 3.0 no i co najwaĹźniejsze zaczeĹa siÄ era  dwĂłch rdzeni i wiÄcej. Tak jak wszystko ewoluowaĹo tak i system i przeglÄdarki staĹy siÄ Ĺadniejsze, szybsze i dajÄce wiÄksze moĹźliwoĹci, jÄzyk java ktĂłry byĹ w uĹpieniu nagle pokazaĹ swĂłj blask i zadomowiĹ siÄ w prawie wszÄdzie.<br />\r\n<br/>\r\nStrony internetowe coĹ czego przez caĹe lata mi brakowaĹo , wiedza na wyciÄgniÄcie rÄki, nieograniczony dostÄp do darmowych zasobĂłw, stron.<br />\r\n<br/>\r\nMĂłj prosty system miaĹ mieÄ tryb graficzny , co do samej koncepcji to moĹźe wam opowiem pĂłĹşniej albo spotkamy siÄ w innym miejscu w internecie. Do rzeczy a pro po internetu miaĹ mieÄ system tryb graficzny i dziaĹaÄ na zasadzie wyĹwietlania coĹ co przypominaĹo strony internetowe sama koncpcja okazaĹa siÄ sĹuszna udaĹo mi siÄ to zrobiÄ ale w trybie tekestowym.<br />\r\n<br/>\r\nProjekt9000 stawaĹ siÄ coraz wyraĹşniejszym obrazem, chociaĹź co do nazwy nie byĹem pewien, poznaĹem html ,jave i co najwaĹźniejsze zagĹÄbiĹem siÄ w Ĺwiat 3d.<br />\r\n<br/>\r\nZaczÄĹem studium informatyczne ktĂłre skoĹczyĹem nie byĹ to jakiĹ okres w ktĂłrym coĹ wydarzyĹo siÄ ale byĹo to coĹ na sam koniec zrozumiaĹm Ĺźe Turbo Pascal to jest bajka, wiÄc moje 5 lat to nic straconego dobrze Ĺźe szkoĹa potwierdziĹa moje przypuszczenia i rozwiaĹa wÄtpliwoĹci.<br />\r\n<br/>\r\nPĂłĹşniej studia fakt Ĺźe nie infomatyka ale dziÄki poznaniu odpowiednich osĂłb jeszcze bardziej staĹem siÄ zdeterminowany, wtedy kolega podsuwa projekt jakby nie liczÄc 9-Äty  i zaczynaĹem siÄ zastanawiaÄ o co mu chodzi z poĹÄczenie tej mieszkanki wyszedĹ naprawdÄ niezĹy bigos.<br />\r\n<br/>\r\nAle najwiÄkszym problemem okazaĹo siÄ zastanowienie siÄ nad waĹźnÄ kwestiÄ czy lepiej tworzyÄ darmowe czy od razu pĹatne projekty. MĂłj znajomy sam stwierdziĹ Ĺźe lepiej darmowe, szybciej moĹźna zaistnieÄ.<br />\r\n<br/>\r\nFakt Ĺźe open source nabraĹ zupeĹnie nowego znaczenia, kiedyĹ byĹ to jeden system teraz rozrosĹo siÄ do moĹźiwoĹci nieograniczonych.  <br />\r\n<br/>\r\n7 lat temu poznaĹem co to gra sieciowa - niezĹy postÄp - i zrozumiaĹem Ĺźe moja wiedza jest warta tyle co piasek na pustyni. ZrozumiaĹem Ĺźe jestem jednym z milionĂłw osĂłb ktĂłre kochajÄ komputery i programowanie, byĹ to teĹź czas kiedy na dĹugi czas zostawiĹem programowanie, raz Ĺźe nie miaĹem chÄci , dwa Ĺźe trzeba zostawiÄ na jakiĹ czas pewne sprawy Ĺźeby odpoczÄÄ nabraÄ siĹ i ĹwieĹźe pomysĹy napĹyneĹy czÄsto tak jest Ĺźe siÄ po prostu nie chce.<br />\r\n<br/>\r\nWrĂłcÄ jeszcze do jedenej rzeczy Ĺźe tak naprawdÄ przez 20 lat mĂłgĹbym juĹź zdobyÄ to co chcesz, ale tak jest tylko wtedy kiedy ma siÄ wiÄkszÄ swobodÄ, nie trzeba siÄ uczyÄ , praca itd. <br />\r\n<br/>\r\nZaczÄĹem zagĹÄbiaÄ siÄ w 3d, zaczÄĹem  poznawaÄ ten wspaniaĹy nowy Ĺwiat a na horyzoncie pojawiĹ siÄ zalÄĹźek projektu.<br />\r\n<br/>\r\nZawsze pociÄgaĹo mnie w programowaniu grzebanie w liniach kodu, te godziny, paznokcie po ograzyne ....... ahhhh rozmaĹźyĹem siÄ - to jest to co tygryski lubiÄ najbardziej.<br />\r\n<br/>\r\nCzas dalej leciaĹ i tak naprawdÄ rok po roku traciĹÄm rzeczywistoĹÄ z Ĺwiatem 3d przeĹźyĹem kryzys wewnÄtrzny, byÄ moĹźÄ wynikaĹo to z faktu Ĺźe jak pisaĹem wczeĹniej kiedyĹ nie byĹo takiego dostÄpu do programĂłw wiÄc miaĹem aspiracje do tworzenia czegoĹ swojego. Bo taki juĹź jestem.<br />\r\n<br/>\r\nKiedyĹ zanim wĹÄczyĹo siÄ to co chciaĹo trzeba byĹo wykonaÄ szereg poleceĹ:<br />\r\n<br/>\r\n1. WĹÄczyÄ komputer - trzeba nacisnÄÄ \\"power\\"<br />\r\n2. Czekamy aĹź pan DOS siÄ zaĹaduje  100 lini tekstu i wita ns przyjemny a zarazem wkurzajÄcy c:\\\\><br />\r\n3.  cd nc<br />\r\n4. nc.exe<br />\r\n5. Za pomocÄ klawiszy strzĹek i tysiÄc razy naciĹniÄciu ENTER uruchamiamy proces<br />\r\n6. Tryb graficzny prosze bardzo cd windows win.exe i wĹala.<br />\r\n7. A potem myszka i znikasz.<br />\r\n<br/>\r\nProste prawda.<br />\r\n<br/>\r\nAle dla mnie to byĹ Ĺwiat i zawsze to bÄde powtarzaĹ cieszÄ siÄ Ĺźe miaĹem moĹźliwoĹÄ byÄ w poczÄtkach istnienia tych cudownych wynalazkĂłw jaki jest komputer - szacunek :).<br />\r\n<br/>\r\nPo jakimĹ czasie ktoĹ mnie wyjÄĹ z czernej dziury postawiĹ na stoĹek daĹ klawiature i przysĹowiowego kopniaka w tyĹek.<br />\r\n<br/>\r\nCzas w koĹcu zrozumieÄ Ĺźe trzeba zaistnieÄ w tym niesamowitym Ĺwiecie zĹoĹźyĹem nazwÄ strony ze swojej pierwszej litrey imienia i caĹego nazwiska dodaĹem  .pl wĹala - jeszcze trochÄ tekstu do garnka jakieĹ zdjÄcie przeorania wĹasnej gĹowy - porzÄdna wiertarka do wymieszania i moĹźna malowaÄ na ekranie,    moja .... pierwsza .... strona .... internetowa. ale nie na darmowym serwerze ale na wykupionym.<br />\r\n<br/>\r\nI kolejny rok mijaĹ a ja szlifowaĹem html<br />\r\n<br/>\r\n[html]<br />\r\n[head]\r\n[title] Strona Pierwsza [/title]<br />\r\n[/head]<br />\r\n[body]<br />\r\nWitaj Ĺwiecie !!!!<br />\r\n[/body]<br />\r\n[/html]<br />\r\n<br/>\r\n.... piÄkne co, no ale od czegoĹ trzeba zaczÄÄ.<br />\r\n<br/>\r\n Moje najlepsze pomysĹy zawsze przychodziĹy pod czas codziennych czynoĹci jak pryszic , kosz a takĹźe leĹźenie po ciemku. Nie jestem wariatem - spokojnie.<br />\r\n<br/>\r\nKaĹźda prawie funkcja w Turbo Pascalu powstawaĹa w rĂłĹźnych miejscach i czasie. Jestem z tego dumny.<br />\r\n<br/>\r\nAle jak nie odnosiÄ sukcesu, czy chociaĹź prĂłb jeĹli nie pomoc ze strony innych osĂłb, wtedy pojawia siÄ ĹwiateĹko w tunelu i bach, miesiÄc pracy nad projektem i jest, wtedy dostaĹem szanse na wykazanie siÄ i stworzyĹem Strone ale juĹź czyjegoĹ pomysĹu - okazaĹo siÄ Ĺźe odniosĹem sukces. I od tamtego czasu staram siÄ udoskonalaÄ swoje umiejÄtnoĹci. ZrozumiaĹe Ĺźe jÄzyk html to jest to ,Ĺatwy , przyjemy kiedyĹ prĂłbowaĹem siÄ bawiÄ przy programowaniu tworzÄc swĂłj pierwszy wewnÄtrzny system i prosty jÄzyk.<br />\r\nTo byĹ niesamowite czysta perfekcja, nieskalana moja ale tak to juĹź jest kiedy prĂłbuje siÄ tworzyÄ coĹ czego nie moĹźna mieÄ - to jest siĹa napÄdowa. <br />\r\n<br/>\r\nHallo, hallo czas telefonĂłw komĂłrkowych , pamiÄtacie swĂłj pierwszy telefon to byĹa dopiero cegĹa, teraz era smartfonĂłw hmmmm, jÄzyk java - czy to nie przypadek,  nagle w tym chaosie przyjaciel w szkole ,  nagle olĹnienie, czĹowiek pcha mnie na drogÄ w kierunku EXIT na reszcie GURU na reszcie pomysĹy, i znowu bawienie siÄ z kodem , odĹźyĹem.<br />\r\n<br/>\r\nDziÄki temu poznaĹem php<br />\r\n<br/>\r\n[?php<br />\r\n<br/>\r\necho \\''Witaj Ĺwiecie\\'';<br />\r\n<br/>\r\n?]<br />\r\n<br/>\r\n....piÄkne co , ale od czegoĹ trzeba zaczÄÄ.<br />\r\n<br/>\r\nNa reszcie tworze swĂłj pierwszt CMS ktĂłry zaczyna byÄ kopiÄ do dalszych projektĂłw, w tym momencie na moim serwerze juĹź sÄ ze cztery projekty , statystyka, projekt9 itp. :) Nie wszystko bÄde zdradzaĹ ale chciaĹem udowodniÄ Ĺźe moĹźna.<br />\r\n<br/>\r\nCzas byĹ i na zagĹÄbienie siÄ c++ , opengl  php . Jedna ksiÄĹźka druga i zaczeĹa siÄ zabawa na caĹego.<br />\r\n<br/>\r\nWracajÄc jeszcze do poczÄtku mojej historii, muszÄ zwrĂłciÄ uwagÄ na pewien szczegĂłĹ, od poczÄtku gdy po raz pierwszy ujrzaĹem pierwszy komputer a byĹ to 286 czuĹem coĹ w rodzaju podniecenia spaÄ nie mogĹem bo dopieo na dugi dzieĹ mogĹem dopiero uruchomiÄ to cudo, pamiÄtam jak dziĹ gruba klawiatura , a myszka to jak gruszka, moĹźe wyda siÄ to dziwne ale pierwsze komendy miaĹem zapisane w zeszycie.<br />\r\n<br/>\r\nA jak dzisiaj to wyglÄda, komputer jest taki jaki zapragniecie ale to podniecenie nadal jest.<br />\r\n<br/>\r\nAle do rzeczy dziĹ komputer nie jest niczym wyjÄtkowym a nawet odchodzi juĹź do lamusa, co mnie bardzo martwi, wiem czas przemija a ja siÄ bojÄ Ĺźe coraz ciÄĹźej jest wprowadziÄ projekt w Ĺźycie, ale ja chce, i to jest najwaĹźniejsze byÄ moĹźe bez przyczyny w tym caĹym przedsiÄwziÄciu jest cyfra 9 jak by nie patrzeÄ 3x3, schemat jakaĹ myĹl coĹ co moĹźna zapamiÄtaÄ, to nie ma byÄ zwykĹy program czy cms, bo takich jest peĹno chce daÄ coĹ do czego ludzie bÄdÄ wracaÄ, coĹ rozpoznawalnego - symbol, po prostu 9000. 9 i trzy zera tak jak 2000 , milenium.<br />\r\n<br/>\r\nWolaĹem 7 ale 9 robi takie dobre wraĹźenie,<br />\r\n<br/>\r\nMajÄc na uwadze wczeĹniejsze moje przemyĹlenia i projekty, pomysĹy, caĹy czas szukam odpowiedniej idei.<br />\r\n<br/>\r\n W internecie jest juĹź wszystko ale o tym juĹź wspominaĹem, byÄ moĹźe jak o tym nie wiedziaĹem to byĹo Ĺatwiej, w gĹowie rodziĹy siÄ projekty po prostu istny majstersztyk. I tak jest do tej pory nic siÄ nie zmieniĹo<br />\r\nwidocznie jestem staromodny, dajÄc takÄ ocenÄ wĹasnego ja chce ukazaÄ jak Ĺwiat cyfrowego Ĺwiata moĹźe uksztaĹtowaÄ czĹowieka. ByÄ moĹźe takie zrozumienie pomoĹźe mi lepiej zrozumieÄ dzisiejszy Ĺwiat ĹÄczÄc przeszĹoĹÄ z przyszĹoĹciÄ i moĹźe wyniknie z tego jakieĹ dzieĹo z ktĂłrego bÄde dumny.<br />\r\n<br/>\r\nSkoro jest wszystko to po co prĂłbowaÄ , bo jak jest wszystko to jest nic, ile dobrych projektĂłw jest porzucanych po latach, bo siÄ nie chce, Ĺatwo to zauwaĹźyÄ, szukajÄc w sieci a robiÄ to przez 90 % pracy z projektami widze co jest i wiem Ĺźe mogĹo byÄ jeszcze wiÄcej tak naprawdÄ.<br />\r\n<br/>\r\nTak naprawdÄ to zawsze maĹźyĹem o dwĂłch rzeczach kawaĹek projektu i wĹasne biurko po czÄĹci to mam,<br />\r\ntak naprawdÄ nie chce byÄ prezesem czy jakÄĹ innÄ grubÄ rybÄ bo takich jest wiele i kaĹźdy tym chce zostaÄ, ja wole byÄ programistÄ czuÄ Ĺźe coĹ tworze, bo o tym zawsze marzyĹem i bÄde marzyÄ.<br />\r\n<br/>\r\nI tak jak pierwszy raz zobaczyĹem swĂłj komputer tak teraz to podniecenie nie zmalaĹo zawsze czuje Ĺźe coĹ jest na rzeczy. <br />\r\n<br/>\r\nWiÄc czas dziaĹaÄ bo tak naprawdÄ potrzeba nowych pomysĹĂłw, chciaĹbym stworzyÄ wĹasny system chyba od poczÄtku mi na tym zaleĹźy, bo dopiero wtedy czĹowiek ma kontrole nad wszystkim, byÄ moĹźe te dzieciÄce marzenia , 5 lat spÄdzonych na jednym programie przyniosÄ efekty w przyszĹoĹci,<br />\r\n<br/>\r\nbo chyba to jest prawdziwy programista czĹowiek , ktĂłry trzyma w garĹci kaĹźdÄ linike kodu duĹźego projektu. Wiem Ĺźe nie raz to juĹź czytaliĹcie o ludziach Ĺźe chcÄ tworzyÄ projekty, systemy Ĺźe bÄdÄ te jedyne ja tego nie mĂłwie, pisze ja to chce daÄ, podzieliÄ siÄ tym tak jak kiedyĹ ktoĹ udostÄpniĹ linux-a.<br />\r\n<br/>\r\nWiele mi daĹa muzyka Ĺwiat trancu przeniĂłsĹ mnie gĹÄbiej w wirtualny Ĺwiat, otworzyĹ tak naprawdÄ to wszystko, przy muzyce mogÄ siÄ zrelaksowaÄ ale tylko naprawdÄ dobre brzmienie potrafi daÄ to coĹ furtkÄ do kaĹźdego podĹwiata, kiedy trafiĹem  na wĹaĹciwy mix potrafiĹ wieczorem przy zgaszonym Ĺwietle w ĹuĹźku rozmyĹlaÄ nad projektami , wtedy to pomysĹy tak naprawdÄ wchodzÄ do gĹowy, ale tylko i wyĹÄcznie przy dobrej muzyce i wĹaĹciwym rytmie. ArtystĂłw nie bÄde wymieniaĹ bo nie o to w tym chodzi chce jednak ukazaÄ magie muzyki to tak jak w grze gdy wszystkie elementy graficzno - animacyjne -muzycznie , efektowne sÄ poĹÄczone to czĹowiek potrafi siÄ podĹÄczyÄ i odĹÄczyÄ od tego Ĺwiata tak jak to miaĹo miejsce w matrix-ie.<br />\r\n.........<br />\r\n<br/>\r\nPo tylu latach mĂłj opĂłr nie zmalaĹ czuje Ĺźe muszÄ wykazaÄ siÄ daÄ ludziom coĹ co mogĹo by zmieniÄ Ĺwiat cyfrowej krainy, obecnie jestem na etapie assemblera. KupiĹem oczywiĹcie odpowiedniÄ pozycjÄ grubÄ pozycjÄ .... kolejna ksiÄĹźka i kolejny etap do przebrniÄcia.<br />\r\n<br/>\r\n\\"PrzyszĹoĹÄ nie jest okreĹlona, ale spoglÄdam w niÄ z nadziejÄ Ĺźe skoro mĂłj przyjaciel potrafiĹ mnie wyciÄgnÄÄ z najmroczniejszej odchaĹni to moĹźe jednak i mi siÄ uda to zrobiÄ \\"<br />\r\n<br/>\r\nCytat:<br />\r\n<br/>\r\nMĂłj wĹasny !!! <br/><br/>', 'moja_historia', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowa_kluczowe`
--

CREATE TABLE IF NOT EXISTS `slowa_kluczowe` (
  `pola` int(11) NOT NULL,
  `slowo_klucz` varchar(32) NOT NULL,
  `waznosc` int(11) NOT NULL,
  PRIMARY KEY  (`pola`,`slowo_klucz`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statystyka`
--

CREATE TABLE IF NOT EXISTS `statystyka` (
  `id` int(11) NOT NULL auto_increment,
  `ip` text,
  `system` text,
  `browser` text,
  `data` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=59539 ;

--
-- Zrzut danych tabeli `statystyka`
--

INSERT INTO `statystyka` (`id`, `ip`, `system`, `browser`, `data`) VALUES
(1, 'Add', '', 'artykuĹ', '0000-00-00'),
(62, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `strony`
--

CREATE TABLE IF NOT EXISTS `strony` (
  `kod` varchar(16) NOT NULL,
  `opis` text,
  PRIMARY KEY  (`kod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `strony`
--

INSERT INTO `strony` (`kod`, `opis`) VALUES
('statystyki', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uprawnienia_autora`
--

CREATE TABLE IF NOT EXISTS `uprawnienia_autora` (
  `autor` varchar(16) NOT NULL,
  `strona` varchar(16) NOT NULL,
  PRIMARY KEY  (`autor`,`strona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `uprawnienia_autora`
--

INSERT INTO `uprawnienia_autora` (`autor`, `strona`) VALUES
('piotr', 'stat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
