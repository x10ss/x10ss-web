<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-RSXFEMGG3K"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-RSXFEMGG3K');
	</script>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Extensionless - Free File Extension Utility For Windows"/>
    <meta name="author" content="Lovre Šimunović"/>
	<title>extensionless | ⌂ | home</title>
	<link rel="stylesheet" type="text/css" href="/css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="/css/x10.css"/>
	<meta property="og:url" content="https://www.extensionless.com"/>
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://www.extensionless.com/extensionless.jpg"/>
	<meta property="og:title" content="Extensionless"/>
	<meta property="og:description" content="Free File Extension Utility For Windows"/>
	<meta property="og:image:width" content="1200"/>
	<meta property="og:image:height" content="630"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
	}}}
	
	</script>
</head>
<body>
	<div w3-include-html="download/publish.htm"></div>
	<div class="container">
	
	<div class="row">
		<?php include 'header.php';?>
	</div>
	<div class="row">
	<?php include 'intro.php';?>
		<div class="col-md-4">
			<div id="main-image-flex" style="width: 100%; margin: 0; text-align: center; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: center; align-items: center;">
				<img class="screen screen-wide" alt="Extensionless switchbox screenshot" title="Extensionless switchbox screenshot" id="myImg2" src="images/screen2.jpg"/>
				<img class="screen screens-short" alt="Extensionless dashboard screenshot" title="Extensionless dashboard screenshot" id="myImg1" src="images/screen1.jpg"/>
				<img class="screen screens-short" alt="Extensionless options screenshot" title="Extensionless options screenshot" id="myImg3" src="images/screen3.jpg"/>
			</div>
			<?php include 'features.php';?>
		</div>	
    </div>	
  <hr/>
  <div class="row">
  <div class="col-md-4">
  <div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-10">
	<hr/>
	<a class="chop" target="_blank" href="/support" title="Support → support.extensionless.com">
	<p class="vimh" style="text-align:center; color:tomato; font-size:1.8rem;">
	<img src="images/support.svg" style="vertical-align:middle;" width="27px"/>
	• <u>|</u> support
	</p>
	</a>
	<hr/>
	</div>
	
	<div class="col-md-1">
  </div>
	</div>
	<!--
	<hr/>
	<a class="vimh" target="_blank" title="► https://lovresimunovic.from.hr" href="https://www.lovresimunovic.from.hr/" style="color:black">
	<p class="vimh" style="text-align:center;">
	<small style="color:darkgray;">by •</small>
	Lovre Simunovic • From • Hr 
	</p>
	</a>-->
	</div>
   <div class="col-md-4">
	<p style="letter-spacing: 5px; text-align:center;">
	<small class="vimh">
	<b>
	template pack
	<img style="vertical-align:middle; margin:0px 3px;" width="20px" src="/images/trophy.svg"/>
	rank 1
	</b>	
	</small>
	</p> 
	<hr/>
	<p class="my-nav-tab-b" style="padding:5px; text-align: center; margin: 0 auto; margin-bottom:20px; position: relative;">
	

	
	<?php 
	$servername = "localhost";
	$username = "lowwwre_admin";
	$db = "lowwwre_x10ss";
	$password = "lhiz4j0";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	
	
	$sql = 
	"SELECT boilpack.ExProID, boilpack.ID, boilpack.DateTime, boilpack.Username, boilpack.CountryID, boilpack.DonateUrl, Count(ratings.ID)
	FROM lowwwre_x10ss
	LEFT JOIN ratings ON boilpack.ID= ratings.ForID
	GROUP BY ID
	ORDER BY Count(ratings.ID) DESC
	LIMIT 19"
	;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	  // output data of each row
	  // output data of each row
	$rows = $result->fetch_all(MYSQLI_ASSOC);}
	 echo ' 
	<a class="chop" style="color:tomato" href="x/?username='.$rows[0]["Username"].'">
	<small class="chop">
	<small style="vertical-align: middle; font-size:20px;" class="vimh" title="4 likes">
	'.$rows[0]["Count(ratings.ID)"].'<img style="vertical-align:middle;" width="18px" src="/images/like.svg"/> 
	</small>';
	echo '<span style="font-size:18px; vertical-align:middle;" class="vimh">';
	  
	  echo $rows[0]["Username"];
	  
	  echo '</span>';?>
	</a>
	<a href="/catalog/community/?page=1&order=ratings&direction=desc">
	<img style="float:right; margin-right: 5px;margin-top:-20%x; vertical-align:middle;" src="images/community.svg" width="18px"/>
	</a>
