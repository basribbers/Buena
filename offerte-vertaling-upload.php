<!DOCTYPE html><html lang="nl"><head><meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/buena-comunicacion-style.css" >
<link rel="stylesheet" href="css/stijl640.css" media="screen and (max-width: 640px)" />
<link rel="icon" href="img/favicon.ico">
<title>Kopie uploaden</title>
<meta name="description" content="Offerte aanvragen voor een (beëdigde vertaling. Vraag vrijblijvend een offerte aan."/></head>
<body>
<script>
window.onload = function(){
var knop = document.getElementById('verw');
var mail =  document.getElementById('mail');
knop.addEventListener('click', function(){  
 var file = document.getElementById("fileToUpload");
    file.value = file.defaultValue;
}); 

mail.addEventListener('click', function(){  
 document.getElementById('mailen').style.visibility = 'visible';	
}); 
} 
 </script>
<div class="container-fluid">
<div class="page-header">
<a href="index.html"><img src="img/buena-comunicacion-logo.png" alt="logo van Buena Comunicación"></a>
</div>
 <h1 class="form-kop"  style="background-color:#0F75BC; color:white;" >Stap 2: Document uploaden</h1>
<form  class="kolom-center" action="upload.php" method="post" enctype="multipart/form-data">
<p>Graag ontvangen wij een scan van het te vertalen document of documenten, liefst in PDF formaat.</p>
<p>Klik op de knop bladeren en zoek het document op uw computer.  U kunt meerdere documenten selecteren.  Klik vervolgens op de knop 'Uploaden'</p>
  <div class="koloms">
<div class="button-wrap">
        <input   name="fileToUpload[]" id="fileToUpload"  type="file" multiple>
</div>
<div><input class="btn btn-lg btn-success" value="Uploaden" id="submit" type="submit"> 
 <button   class="btn btn-lg btn-secondary" id="verw" type="button"  ><span class="glyphicon glyphicon-remove"></span> Deselecteren</button></div>
</div></form>
<div class="kolom-center"><button type="button" id="mail"  class="btn-block btn-success">Ik verstuur de documenten liever per mail <span class="glyphicon glyphicon-arrow-right"></span></button></div>
<div class="kolom-center" id="mailen" ><p>Prima, u kunt mailen naar <a href="mailto:info@buena-comunicacion.nl">info@buena-comunicacion.nl</a>. Zodra we de documenten hebben ontvangen, ontvangt u van ons een offerte.</p></div>  
</div></body></html>