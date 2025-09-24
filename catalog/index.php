<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="apple-touch-icon" sizes="180x180" href="https://extensionless.com/apple-touch-icon.png"/>
	<link rel="icon" type="image/png" sizes="32x32" href="https://extensionless.com/favicon-32x32.png"/>
	<link rel="icon" type="image/png" sizes="16x16" href="https://extensionless.com/favicon-16x16.png"/>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Extensionless Catalog"/>
    <meta name="author" content="Lovre Šimunović"/>
	<title>Catlog</title>
	<link rel="stylesheet" type="text/css" href="../css/x10.css"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">
	<meta property="og:url" content="https://www.catalog.extensionless.com"/>
	<meta property="og:image" content="https://www.extensionless.com/extensionless.jpg"/>
	<meta property="og:title" content="extensionless catalog"/>
	<meta property="og:description" content="extensionless catalog"/>
	<meta property="og:image:width" content="1200"/>
	<meta property="og:image:height" content="630"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->

</head>
<body>

	<div class="container"><div class="row">
		<?php include '../header.php';?>
		<?php include '../where-am-i-navigation.php';?>
	</div>
	<div class="row">
	<h2 style="text-align:center;"><img src="/images/catalog.svg" width="36px"> catalog</h2>
	<hr/>
</div>
	<div class="row">
	 
	 <div class="col-md-6">
	 
	<a href="community/?page=1&order=ratings&direction=desc">
	<p style="color:Tomato;text-align:center;" class="vimh">
	 Community
	<img width="36px" style="vertical-align:middle;"  src="/images/community.svg"/>
	Catalog
	<br/>
	<small style="text-align:center;" class="chop">
	Extensionless Users' Boilerplate Pack Gallery with a 50 MB limit for the uploaded file
	</small>
	</p>
	</a>
	<div class="row">


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



	$sql = 
	"SELECT boilpack.ExProID, boilpack.ID, boilpack.DateTime, boilpack.Username, boilpack.CountryID, boilpack.DonateUrl, Count(ratings.ID)
	FROM boilpack
	LEFT JOIN ratings ON boilpack.ID= ratings.ForID
	GROUP BY ID
	ORDER BY Count(ratings.ID) DESC
	LIMIT 19"
	;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  // output data of each row
	  $rows = $result->fetch_all(MYSQLI_ASSOC);
	  for($i=0; $i<19 ; $i++){
	  if($i==0) 
	  {
		  echo '
		<div class="col-md-12 my-nav-tab-a" style="
		padding:5px;
		color:gray;
		text-align: center;
		position: relative;
		text-overflow: ellipsis; 
		white-space: nowrap;
		overflow: hidden;"';
		}
	  else if($i<3) 
	  echo '
		<div class="col-md-6 my-nav-tab-a" style="
		padding:5px;
		color:gray; 
		text-align: center;
		position: relative;
		display:none;
		text-overflow: ellipsis; 
		white-space: nowrap;
		overflow: hidden;"';
		else echo '
		<div class="col-md-3 my-nav-tab-a" style="
		padding:5px;
		color:gray; 
		text-align: center;
		position: relative;
		display:none;
		text-overflow: ellipsis; 
		white-space: nowrap;
		overflow: hidden;"'; 
		echo 'id="rownum'. $i .'">
		<br/>
		<small><small class="chop">
		<b>';
		
		if($i==0)
		{
			echo'<img width="12px" src="/images/trophy.svg"/>';
		}
		if($i!==18) echo ' # ' . $i + 1;
		echo '</b>';
		if($i==0) echo ' ranking </small></small>
		<hr/>
		<br/>
		
		<span class="vimh" title="' . $rows[$i]["Count(ratings.ID)"] . ' likes"> 
		' . $rows[$i]["Count(ratings.ID)"] . '<img style="vertical-align:middle;" width="27px" src="/images/ranking.svg"/>
		<a href="/x/?username=' . $rows[$i]["Username"] . '">' . $rows[$i]["Username"] . '</a>
		</span>
		
		<br/>
		<small class="chop">';
		else echo '</small></small>
		<hr/>
		<br/>
		
		<span class="vimh" title="' . $rows[$i]["Count(ratings.ID)"] . ' likes"> 
		' . $rows[$i]["Count(ratings.ID)"] . '<img style="vertical-align:middle;" width="18px" src="/images/like.svg"/> 
		
	
		<a href="/x/?username=' . $rows[$i]["Username"] . '">' . $rows[$i]["Username"] . '</a>
		</span>
		
		<br/>
		<small class="chop">';
		if($i==0){
			echo '
		
		 
		<small title="Updated on: ' .$rows[$i]["DateTime"].'">' .$rows[$i]["DateTime"].'
		</small>
		| <span title="Country: ' .$rows[$i]["CountryID"] . '" class="flag-icon flag-icon-'. strtolower($rows[$i]["CountryID"]).'"></span>
		</small>
		<br/>
		<small class="chop"><a href="community/download.php?ID='.$rows[$i]["ID"].'" target="_blank"> ↓ download
		</a></small>
		|
		<small class="chop"><a href='.$rows[$i]["DonateUrl"].' target="_blank"> $  donate </a></small>	
		<br/>
		<br/>';
		}
		else if($i<3){
			echo '
		
		<small class="chop"><a href="community/download.php?ID='.$rows[$i]["ID"].'" target="_blank"> ↓ download
		</a></small>
		|
		<small class="chop"><a href='.$rows[$i]["DonateUrl"].' target="_blank"> $  donate </a></small><br/>
	<span title="Country: ' .$rows[$i]["CountryID"] . '" class="flag-icon flag-icon-'. strtolower($rows[$i]["CountryID"]).'"></span>
		<br/>
		<br/>
		';	
		} else if($i!==18) {
			echo '

	<span title="Country: ' .$rows[$i]["CountryID"] . '" class="flag-icon flag-icon-'. strtolower($rows[$i]["CountryID"]).'"></span>
			<br/>
		<small class="chop"><a href="community/download.php?ID='.$rows[$i]["ID"].'" target="_blank">↓</a></small>
		|
	<small class="chop"><a href='.$rows[$i]["DonateUrl"].' target="_blank">$</a></small>
	<br/>
	<br/>
	';
			
		}else{
			echo '<a href="community/?page=1&order=title&direction=desc">• • •</a>';
		}
		echo '</small>';
		
		
		echo '</div>
		';
	 if($i==0) echo '<div style="text-align:center;"><hr/><small id="community-readmore-show" class="chop link">► show top three</small><br/></div>';
	  
	  //if($i==1) echo '<br style="display:none" class="brshow" />';
	  
	  if($i==2) echo '<div class="brshow" style="display:none; text-align:center;"><hr/><small id="community-readmore-show-2" class="chop link">► show top twelwe</small><br/></div>';
	  
	  if($i==18) echo '<div class="brshow-2" style="display:none; text-align:center;">
	  <hr/>
	 
	  <small class="chop link"><a href="community/?page=1&order=ratings&direction=desc">show all → </a></small><br/></div>';


	}
	} else {
	  echo "0 results";
	}
	$conn->close();

	?>
	
	</div>
	<hr/>
	<div class="row">
	<p style="text-align:center;" class="chop">
	<small>
	SUPER RACE LIST
	</small>
	</p>
	</div>
	<div class="row">
	<div class="col-md-1">
	</div>
	<div class="col-md-10">

	<div class="row">
	
