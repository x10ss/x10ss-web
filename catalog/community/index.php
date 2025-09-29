<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="apple-touch-icon" sizes="180x180" href="https://extensionless.com/apple-touch-icon.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="https://extensionless.com/favicon-32x32.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="https://extensionless.com/favicon-16x16.png"/>
		<link rel="manifest" href="https://extensionless.com//site.webmanifest">
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="descrtiption" content="Community Boilerplates"/>
		<meta name="author" content="Lovre Šimunović"/>
		<title>Community Catalog</title>
		<link rel="stylesheet" type="text/css" href="../../css/x10.css"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<meta property="og:url" content="https://www.catalog.extensionless.com/community/"/>
		<meta property="og:image" content="https://www.extensionless.com/extensionless.jpg"/>
		<meta property="og:title" content="extensionless community catalog"/>
		<meta property="og:description" content="Free File Extension Utility For Windows"/>
		<meta property="og:image:width" content="1200"/>
		<meta property="og:image:height" content="630"/><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
<body>
<div class="container">
<div class="row">
<?php include '../../header.php';?>
</div>
<div class="row">
	<h2 style="text-align:center;">
	community
	<img style="vertical-align:middle;"  width="38px" src="/images/community.svg"/>
	catalog</h2>
	<hr/>
	<?php 
	$order=$_GET["order"];
	$direction=$_GET["direction"];
	$title = $order=="title"?$direction=="asc"?"▲":"▼":"○";
	$ratings = $order=="ratings"?$direction=="asc"?"▲":"▼":"○";
	$date=$order=="date"?$direction=="asc"?"▲":"▼":"○";
	$country=$order=="country"?$direction=="asc"?"▲":"▼":"○";
	$hits=$order=="hits"?$direction=="asc"?"▲":"▼":"○";
	$zipsize=$order=="zipsize"?$direction=="asc"?"▲":"▼":"○";
	
	$newdirection1= $order=="title"?$direction=="asc"?"desc":"asc":"desc";
	$newdirection2= $order=="ratings"?$direction=="asc"?"desc":"asc":"desc";
	$newdirection3= $order=="date"?$direction=="asc"?"desc":"asc":"desc";
	$newdirection4= $order=="country"?$direction=="asc"?"desc":"asc":"desc";
	$newdirection5= $order=="hits"?$direction=="asc"?"desc":"asc":"desc";
	$newdirection6= $order=="zipsize"?$direction=="asc"?"desc":"asc":"desc";
 

	echo "
	
	<div class='row'>	
	<div class='col-md-10'>
	
	<input style='border: none;
	  border-bottom: 
	  2px solid tomato; 
	  border-top: 1px outset tomato;
	  border-left: 2px solid tomato;
	  border-right: 2px solid tomato;
	  border-radius:12px;
	  max-width:250px'
	  id='search'
	  placeholder=' search'>

  </p>
</div>
	<div class='col-md-2'>
	<p>
	<a href='?page=1&order=ratings&direction=$newdirection2&title='>$ratings</a>

	<a style='margin-left:16px;' href='?page=1&order=country&direction=$newdirection4&title='>$country</a>
</p>
</div></div>
	<hr/>";



	$servername = "localhost";
	$username = "root";
	$db = "x10ss";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

				

if($_GET["order"]=='zipsize') {$order ='ZipSize';}
if($_GET["order"]=='hits') {$order ='Hits';}
if($_GET["order"]=='title') {$order ='Username';}
if($_GET["order"]=='ratings') {$order ='Count(ratings.ID)';}
if($_GET["order"]=='date') {$order ='DateTime';}
if($_GET["order"]=='country') {$order ='CountryID';}

$newestdirection=strtoupper($_GET["direction"]);
	
	
	$issearch = $_GET["title"];
	$sqlwhereclause =$issearch == "" ? "" : "WHERE boilpack.Username LIKE '%$issearch%'";



$sql ="SELECT boilpack.ExProID, boilpack.ID, boilpack.Hits,boilpack.ZipSize, boilpack.DateTime, boilpack.Username, boilpack.CountryID, boilpack.DonateUrl, Count(ratings.ID)
	FROM boilpack
	LEFT JOIN ratings ON boilpack.ID= ratings.ForID
	$sqlwhereclause
	GROUP BY ID	ORDER BY $order $newestdirection"
	;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $rows = $result->fetch_all(MYSQLI_ASSOC);
