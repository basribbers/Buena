<?php
//database connectie
function dbConnection() {
session_start();
define('DB_HOST', 'gs0.mysqlservers.xs4all.nl');
define('DB_USER', 'gs0_buenaa');
define('DB_PASS', 'Poto171112@');
define('DB_NAME', 'gs0_buena');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
}
function reactieOpslaan($naam,$reactie,$toestemming, $conn,$code){
	$code = strip_tags($code);$code = stripslashes($code);
	if ($code=="5566")
	{	
		$tonen=0;
		if ($toestemming=='ja'){$toestemming=1;}else {$toestemming=0;$tonen=2;}
		$datum = date('Y-m-d');
		echo $datum;
		
		$sql = "INSERT INTO buena_react ( rea_naam,rea_tekst, rea_tonen, rea_toestemming) VALUES  ('$naam', '$reactie',$tonen, '$toestemming')";
		if ($conn->query($sql) === TRUE)
		{
		
		} 		
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
	else {echo'=>Code niet correct';}
$conn->close();
}
 function reactieLezen($conn) {
 
 
 $sql ="SELECT * FROM buena_react WHERE rea_tonen = '1'  ORDER BY rea_datum DESC, rea_id DESC";
 $result = $conn->query($sql);
	$i=0;
	$naam=array();
	$datum=array();
	$reactie=array();
 while($row = $result->fetch_assoc()) 
		{
	 
		$naam [$i] = $row['rea_naam'];
		$datum [$i] = $row['rea_datum'];
		$reactie [$i] = $row['rea_tekst'];
		$i=$i+1;
		}
		return array($naam,$datum,$reactie);
   }
   
    function reactieLezenAlle($conn) {
 
 
 $sql ="SELECT * FROM buena_react";
 $result = $conn->query($sql);
	$i=0;
	$id=array();
	$naam=array();
	$datum=array();
	$reactie=array();
	$toestemming=array();
	$tonen=array();
 while($row = $result->fetch_assoc()) 
		{
		$id[$i] = $row['rea_id'];
		$naam [$i] = $row['rea_naam'];
		$datum [$i] = $row['rea_datum'];
		$reactie [$i] = $row['rea_tekst'];
		$tonen [$i] = $row['rea_tonen'];
		$toestemming [$i] = $row['rea_toestemming'];
		$i=$i+1;
		}
		return array($id,$naam,$datum,$reactie,$toestemming,$tonen);
   }
function reactiePubliceren($conn,$id){
	$sql ="UPDATE buena_react SET rea_tonen='1' where rea_id='".$id."'" ;
	
	$result = $conn->query($sql);
	return $result;
}
   

?>