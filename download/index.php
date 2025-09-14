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
		<title>download ↓ extensionless</title>
		<link rel="stylesheet" type="text/css" href="https://www.extensionless.com/css/x10.css"/>
		<link href="https://extensionless.com/catalog/css/flag-icon.css" rel="stylesheet">
		<meta property="og:url" content="https://www.catalog.extensionless.com"/>
		<meta property="og:image" content="https://www.extensionless.com/extensionless.jpg"/>
		<meta property="og:title" content="extensionless catalog"/>
		<meta property="og:description" content="extensionless catalog"/>
		<meta property="og:image:width" content="1200"/>
		<meta property="og:image:height" content="630"/>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
		<script>
		function includeHTML() {
			var z, i, elmnt, file, xhttp;
			z = document.getElementsByTagName("*");
			for (i = 0; i < z.length; i++) {
			elmnt = z[i];
			
			file = elmnt.getAttribute("w3-include-html");
			if (file) {
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4) {
			var mySubString = this.responseText.substring(
			this.responseText.lastIndexOf("Version:</B></TD><TD WIDTH=\"5\"><SPACER TYPE=\"block\" WIDTH=\"10\" /></TD><TD>") + 74,
			this.responseText.lastIndexOf("</TD></TR><TR><TD COLSPAN=\"3\">&nbsp;</TD></TR><TR><TD><B>Publisher:")
			);
			if (this.status == 200) {document.getElementById("x10version").innerHTML = " v " + mySubString;}
			if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
			elmnt.removeAttribute("w3-include-html");
			}
			}
			xhttp.open("GET", file, true);
			xhttp.send();
			}}
		}
	</script>
	</head>
	<body>
	<div class="container">
	<div class="row">
		<?php include '../header.php';?>
		<?php include '../where-am-i-navigation.php';?>
	</div>
	<div class="row">
	<?php include '../intro-away.php';?>
	<div class="col-md-4">
		<p class="chopTomaNeverni">
			</u> |<a href="setup.exe"> download </a>| </u>
			<span>
				 setup 
				<small>
					 .exe
				</small>
				 |► 
			</span>
			<br/>
			<span style="color:tomato;" class="chop">				
				<small>
				 ~ total
				<u>
				| space 
				<small>
				on
				</small>
				</small>
				 disk 
				<big> 
				 | 			
				 </u>6
				</big>
				<small>
				 7<u> 
				</small>
				</u>
				<b> ϻ </b>
				 в
			</span>
			<hr/>
				<small>
				<small> + | 0. • • | megabyte </small>
				</small>  initial ↓ download </small>
				<br/>
				<small> + <small> mandatory </small> in-setup </small> download <small> ≈ <small> 36 </small>megabytes</small><br/>
				<small><small>⨦</small>? </small>.net framework update 
				<hr/>
				<span>
				get
				</span>
				
				<small>
				<span class="vimh">
				 | extensionless | 
				</span>
				</small>
				
				<small>
				<small>
				for
				</small>
				windows
				</small>
				<small>
				<small>
				<small>
				 - I 
				 </small></small> o </small>
				<span class="chop">_|<u>█</u></span>
				<span style="color: gray!important"> - I - </span> 
				</small>
			</p>
		</div>	
    </div>
	<hr/>
	<div class="row">
	<?php include '../footer.php';?>
	</div>
	</div>
	</body>
</html>