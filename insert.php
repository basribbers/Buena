<html>
<body>

<h1>Bedankt!</h1>

<?php

require ('../DBfuncties.php');
if (isset($_GET['naam'])):
	$naam=$_GET['naam'];
	$reactie=$_GET['reactie'];
	$toestemming=$_GET['toestemming'];
	$code=$_GET['code'];
else:
	$naam=$_POST['naam'];
	$reactie=$_POST['reactie'];$toestemming=$_POST['toestemming'];$code=$_POST['code'];
endif;
echo "Bedankt voor je review, ". $naam;
$link = "index.html";
echo "<p><a href=".$link.">Terug naar de startpagina van Buena Comunicación</a></p>";
$conn=dbConnection();
reactieOpslaan($naam,$reactie,$toestemming,$conn,$code);
?>

</body>
</html>
