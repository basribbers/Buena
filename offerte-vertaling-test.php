<!DOCTYPE html><html lang="nl"><head><meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/buena-comunicacion-style.css" >
<link rel="stylesheet" href="css/stijl640.css" media="screen and (max-width: 640px)" />
<link rel="icon" href="img/favicon.ico">
<title>Kopie uploaden</title>
<meta name="description" content="Offerte aanvragen voor een (beëdigde vertaling. Vraag vrijblijvend een offerte aan."</head>
<body>
<div class="container-fluid">
<div class="page-header">
<a href="index.html"><img src="img/buena-comunicacion-logo.png" alt="logo van Buena Comunicación"></a>
</div>
<nav class="navbar navbar-default"><div class="navbar-header"><span class="merk"><img src="img/logo_klein.gif" alt="klein logo van Buena Comunicación" style="float:left;"><a class="navbar-brand" href="index.html">Buena Comunicación</a></span><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar ">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button></div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav">
<li><a href="index.html">Start</a></li>
<li><a href="over-Buena-Comunicacion.html">Over Buena Comunicación</a></li>
<li><a href="privelessen-spaans.html">Privélessen</a></li>
<li><a href="zakelijk-spaans.html">Zakelijk Spaans</a></li><li><a href="vertalen.html">Vertalen</a></li>
<li><a href="prijzen.html">Prijzen</a></li>
<li><a href="tips.html">Tips en FAQ</a></li>
<li><a href="docenten-spaans.html">De docenten</a></li>
<li><a href="intake-gesprek.html">Intake gesprek</a></li>
<li><a href="reacties.php">Reacties van onze cursisten</a></li>
<li><a href="foto-pagina.html">Foto's</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</div></nav>

 <h1 class="form-kop"  style="background-color:#0F75BC; color:white;" >Offerte aanvragen voor een vertaling</h1>
 	
	
<form  class="upload" action="upload.php" method="post" enctype="multipart/form-data">
  <div class="koloms">
   

<div class="button-wrap">
        
        <input id="upload" type="file">
</div>


<div>    <input class="btn btn-lg btn-primary" value="Bestand uploaden" id="submit" type="submit"> </div>
	
</div>


</form>		
		
</div>
<script>
var submit = document.getElementById('submit');
var onderwerp = document.getElementById('onderwerp');
var achternaam = document.getElementById('achternaam');
var voornaam = document.getElementById('voornaam');
submit.onclick=functie;
function functie()
{
onderwerp.value = "Aanvraag offerte vertaling "+ voornaam.value+" "+achternaam.value;
}
 </script></body></html>
