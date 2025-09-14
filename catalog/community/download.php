<?php 
if( isset($_GET["ID"]) )
{
	$servername = "extensionless.com";
	$username = "lovrenco_x10sionless2020";
	$db = "lovrenco_x10sionless";
	$password = "diegoRecoba8*";


	$conn = new mysqli($servername, $username, $password, $db);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$file=$_GET["ID"];

	$result = $conn->query("Select Zip from BoilPack where ID=$file");
	
	if ($result->num_rows > 0) {
  // output data of each row
		while($row = $result->fetch_assoc()) 
		{
			header('Content-type: application/zip');
		echo $row["Zip"];
		}
	}else {echo "shiothappens";echo $_GET["ID"];}
	$conn->close();
	}
?>