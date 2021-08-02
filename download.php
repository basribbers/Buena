<?php
session_start();
?>
<!DOCTYPE html><html lang="nl">
<head><title>Buena Comunicacion admin</title>
<meta name="description" content="Buena Comunicacion admin">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/admin.css">
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="user-scalable=no, width=device-width" />
</head><body>
<div class="kolom-center">
<h1>Documenten downloaden</h1>
<?php
if(isset($_SESSION['ingelogd'])) {
  // de sessievariabele 'gebruikersrol' bestaat, inspecteer de waarde
  
  if($_SESSION['ingelogd'] == 1) {
   echo '<p>Deze documenten zijn geupload:</p>';
	
	$fileList = glob('../uploads/*');
	$tel = sizeof ($fileList);
	
	for ($x = 0; $x < $tel; $x++) {
		if (isset($_POST[$x]) ) {
			$naam =$_POST['naam'.$x];
			if ($naam == $fileList[$x] ){
			unlink($fileList[$x]);
			unlink(basename($fileList[$x]));
			}
		}
	}
	
$fileList = glob('../uploads/*');
 $i=0;
//Loop through the array that glob returned.
$formulier = '<form name="download"  method="post"  action="download.php" autocomplete="off">';
foreach($fileList as $filename){
	
  $targetName = basename($filename);
  
	copy ($filename,$targetName);
$formulier .='<div class="rij">';
  $formulier .= '<a href="'.$targetName.'">'.$targetName. '</a>';
  $formulier .= '<input class="knVerw" type="submit" name="'.$i.'" value="verw"><br>';
$formulier .= '<input type="hidden" name="naam'.$i.'" id="'.$i.'" value="'.$filename.'">';
$formulier .='</div>';
$i++;
}

  
$formulier .='</form>';	
echo $formulier;	
	
	
	
	
  } else {
    echo "XXXX niet ingelogd";
  }
}




?>

</div></body></html>