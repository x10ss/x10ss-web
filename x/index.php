<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"/>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Extensionless User Profile"/>
		<meta name="author" content="Lovre Šimunović"/>
		<title>x10ss pack</title>
		<link rel="stylesheet" type="text/css" href="../css/x10.css"/>
		<meta property="og:url" content="https://www.catalog.extensionless.com"/>
		<meta property="og:image" content="https://www.extensionless.com/extensionless.jpg"/>
		<meta property="og:title" content="extensionless catalog"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">
		<meta property="og:description" content="extensionless catalog"/>
		<meta property="og:image:width" content="1200"/>
		<meta property="og:image:height" content="630"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body class="chop">
	<?php
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


						$user = $_GET["username"];
								
						if ($user == "")
						header("Location:/catalog/community/?page=1&order=ratings&direction=desc");	
						$sqlpro = "SELECT ID, FilesList,ZipSize, Category, ExProID, DonateUrl, DateTime, Username, CountryID,BoilerplateZip FROM boilpack WHERE Username = '$user'";
						$resultpro = $conn->query($sqlpro);
						$rowpro = $resultpro->fetch_assoc();
						
						$userexproid = $rowpro["ExProID"];
						$usercountryid = $rowpro["CountryID"];
					
						$ratings=0;
						$ratingsranking = 0;
						$sqlratings = "SELECT ForID, Count(ratings.ID) FROM ratings GROUP BY ForID ORDER BY Count(ratings.ID) DESC";
						$resultratings = $conn->query($sqlratings);
					
						while($temprank = mysqli_fetch_array($resultratings))
						{
							$ratingsranking++;
							if($temprank["ForID"]==$rowpro["ID"])
							{
								$ratings=$temprank["Count(ratings.ID)"];
								break;
							}								
						}
						
					
					
			
		?>
		<div style="text-align: center;" class="container">
			<div class="row">
				<?php include '../header.php';?>
			</div>
			<div style="text-align: center;" class="row">
				<h2>x10ss
			</h2>
			</div>
			<hr/>
			<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3>"style="font-size: 18px; border:2px solid lightgray; background: linear-gradient(180deg, oldlacewhite 0%,  100%); width: fit-content; margin: 20px auto; padding: 10px;">
					<div style="margin-bottom: 10px;" class="my-x"><h3><img src="/images/profile.svg" width="50px"/> <u><?php echo $rowpro["Username"];?></u></h3>
					<p title="overall community nllking"/></div> 
					<div style="margin-bottom: 10px;" class="my-x">:<img src="/images/community-black.svg" width="28px"/>  rank <hr><?php echo $ratingsranking;?></p></div>
					<p title="ratings"> 
					<div style="margin-bottom: 10px;" class="my-x"><img src="/images/like.svg" width="28px"> likes <hr><?php echo $ratings;?> </p> </div>
					<p>
					<div style="margin-bottom: 10px;" class="my-x">
					<img src="/images/world.svg" width="28px"/>  from:<hr/>
					<?php $country = $rowpro["CountryID"]; $countrylower = strtolower($rowpro["CountryID"]); 
					echo " <span title='Country: $country' class='flag-icon flag-icon-$countrylower'></span>";
					echo " " . strtoupper ($country);
					?>
					</p></div>
				
				
				
				</div>
				
			<div class="col-md-3" style="border:2px solid lightgray; width: fit-content; margin: 25px auto auto auto; padding: 10px">					
				<p style="font-size:18px"><img src="/images/files.svg" width="22px"/> <u> files list:</u></p>	
				<hr/>
				<div style="text-align:left;>
				<?php 
				$files= $rowpro["FilesList"];
				$items = explode("|",  $files);
				$numfile=1;
				foreach ($items as $item) {
				echo '<u><span style= font-size:18px; class="chop"> ' . $numfile . '. ' . $item . '</span></u><br/>';
				$numfile++;
				}
				?>
				</div>
				<hr/>
				<div style="margin-bottom: 10px;" class="my-x"><p><img src="/images/hard.svg" width="26px"/> size:
				<hr> <?php echo $rowpro["ZipSize"] ?> megabytes		
				</p></div>
				<hr/>
				<div style="margin-bottom: 10px;" class="my-x"><p><img src="/images/category.svg" width="26px"/>  category:
				<hr> <?php echo $rowpro["Category"] ?>
				</p></div>
				<hr/>
				<p class="my-nav-tab-b" style="font-size:18px;'width: fit-content; margin: 20px 5px auto auto; padding: 10px">
					<a href="#download-package">
					download zip
					</a>
				</p>
					
				</div>				
				<div class="col-md-3"></div>
			<div class="row">
			<?php include '../footer.php';?>
			</div> 
		</div>
	</body>
</html>