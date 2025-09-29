<?php
// Allow any origin (for development only)
header("Access-Control-Allow-Origin: *");  
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");  
header("Access-Control-Allow-Headers: Content-Type");  

error_reporting(0);
ini_set('display_errors', 0);

$host = "localhost";
$user = "root";       // change to your DB username
$pass = "";           // change to your DB password
$db   = "x10ss"; // change to your DB name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed"]));
}

$sql = 
	"SELECT boilpack.ExProID, boilpack.ID, boilpack.Hits,boilpack.ZipSize, boilpack.DateTime, boilpack.Username, boilpack.CountryID, boilpack.DonateUrl, Count(ratings.ID)
	FROM boilpack
	LEFT JOIN ratings ON boilpack.ID= ratings.ForID
	GROUP BY ID	ORDER BY Count(ratings.ID) DESC"
	;
$result = $conn->query($sql);
$data = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
		 $data[] = $row;
    }
}
echo json_encode($data);
$conn->close();
exit;
?>