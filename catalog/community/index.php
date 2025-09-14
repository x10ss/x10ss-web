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
		<meta name="description" content="Community Boilerplates"/>
		<meta name="author" content="Lovre Šimunović"/>
		<title>Community Catalog</title>
		<link rel="stylesheet" type="text/css" href="https://www.extensionless.com/css/x10.css"/>
		<link href="css/flag-icon.css" rel="stylesheet">
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



<div id="myloader" style="width:150px; margin:0 auto; position:relative;">

<div class="spinner">
	  <div class="cube1"></div>
	  <div class="cube2"></div>
	</div>
</div>

<div id="mybody" style="display:none;" class="container">
<div class="row">
<?php include '../../header.php';?>
</div>
<div class="row">
	<h2 style="color:dimgray; text-align:center;">
	
	community
	<img style="vertical-align:middle;"  width="25px" src="https://extensionless.com/images/community.svg"/>
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
	<p>
	
	<a href='?page=1&order=title&direction=$newdirection1'>$title</a>
	<input style='border: none;
  border-bottom: 2px solid tomato; border-top: 1px outset tomato; border-left: 2px solid tomato; border-right: 2px solid tomato; border-radius:12px; max-width:150px' id='search-input' placeholder='search catalog...'>
	<a style='margin-left:90px;' href='?page=1&order=ratings&direction=$newdirection2'>$ratings</a>

	<a style='margin-left:16px;' href='?page=1&order=country&direction=$newdirection4'>$country</a>
	</p>
	<hr/>";
	
$servername = "extensionless.com";
$username = "lovrenco_x10sionless2020";
$db = "lovrenco_x10sionless";
$password = "diegoRecoba8*";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($_GET["order"]=='zipsize') {$order ='ZipSize';}
if($_GET["order"]=='hits') {$order ='Hits';}
if($_GET["order"]=='title') {$order ='Username';}
if($_GET["order"]=='ratings') {$order ='Count(RatingsID)';}
if($_GET["order"]=='date') {$order ='DateTime';}
if($_GET["order"]=='country') {$order ='CountryID';}

$newestdirection=strtoupper($_GET["direction"]);

$sql = 
"SELECT BoilPack.ID, BoilPack.Zip, BoilPack.DateTime, BoilPack.ExProID, BoilPack.Hits, BoilPack.ZipSize, ExPro.Username, ExPro.CountryID, ExPro.DonateUrl, Count(RatingsID)
FROM BoilPack
INNER JOIN ExPro ON BoilPack.ExProID=ExPro.ExProID
LEFT JOIN Ratings ON BoilPack.ID=Ratings.BoilPackID

GROUP BY ID
ORDER BY $order
$newestdirection";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $rows = $result->fetch_all(MYSQLI_ASSOC);
$arrlength = count($rows);

for($x = 0; $x < $arrlength; $x++) {
   if (((int)($x/8))+1==$_GET["page"]){
   $id= $rows[$x]["ID"];
	echo '<div class="chop">
	<div style="display:inline;">
	<a href="download.php?ID='.$id.'" title="Download: '.$rows[$x]["Username"].'.zip">
	<img style="vertical-align:middle;margin-top:-3px;" width="25px" src="https://extensionless.com/images/download.svg"/>
	</a>
	</div>
	<div style="
	display: inline-block;
    width: 175px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: middle;
	"
	class="vimh" title="Username: '.$rows[$x]["Username"].'">
	' .$rows[$x]["Username"].'
	</div>
	<div style="display:inline-block; float:right;">
	<small style="font-size:9px;" title="'.$rows[$x]["Count(RatingsID)"].' likes"> '.$rows[$x]["Count(RatingsID)"].'
	<img width="15px" src="https://extensionless.com/images/like.svg"/>
	</small>
	|
	<span style="vertical-align: top;" title="Country: ' .$rows[$x]["CountryID"].'" class="flag-icon flag-icon-'. strtolower($rows[$x]["CountryID"]).'"></span>
	</div>
	<div style="margin-top:-5px;">
	<small style="font-size: 11px;">
	<a href="?page=1&order=hits&direction='.$newdirection5.'">'.$hits.'</a>
	<small>
	<img height="8px" src="https://extensionless.com/images/level-down-alt.svg" /> '.
	$rows[$x]["Hits"]
	. ' | </small>
	<a href="?page=1&order=zipsize&direction='.$newdirection6.'">'.$zipsize.'</a>
	<img width="8px" src="https://extensionless.com/images/align-justify.svg" />
	<small>' . round(($rows[$x]["ZipSize"]) / 1024 , 1). ' MB</small>
	|
	<a href="?page=1&order=date&direction='.$newdirection3.'">'.$date.'</a>
	<img width="10px" src="https://extensionless.com/images/date.svg" />
	<small class="mypopups" >'.$rows[$x]["DateTime"].'
	</small>	</small>
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
		echo $_GET["page"]==$p? "<span>$p</span> | ":" <a href='?page=$p&order=$orderget&direction=$directionget'>$p</a> | ";
		}
echo '</p>';
} else {
  echo "0 results";
}
$conn->close();

?><hr/>
<a href="../quickstart/">
<p style="color:Tomato;text-align:center;" class="vimh">
		Quickstart
		<img style="vertical-align:middle;"  width="36px" src="https://extensionless.com/images/quick-active.svg"/>
		Catalog
</p>
</a></div>

<hr/>
	<div class="row">
<?php include '../../footer.php';?>
	</div>
	</div>
	<script src="../assets/docs.js"></script>
<style>

.spinner {
  margin: 100px auto;
  width: 40px;
  height: 40px;
  position: relative;
}

.cube1, .cube2 {
  background-color: #333;
  width: 15px;
  height: 15px;
  position: absolute;
  top: 0;
  left: 0;
  
  -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
  animation: sk-cubemove 1.8s infinite ease-in-out;
}

.cube2 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

@-webkit-keyframes sk-cubemove {
  25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
  50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
  75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
  100% { -webkit-transform: rotate(-360deg) }
}

@keyframes sk-cubemove {
  25% { 
    transform: translateX(42px) rotate(-90deg) scale(0.5);
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
  } 50% { 
    transform: translateX(42px) translateY(42px) rotate(-179deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
  } 50.1% { 
    transform: translateX(42px) translateY(42px) rotate(-180deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
  } 75% { 
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
  } 100% { 
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$( document ).ready(function() {
  $("#myloader").css("display","none");
  $("#mybody").css("display","block");

});
</script>
	</body>
</html>