<div class="progress" style="padding-left:0px; background: linear-gradient(180deg, rgba(255,235,205,0.5) 90%, tomato 100%);">
<span title="Country: HR" class="flag-icon flag-icon-hr"></span>
  <div class="progress-bar vimh" role="progressbar" style="width: 55%; background-color: tomato ;"  aria-valuenow="55" aria-valuemin="55" aria-valuemax="100">55 *</div>
</div>
</div>
<br/>
<div class="row">

<div class="progress" style="padding-left:0px; background: linear-gradient(
180deg, rgba(255,235,205,0.5) 90%, tomato 100%);">
  <span title="Country: AU" class="flag-icon flag-icon-au"></span>
  <div class="progress-bar vimh" role="progressbar" style="width: 15%; background-color: tomato ;"  aria-valuenow="15"  aria-valuenow="15" aria-valuemax="100">15 *</div>
</div>
</div>
<br/>
<div class="row">
<div class="progress" style="padding-left:0px; background: linear-gradient(
180deg, rgba(255,235,205,0.5) 90%, tomato 100%);">
  <span title="Country: RO" class="flag-icon flag-icon-ro"></span>
  <div class="progress-bar vimh" role="progressbar" style="width: 9%; background-color: tomato ;" aria-valuenow="9" aria-valuemin="9" aria-valuemax="100">9 *</div>
