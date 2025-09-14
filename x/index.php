<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="apple-touch-icon" sizes="180x180" href="https://extensionless.com/apple-touch-icon.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="https://extensionless.com/favicon-32x32.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="https://extensionless.com/favicon-16x16.png"/>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Extensionless User Profile"/>
		<meta name="author" content="Lovre Šimunović"/>
		<?php
						$servername = "extensionless.com";
						$username = "lovrenco_x10sionless2020";
						$db = "lovrenco_x10sionless";
						$password = "diegoRecoba8*";
					
						$conn = new mysqli($servername, $username, $password, $db);
						// Check connection
						if ($conn->connect_error) {
						  die("Connection failed: " . $conn->connect_error);
						}
						$user = $_GET["username"];
											
											
						$sqlpro = "SELECT ID, Email, ExProID, DonateUrl, Dob, Username, CountryID FROM ExPro WHERE Username = '$user'";
						$resultpro = $conn->query($sqlpro);
						$rowpro = $resultpro->fetch_assoc();
						
						$userexproid = $rowpro["ExProID"];
						$usercountryid = $rowpro["CountryID"];
					
						///////////////////////////preseli iz exproa prp a clr brajo zadrži za sebe i dodat downloads field
						$sqlboil = "SELECT ID, DateTime, Zip, ZipSize, Hits FROM BoilPack WHERE ExProID = '$userexproid'";
						$resultboil = $conn->query($sqlboil);
						$rowboil = $resultboil -> fetch_assoc();
						/////////////////hit++
						$ratings=0;
						$ratingsranking = 0;
						$sqlratings = "SELECT BoilPackID, Count(RatingsID) FROM Ratings GROUP BY BoilPackID ORDER BY Count(RatingsID) DESC";
						$resultratings = $conn->query($sqlratings);
					
						while($temprank = mysqli_fetch_array($resultratings))
						{
							$ratingsranking++;
							if($temprank["BoilPackID"]==$rowboil["ID"])
							{
								$ratings=$temprank["Count(RatingsID)"];
								break;
							}								
						}
						
						echo '<title>' . $rowpro["Username"] . ' x ¹ ₀ s s ' . '#' . $ratingsranking . '</title>';
					
					
			
		?>
		<link rel="stylesheet" type="text/css" href="https://www.extensionless.com/css/x10.css"/>
		<link href="https://extensionless.com/catalog/css/flag-icon.css" rel="stylesheet">
		<meta property="og:url" content="https://www.catalog.extensionless.com"/>
		<meta property="og:image" content="https://www.extensionless.com/extensionless.jpg"/>
		<meta property="og:title" content="extensionless catalog"/>
		<meta property="og:description" content="extensionless catalog"/>
		<meta property="og:image:width" content="1200"/>
		<meta property="og:image:height" content="630"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php include '../header.php';?>
				<?php include '../where-am-i-navigation.php';?>
			</div>
			<div class="row">
				<h2>x.extensionless.com
			</h2>
			</div>
			<div class="row">
				<div class="user-profile">
					<p title="overall community ranking"/><?php echo $ratingsranking;?> ≛ rank</p>
					<p title="ratings"><small><?php echo $ratings;?> <u>⁂</u> ratings</small></p>
					<p title="username"><?php echo $rowpro["Username"];?></p>
					<p>
					<small><small><u>country:</u></small></small>
					<?php $country = $rowpro["CountryID"]; $countrylower = strtolower($rowpro["CountryID"]); echo "<span title='Country: $country' class='flag-icon flag-icon-$countrylower'></span>";
					echo "<small>$country</small>"; ?>
					</p>
					<p>
					<a href="#download-package">
						download 📦 .zip
					</a>
					<small>
					<small>under the</small> ✠ ibda <small>license</small>
					</small>
					</p>
				<hr/>
					<p style="text-align: center; border: 1px solid salmon;">
					<span style="border-top: 2px groove wheat; border-left: 1px groove wheat; border-right: 1px Groove wheat ; margin-top :-15px; border-bottom:3px Groove wheat ; color:tomato!important;  background-color:bisque;" class="chop">
					<span style="color: gray!important;">◄|₪| ≓≒ </span>
					<small style="letter-spacing: 3px;">x<small><small>10</small></small>s.co</small>
					<span style="color: orange!important;">~</span>
					<small style="color: orange!important;">≑≔</small>
					<small style="letter-spacing: 2px;"> / userpack / </small>
					<small style="color: orange!important;">≕</small>
					|≒≓|₪ ►	
					</span>
					<span style="border: 1px solid BlanchedAlmond!important; background-color: wheat!important;">
					⋲<small><span style="border: 1px solid tomato!important; background-color: bisque!important;">📜📦</span></small>⋻</span>
				</p>
				<p style="border: 1px solid salmon!important; background-color: BlanchedAlmond!important;">
				<small style="border: 1px solid bisque!important; color: bisque!important;">
				category: 📚📙 markup
				</small>
				<small style="color:gray!important; border: 1px solid bisque!important; background-color:wheat !important;">
				info:
				<small style="border: 1px solid white!important; background-color: wheat!important;">
				i feel funny
				</small>
				</small>
				
				</p>				
				<p>≗ <small><small>files list:</small></small></p>							
				<p>≐ <small style="vertical-align:baseline;">markerplavi.xml<small><small>⊸</small><small></small></small></small></small></p>
				<p>≐<small style="vertical-align:baseline;">markerplavi.xml<small><small>⊸ last revision: <small>01 june 2024</small></small></small></small></p>
				<p>≐<small style="vertical-align:baseline;">markerplavi.xml<small><small>⊸</small><small>⊸</small><small>⊸ last revision: <small>01 june 2024</small></small></small></small></p>
				<p>≐<small style="vertical-align:baseline;">markerplavi.xml<small><small>⊸</small><small>⊸ last revision: <small>01 june 2024</small></small></small></small></p>
				<p>≐<small style="vertical-align:baseline;">markerplavi.xml<small><small>⊸</small><small>⊸</small><small>⊸ last revision: <small>01 june 2024</small></small></small></small></p>
				<p>≙≚</p>
				</div>
			</div>
		
			<div class="row">
			<?php include '../footer.php';?>
			</div> 
		</div>
	</body>
</html>