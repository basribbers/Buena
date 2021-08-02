<!DOCTYPE html><html lang="nl"><head><meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/buena-comunicacion-style.css" >
<link rel="stylesheet" href="css/stijl640.css" media="screen and (max-width: 640px)" />
<link rel="icon" href="img/favicon.ico">
<title>Kopie uploaden</title>
<meta name="description" content=""/></head>
<body>

<div class="container-fluid">
<div class="page-header">
<a href="index.html"><img src="img/buena-comunicacion-logo.png" alt="logo van Buena Comunicación"></a>
</div>
<div class="kolom-center">
<?php

$target_dir = "../uploads/";

$uploadOk = 1;
 $countfiles = count($_FILES["fileToUpload"]["name"]);

for($i=0;$i<$countfiles;$i++){

	
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$i]);	

$fileNaam = basename($_FILES["fileToUpload"]["name"][$i]);	
$lengte  = strlen($fileNaam);

$ext = strtolower (substr($fileNaam,$lengte-3,3)) ;
$ext1 = strtolower (substr($fileNaam,$lengte-2,2)) ;
echo $ext;
if ($ext == "pdf" || $ext == "jpg"  || $ext == "peg"   || $ext == "zip"   || $ext == "rar" || $ext == "ocx"  || $ext == "doc"  || $ext1 == "7z"    ){
echo $_FILES["fileToUpload"]["tmp_name"][$i];
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
	 if($countfiles == 0){  echo '<p>U heeft geen bestanden geselecteerd. <a href="offerte-vertaling-upload.php" Probeer nog een keer</a></p>';}
  if($countfiles >1){  echo '<p>Bedankt voor het uploaden van de documenten</p>';}
  if ($countfiles ==1){  echo '<p>Bedankt voor het uploaden van het document</p>';}
  echo '<p>Binnenkort ontvangt u de offerte van Buena Comunicacion</p>';
  echo '<div><a href="offerte-vertaling-upload.php"  class="btn-block btn-success">Ik wil nog één of meer documenten uploaden <span class="glyphicon glyphicon-arrow-right"></span></a></div>';
  
}
 else {
 echo "Helaas is er iets mis gegaan.";
 echo '<p><a href="offerte-vertaling-upload.php">Probeer het nog een keer &raquo;&raquo;.</a></p><p>U kunt de documenten ook mailen aan info@buena-comunicacion.nl.</p>';
 }
 
}
else 
{
	 echo '<p>Helaas is het niet mogelijk om dit type bestand  te uploaden</p>';
	 echo '<p><a href="offerte-vertaling-upload.php">Probeer het nog een keer &raquo;&raquo;.</a></p><p>U kunt de documenten ook mailen aan info@buena-comunicacion.nl.</p>';
}
 
}

?>
<p><a href="index.html">Terug naar de hoofdpagina &raquo;&raquo;</a></p>

</div>
</div>
</body></html>