</small>	
	
</p>
    <hr/>
</div>
 
<div class="col-md-4">
<p style="letter-spacing: 5px; text-align:center; margin-bottom:5px;">
<small class="vimh">
<b>
latest
<img style="vertical-align:middle;" width="20px" src="/images/news.svg"/>
news
</b>
</small>
<small class="link chop" id="more-news" style="color:black;" class="chop">
<img src="/images/search.svg" style="vertical-align:middle;" height="14px"/>
</small>
<script>
	$("#more-news").click(function (){
window.location="/news";	});
 
</script>
</p>
<hr style="margin-bottom: 8px"/>

	
	<div title='coming soon' id='android-app' style='text-align:center;border-bottom: 1px dotted tomato; '>
	<small class='link chop' style='text-align:center'>
	android app
	</small>
	
	<script>
	$('#android-app').click(function (){
		window.location='/news/#android';
	});
	</script>
	</div>

	
	<div title='Extensionless versions ranging from 1.0.0.0 to 1.0.1.0 are in beta. Interested? If you wish to participate in the process feel free to download the app and leave feedback in the support forum:

REPORT A BUG . . .
SIGN THE GUESTBOOK . . .

Download setup.exe from here and run the Extensionless utility app from your desktop or start programs. Try to clear the following six tasks:

1.) Create Extensionless profile.
2.) Change appearance options.
3.) Create a new file extension.
4.) Upload a template pack.
5.) Template an extension.
6.) Uninstall from your PC.
' id='extensionless-beta' style='text-align:center;border-bottom: 1px dotted tomato; '>
	<small class='link chop' style='text-align:center'>
	extensionless beta
	</small>
	
	<script>
	$('#extensionless-beta').click(function (){
		window.location='news/#beta';
	});
	</script>
	</div>

	
	<div st title='Extensionless 1.0.0.0 version comes along with the following feature list implemented:

User > DASHBOARD - |1.1|
reload, forge, warehouse, usage indicators, apps, log.
User > ACCOUNTS  -  |1.2|
Windows profile, Extensionless profile.
User > EXHIBIT  -  |1.3|
customize levers, folder size indicator, upload button, flag, open folder button.
SWITCHBOX  -  |2|
picks, code, media, documents, all.
Catalogs > COMMUNITY  -  |3.1|
ranking, donate link, rating, download button.
Catalogs > QUICKSTART  -  |3.2|
download buttons.
Utility > WAREHOUSE  -  |4.1|
turn on/off, select extensions.
Utility > FORGE  -  |4.2|
input table.
OPTIONS - |5|
ask again, default domain, buckup templates, templates folder, color, theme, sounds.
HELP - |6|
faq, bugs, use, guestbook, news.

NOTE: This is the first beta version with the full features list a bit under-tested, but implemented. The feature list will not be extended until 1.0.1.1 when the app will be out of the beta period.
PREREQUISITES: Microsoft .NET Framework 4.6.1 (x86 and x64)
RELEASE DATE: June 15th 2020.
APPLICATION SIZE: 88 MB' id='v-1-0-0-0-release-notes' style='text-align:center;border-bottom: 1px dotted tomato; '>
	<small class='link chop' style='text-align:center'>
	v 1.0.0.0 release notes
	</small>
	
	<script>
	$('#v-1-0-0-0-release-notes').click(function (){
		window.location='/news/#release';
	});
	</script>
	</div>

	
 
    </div>

	</div>
<div class="row">
  <?php include 'footer.php';?>
</div>
</div>
<?php include 'modal.php';?>
</body>
</html>