$arrlength = count($rows);

for($x = 0; $x < $arrlength; $x++) {
   if (((int)($x/8))+1==$_GET["page"]){
   $id= $rows[$x]["ID"];
	echo '<div class="chop">

	<div style="display:inline-block; float:right;">
	<small style="vertical-align:middle; font-size:9px;" title="'.$rows[$x]["Count(ratings.ID)"].' likes"> '.$rows[$x]["Count(ratings.ID)"].'
	<img width="16px" src="/images/like.svg"/>
	</small>
	|
	<span style="vertical-align: middle;" title="Country: ' .$rows[$x]["CountryID"].'" class="flag-icon flag-icon-'. strtolower($rows[$x]["CountryID"]).'"></span>
	</div>	
	<div style="display:inline;">
	<a href="download.php?ID='.$id.'" title="Download: '.$rows[$x]["Username"].'.zip">
	<img style="vertical-align:middle;margin-top:-3px;" width="25px" src="/images/download.svg"/>
	</a> |
	</div>
	<div style="display: inline-block; width: 175px; white-space: nowiurap; overflow: hidden; text-overflow: ellipsis; vertical-align: middle;"	class="vimh" title="Username: '.$rows[$x]["Username"].'">
	<a href="../../x/'.$rows[$x]["Username"].'">' .$rows[$x]["Username"].'</a>
	</div>
	<div>
	<small style="font-size: 12px;">
	<a style="font-size: 18px;" href="?page=1&order=hits&direction='.$newdirection5.'&title=">'.$hits.'</a>
	<small>
	<img height="12px" src="/images//mouse.svg" /> '.
	$rows[$x]["Hits"]
	. ' | </small>
	<a style="font-size: 18px;"  href="?page=1&order=zipsize&direction='.$newdirection6.'&title=">'.$zipsize.'</a>
	<img width="12px" src="/images/hard.svg" />
	<small>' . round(($rows[$x]["ZipSize"]) / 1024 , 1). ' megabytes</small>
	|
	<a style="font-size: 18px;" href="?page=1&order=date&direction='.$newdirection3.'&title=">'.$date.'</a>
	<img width="12px" src="../../images/calendar.svg" />
	<small class="mypopups" >'.$rows[$x]["DateTime"].'
	</small>	</small><br/>
	</div>
	</div>
	<hr/>	
	';
}
}

$orderget = $_GET["order"];
$directionget = $_GET["direction"];
echo '<p style="text-align:center;" class="vimh"> | ';
	for( $i = 0; $i <= $result->num_rows/8; $i++ ) {
		$p=$i + 1;
		echo $_GET["page"]==$p? "<span style='color:black'>$p</span> | ":" <a href='?page=$p&order=$orderget&direction=$directionget&title='>$p</a> | ";
		}
echo '</p>';
} else {
  echo "0 results";
}
$conn->close();

?><hr/>
	<div class="row">
	<a href="../quickstart/">
	<p style="text-align:center; padding: 5px;" class="my-nav-tab-a vimh">
			Quickstart
			<img style="vertical-align:middle;"  width="22px" src="../../images/quickstart.svg"/>
			Catalog
	</p>
	</a>
	</div>
</div>
	<div class="row">
<?php include '../../footer.php';?>
	</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$( document ).ready(function() {
  $("#myloader").css("display","none");
  $("#mybody").css("display","block");

});
</script>
<script>
const input = document.getElementById('search');

input.addEventListener('keydown', function(event) {
    // Check if the pressed key is Enter
    if (event.key === 'Enter') {
        const site = input.value.trim();
        if (site) {
            // Navigate to the site, add https:// if needed
      
            window.location.href = "/catalog/community/?page=1&order=title&direction=desc&title=" + site;
			
			
			;
        }
    }
});
</script>
<script>
$( document ).ready(function() {
	const title = new URLSearchParams(window.location.search).get("title");
	document.getElementById("search").value = title;
});
</script>
	</body>
</html>