</div>
</div>
	</div>
	
	</div>
	<hr/>
 </div>
	<div class="col-md-6">
	
	<p style="text-align:center;" class="vimh">
		<a href="/catalog/quickstart">Quickstart
		<img style="vertical-align:middle;"  width="28px" src="/images/quickstart.svg"/>
		Catalog</a>
		<br/>
		<small style="text-align:center;" class="chop">
		The Extensionless built-in Boilerplate Packs. Download the Zip files completely free
		</small>
	</p>
	<p class="vimh my-nav-tab-a" style="padding:5px;
	text-align: center;
    width: 75%;
    margin: 0 auto;
	margin-bottom: 18px;
    position: relative;">
	<br/>
	<small style="color:black;">cs • html • sql • pdf • doc • rtf html • xml • png • jpg • gif • pgn</small>
	<br/>
	<br/>
	<small style="color:tomato" id="quickstart-readmore-show" class="chop link">
	► show download details</small>
	<br/>
	<small class="chop" id="quickstart-readmore" style="display:none;">
	<br/>
		<span  class="link" id="show-boil">→ BoilBundle</span> • <span class="vimh">ZIP</span> | all<br/>
		<small id="boil-show" class="hide">
		<b>
		• • •
		</b>
		<br/>
		<a href="somezip.zip">
		| ↓ | BB.zip
		<br/>
		</a>
		<br/>
		</small>
		<span  class="link" id="show-pyck">→ PYCKa</span> • <span class="vimh">ZIP</span> | jpg, png, gif <br/>
		<small id="pyck-show" class="hide">
		<b>postcard.png</b> | postcard guidelines<br/>
		<b>og-image.png</b> | open graph image<br/>
		• • •
		<br/>
		<a href="somezip.zip">
		| ↓ | P.zip
		<br/>
		</a>
		<br/>
		</small>
		<span  class="link" id="show-scrap">→ ScrapTome</span> • <span class="vimh">ZIP</span> | pdf, doc<br/>
		<small id="scrap-show" class="hide">
		<b>glyphs.rtf</b> | ascii supported glyphs<br/>
		<b>cv.doc</b> | curriculum vitae<br/>
		<b>cv.pdf</b> | curriculum vitae<br/>
		<b>letter.doc</b> | cover letter<br/>
		<b>letter.pdf</b> | cover letter<br/>
		• • •
		<br/>
		<a href="somezip.zip">
		| ↓ | ST.zip
		<br/>
		</a>
		<br/>
		</small>
		<span class="link" id="show-mark">→ MarkUpper</span> • <span class="vimh">ZIP</span> |html, xml<br/>
		<small id="mark-show" class="hide">
		<b>index.html</b> | body head script link<br/>
		<b>books.xml</b> | random structure<br/>
		<b>rss.xml</b> | rss specification<br/>
		• • •
		<br/>
		<a href="somezip.zip">
		| ↓ | MU.zip
		<br/>
		</a>
		<br/>
		</small>
		<span class="link"  id="show-code">→ CodeIn</span> • <span class="vimh">ZIP</span> | js, cs, sql<br/>
		<small id="code-show" class="hide">
		<b>script.js</b> | vanilla javascript functions<br/>
		<b>queries.sql</b> | insert update select join<br/>
		<b>react.js</b> | react.js component class<br/>
		<b>db.php</b> | php database connection<br/>
		<b>jquery.min.js</b> | jquery minyfied<br/>
		<b>jquery.js</b> | jquery functions<br/>
		<b>class.php</b> | php class<br/>
		<b>class.cs</b> | c# class<br/>
		• • •
		<br/>
		<a href="somezip.zip">
		| ↓ | CI.zip
		<br/>
		</a>
		<br/>
		</small>
		<span  class="link" id="show-quirk">→ Quirkster</span> • <span class="vimh">ZIP</span> |  various </br/>
		<small id="quirk-show" class="hide">
		<b>joomla.xml</b> | joommla extension xml<br/>
		<b>macro.xlsm</b> | excel macro example<br/>
		<b>unity.cs</b> | a class for unity in c#<br/>
		<b>joomla.php</b> | joomla plugin php<br/>
		<b>unity.js</b> | a class for unity in js<br/>
		<b>font.ttf</b> | font example<br/>
		<b>font.otf</b> | font example<br/>
		• • •
		<br/>
		<a href="somezip.zip">
		| ↓ | Q.zip
		<br/>
		</a>
		<br/>
		</small>
		<span  class="link" id="show-zug">→ Zugzwang</span> • <span class="vimh">ZIP</span> | chess<br/>
		<small id="zug-show" class="hide">
		<b>joomla.xml</b> | joommla extension xml<br/>
		<b>macro.xlsm</b> | excel macro example<br/>
		<b>unity.cs</b> | a class for unity in c#<br/>
		<b>joomla.php</b> | joomla plugin php<br/>
		<b>unity.js</b> | a class for unity in js<br/>
		<b>font.ttf</b> | font example<br/>
		<b>font.otf</b> | font example<br/>
		• • •
		<br/>
		<a href="somezip.zip">
		| ↓ | Zz.zip
		<br/>
		</a>
		<br/>
		</small>
		<span  class="link" id="show-fav">→ Fav 0 Lit</span> • <span class="vimh">ZIP</span> | <img width="12px" src="/images/favolit.svg"/> various <br/>
		<small id="fav-show" class="hide">	
		<b>joomla.xml</b> | joommla extension xml<br/>
		<b>macro.xlsm</b> | excel macro example<br/>
		<b>unity.cs</b> | a class for unity in c#<br/>
		<b>joomla.php</b> | joomla plugin php<br/>
		<b>unity.js</b> | a class for unity in js<br/>
		<b>font.ttf</b> | font example<br/>
		<b>font.otf</b> | font example<br/>
		• • •
		<br/>
		<a href="somezip.zip">
		| ↓ | F0l.zip
		<br/>
		</a>
		<br/>
		</small>
		<br/>
		</small>
		<br/></p>
		<hr/>
		</div>
	 </div>
		 <div class="row">
			<?php include '../footer.php';?>
		 </div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$( document ).ready(function() {
    $("#myloader").css("display","none");
	$("#mybody").css("display","block");
	$(".mypopups").click(function(){
	alert(this.title);
	});

	$("#quickstart-readmore-show").click(function(){

	$rm=$("#quickstart-readmore");
	if($rm.css("display")==="none")  
	{
		$rm.css("display","inline");
		$(this).html("▼ <u>hide download details</u>");
		
		}
	else{
		$rm.css("display","none");
		$(this).text("► show download details");
	}
});
$("#community-readmore-show-2").click(function(){

	
	$rn3=$("#rownum3");
	$rn4=$("#rownum4");
	$rn5=$("#rownum5");
	$rn6=$("#rownum6");
	$rn7=$("#rownum7");
	$rn8=$("#rownum8");
	$rn9=$("#rownum9");
	$rn10=$("#rownum10");
	$rn11=$("#rownum11");
	$rn12=$("#rownum12");
	$rn13=$("#rownum13");
	$rn14=$("#rownum14");
	$rn15=$("#rownum15");
	$rn16=$("#rownum16");
	$rn17=$("#rownum17");
	$rn18=$("#rownum18");
	$rn19=$("#rownum19");
	$br=$(".brshow-2");
	if($rn3.css("display")==="none")  
	{
		$rn3.css("display","inline-block");
		$rn4.css("display","inline-block");
		$rn5.css("display","inline-block");
		$rn6.css("display","inline-block");
		$rn7.css("display","inline-block");
		$rn8.css("display","inline-block");
		$rn9.css("display","inline-block");
		$rn10.css("display","inline-block");
		$rn11.css("display","inline-block");
		$rn12.css("display","inline-block");
		$rn13.css("display","inline-block");
		$rn14.css("display","inline-block");
		$rn15.css("display","inline-block");
		$rn16.css("display","inline-block");
		$rn17.css("display","inline-block");
		$rn18.css("display","inline-block");
		$rn19.css("display","inline-block");
		$br.css("display","block");
		$(this).html("▼ <u>hide top twelwe</u>");
		}
	else{
		$rn3.css("display","none");
		$rn4.css("display","none");
		$rn5.css("display","none");
		$rn6.css("display","none");
		$rn7.css("display","none");
		$rn8.css("display","none");
		$rn9.css("display","none");
		$rn10.css("display","none");
		$rn11.css("display","none");
		$rn12.css("display","none");
		$rn13.css("display","none");
		$rn14.css("display","none");
		$rn15.css("display","none");
		$rn16.css("display","none");
		$rn17.css("display","none");
		$rn18.css("display","none");
		$rn19.css("display","none");
		$br.css("display","none");
		$(this).text("► show top twelwe");
	}
});
$("#community-readmore-show").click(function(){

	
	$rn1=$("#rownum1");
	$rn2=$("#rownum2");
	$br=$(".brshow");
	if($rn1.css("display")==="none")  
	{
		$rn1.css("display","inline-block");
		$rn2.css("display","inline-block");
		$br.css("display","block");
		$(this).html("▼ <u>hide top three</u>");
		
		}
	else{
		$rn1.css("display","none");
		$rn2.css("display","none");	
		$br.css("display","none");
		$(this).text("► show top three");
		
		
			
	$rn3=$("#rownum3");
	$rn4=$("#rownum4");
	$rn5=$("#rownum5");
	$rn6=$("#rownum6");
	$rn7=$("#rownum7");
	$rn8=$("#rownum8");
	$rn9=$("#rownum9");
	$rn10=$("#rownum10");
	$rn11=$("#rownum11");
	$rn12=$("#rownum12");
	$rn13=$("#rownum13");
	$rn14=$("#rownum14");
	$rn15=$("#rownum15");
	$rn16=$("#rownum16");
	$rn17=$("#rownum17");
	$rn18=$("#rownum18");
	$rn19=$("#rownum19");
	$br2=$(".brshow-2");
	
		$rn3.css("display","none");
		$rn4.css("display","none");
		$rn5.css("display","none");
		$rn6.css("display","none");
		$rn7.css("display","none");
		$rn8.css("display","none");
		$rn9.css("display","none");
		$rn10.css("display","none");
		$rn11.css("display","none");
		$rn12.css("display","none");
		$rn13.css("display","none");
		$rn14.css("display","none");
		$rn15.css("display","none");
		$rn16.css("display","none");
		$rn17.css("display","none");
		$rn18.css("display","none");
		$rn19.css("display","none");
		$("#community-readmore-show-2").text("► show top twelwe");	
		$br2.css("display","none");		
		}
});
	$("#show-code").click(function(){
		if($("#code-show").css("display")=="none")
		{
			$("#show-code").text("↓ CodeIn");
			$("#code-show").css("display","inline");
		}else{
			$("#show-code").text("→ CodeIn");
			$("#code-show").css("display","none");
		}
	});
	$("#show-scrap").click(function(){
		if($("#scrap-show").css("display")=="none")
		{
			$("#show-scrap").text("↓ ScrapTome");
			$("#scrap-show").css("display","inline");
		}else{
			$("#show-scrap").text("→ ScrapTome");
			$("#scrap-show").css("display","none");
		}
	});

	$("#show-pyck").click(function(){
		if($("#pyck-show").css("display")=="none")
		{
			$("#show-pyck").text("↓ PYCKa");
			$("#pyck-show").css("display","inline");
		}else{
			$("#show-pyck").text("→ PYCKa");
			$("#pyck-show").css("display","none");
		}
	});
	$("#show-mark").click(function(){
		if($("#mark-show").css("display")=="none")
		{
			$("#show-mark").text("↓ MarkUpper");
			$("#mark-show").css("display","inline");
		}else{
			$("#show-mark").text("→ MarkUpper");
			$("#mark-show").css("display","none");
		}
	});
	$("#show-boil").click(function(){
		if($("#boil-show").css("display")=="none")
		{
			$("#show-boil").text("↓ BoilBundle");
			$("#boil-show").css("display","inline");
		}else{
			$("#show-boil").text("→ BoilBundle");
			$("#boil-show").css("display","none");
		}
	});
	$("#show-fav").click(function(){
		if($("#fav-show").css("display")=="none")
		{
			$("#show-fav").text("↓ Fav 0 Lit");
			$("#fav-show").css("display","inline");
		}else{
			$("#show-fav").text("→ Fav 0 Lit");
			$("#fav-show").css("display","none");
		}
	});
	$("#show-zug").click(function(){
		if($("#zug-show").css("display")=="none")
		{
			$("#show-zug").text("↓ Zugzwang");
			$("#zug-show").css("display","inline");
		}else{
			$("#show-zug").text("→ Zugzwang");
			$("#zug-show").css("display","none");
		}
	});
	$("#show-quirk").click(function(){
		if($("#quirk-show").css("display")=="none")
		{
			$("#show-quirk").text("↓ Quirkster");
			$("#quirk-show").css("display","inline");
		}else{
			$("#show-quirk").text("→ Quirkster");
			$("#quirk-show").css("display","none");
		}
	});

});
</script>
	</body>
</html>
