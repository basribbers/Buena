<?php
session_start();
include('../DBfuncties.php');
 $conn=dbConnection();
	$naam = "";
	$wachtwoord = "";
	$pw="";
	$ingelogd=false;
if (isset($_POST["inloggen"]) ) {
	$naam =  strtolower($_POST["naam"]);
	$wachtwoord = ($_POST["wachtwoord"]);
	$s = "4fh6";
	$pw = substr( md5($s.$wachtwoord),0,40); 

	
	 $sql ="SELECT * FROM admin WHERE naam='".$naam."'&&  wachtwoord='".$pw."' " ;
	 if ($stmt	 = $conn->prepare($sql))
	 {
			 
    /* execute query */
    $stmt->execute();

    /* store result */
    $stmt->store_result();
	$aantalrecords = $stmt->num_rows;
     $aantalrecords;
	 $stmt->close();
		
	 }
		 
//	
	if ($aantalrecords>0){
		$_SESSION['ingelogd'] = 1; 
	//cookie maken
	$tot =time() + 143200;
	setcookie ('admin', 'J', $tot);
			 
	$ingelogd=true;
	
}
//}
 //else {
 //$ingelogd=false; if (isset($_COOKIE['admin']) ): $ingelogd=true; endif;
//}
	
	}
	
?>
<!DOCTYPE html><html lang="nl">
<head><title>Buena Comunicacion admin</title>
<meta name="description" content="Buena Comunicacion admin">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/admin.css" >
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="user-scalable=no, width=device-width" />
</head><body>
<div class= "kolom-center">
<h1>Admin inloggen</h1>




<p>Vul gebruikersnaam en wachtwoord in</p>

 <?php

echo '<div id="inloggen">';
if (!$ingelogd){
	$naam="";
	$pw="";
$formulier = ' <form name="login"  method="post"  action="admin.php" autocomplete="off">';
if (isset($_POST["inloggen"]) ) {
	
	
		 $formulier .= '<div class="rij"><label>Gebruikersnaam</label>: <input type="text" name="naam" value="'.$naam.'"/></div>' ;
		 $formulier .= '<div class="rij"><label>Wachtwoord</label>: <input type="password"  name="wachtwoord" value="'.$wachtwoord.'"/></div>';
		 $formulier .= '<div class="knop"><input type="submit" name="inloggen" value="inloggen" /></div>' ;
	 
	
}
else{
			 $formulier .= '<div class="rij"><label>Gebruikersnaam</label>: <input type="text" name="naam" value="'.$naam.'"/></div>' ;
		 $formulier .= '<div class="rij"><label>Wachtwoord</label>: <input type="password"  name="wachtwoord" value="'.$wachtwoord.'"/></div>';
		 $formulier .= '<div class="knop"><input type="submit" name="inloggen" value="inloggen" /></div>' ;

	
}	


$formulier .=' </form>';
echo $formulier; 
}
else {
	$formulier = ' <form name="login"  method="post"  action="admin.php" autocomplete="off">';
	$formulier .= '<div class="rij"><label>Gebruikersnaam</label>: <input type="text" name="naam" value="'.$naam.'"/></div>';
	 $formulier .= '<div class="rij"><label>Wachtwoord</label>: <input type="password"  name="wachtwoord" value="'.$wachtwoord.'"/></div>';
	 $formulier .= '<div class="knop"><input type="submit" name="inloggen" value="inloggen"  /></div>';
	$formulier .=' </form>';
echo $formulier; 

}


 echo '<div id="loginmeld">';
 if ($ingelogd){
	
	echo 'Ga naar <a href="download.php">Download pagina</a>';
 }
	

echo '</div>';

?> 
</div>
</div>
</body></html>
