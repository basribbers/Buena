<?php

if (isset($_GET['onderwerp'])):
	$onderwerp=$_GET['onderwerp'];
	$bericht=$_GET['bericht'];
else:
	$onderwerp=$_POST['onderwerp'];
	$bericht=$_POST['bericht'];
endif;

$headers .= 'From: <inschrijving @ buena-comunicacion . nl>' . "\r\n";
$adres="gemimah@buena-comunicacion.nl";
//$adres="basribbers@gmail.com";


mail($adres, $onderwerp,$bericht,$headers);

?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/buena-comunicacion-style.css">
<title>Spaans leren en vertalingen in Almere inschrijving</title>
<meta name="description" content="inschrijving">
  </head>

<body>

<div class="bedankt" style="">


<h2>Hartelijk dank voor uw inschrijving!</h2>
<p>We nemen contact met u op voor een afspraak</p>
<P>Vervolgens ontvangt u de factuur per email.</p>
<p>De inschrijving afgerond als de factuur is betaald.</p>
<P><a href="index.html">Terug naar de startpagina van Buena Comunicación</a></p>
<br><br><br><br><br><br><br><br>
</div>
</div>
</body>
</html>


