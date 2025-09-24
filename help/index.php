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
    <meta name="description" content="extensionless help"/>
    <meta name="author" content="Lovre Šimunović"/>
	<title>Help</title>
	<link rel="stylesheet" type="text/css" href="../css/x10.css"/>
	<link href="css/flag-icon.css" rel="stylesheet">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<meta property="og:url" content="https://www.extensionless.com"/>
	<meta property="og:image" content="https://www.extensionless.com/extensionless.jpg"/>
	<meta property="og:title" content="extensionless help"/>
	<meta property="og:description" content="extensionless help"/>
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
		<?php include '../header.php';?>
		<?php include '../where-am-i-navigation.php';?>
	</div>
	<div class="row">
		<h2 style="text-align:center;"><img width="36px" src="/images/help.svg"> help</h2>
	</div>
	<hr/>
	<div class="row">
<div class="col-md-8">
 <div class="video-container">

	<video id="videoHelp" autoplay="" controls="" style="width: 100%;">  
		<source src="https://extensionless.com/videos/extensionless-test.mp4" type="video/mp4" />
	</video>
  </div>
</div>
<div class="col-md-4">
</br>
<h3 style="text-align:center" class="chop">
faq
<img src="https://www.extensionless.com/images/forum.svg" style="vertical-align:top;" width="25px"/>
</h3>
	<p id='Howtoinstallrunanduninstall' class='link chop' style='text-align:center;'>
	► How to install run and uninstall
	</p>
	<small class='chop' id='Howtoinstallrunanduninstallshow' style='display:none'>
	<p>Install from <a href="https://download.extensionless.com">download.extensionless.com</a> or download the setup.exe file <a href="https://download.extensionless.com/setup.exe">here</a>.</p><p>When you install the app you'll find the shorcut on your desktop and programs under start... If you're having troubles running the app dowload <a href="https://download.extensionless.com/pq.application">this file</a>.</p><p>You can uninstall the app by going to your add/remove programs Windows menu.</p><p>View <a href="https://www.download.extensionless.com/publish.htm">publish details</a>...</p>
	</small>
	<script>
	
	
	$('#Howtoinstallrunanduninstall').click(function (){
		setCurTime6();
		if($('#Howtoinstallrunanduninstallshow').css('display')=='none')
		{
		$(this).html('▼ <u>How to install run and uninstall</u>');
		$('#Howtoinstallrunanduninstallshow').css('display','inline');
		}
		else
		{
			$(this).html('► How to install run and uninstall');
			$('#Howtoinstallrunanduninstallshow').css('display','none');
		
		}
	});
	</script>
	
	<p  id='Myaccountandexhibit' class='link chop' style='text-align:center;'>
	► My account and exhibit
	</p>
	<small class='chop' id='Myaccountandexhibitshow' style='display:none'>
	<p>To have your boilerplate pack exhibit zip file showcased under the Community Catalog in:</p>
<ul>
<li> your app > catalog > community</li>
<li><a href="https://www.catalog.extensionless.com" >catalog.extensionless.com</a> (if in top 3)</li>
<li><a href="https://catalog.extensionless.com/community/">catalog.extensionless.com/community/</a></li>
</ul>
<p>you need to create your Extensionless profile <b>in your Windows Extensionless installation</b> under "username" > account > create account... afterwards click the <b>exhibit</b> link in the same menu and upload the file.
</p>
<p><u>NOTE:</u><br/>Files from the <b>c:\users\user\documents\abc</b> are ziped and uploaded to the Extensionless.com server... The file limit in <b>MB (MegaByetes) is 50</b>.</p>
	</small>
	<script>
	
	
	$('#Myaccountandexhibit').click(function (){
		setCurTime12();
		if($('#Myaccountandexhibitshow').css('display')=='none')
		{
		$(this).html('▼ <u>My account and exhibit</u>');
		$('#Myaccountandexhibitshow').css('display','inline');
		}
		else
		{
			$(this).html('► My account and exhibit');
			$('#Myaccountandexhibitshow').css('display','none');
		
		}
	});
	</script>
	
	<p onClick="setCurTime12()" id='Howtochooseafileextensionforthenewfilemenuandtemplateit' class='link chop' style='text-align:center;'>
	► How to choose a file extension for the new file menu and template it
	</p>
	<small class='chop' id='Howtochooseafileextensionforthenewfilemenuandtemplateitshow' style='display:none'>
	<p>Go to the switchbox find the file extension you need and click the radio/checkbox to enable the file in the new menu.</p>
<p>To template click the plus icon and find the boilerplate file. Now every new file of that extension you create will have the selected file's content included in itself. For example select a html file with html, body, head, link, script... tags included. Type on from that, not from scratch.</p>
	</small>
	<script>
	
	
	$('#Howtochooseafileextensionforthenewfilemenuandtemplateit').click(function (){
	setCurTime15();
		if($('#Howtochooseafileextensionforthenewfilemenuandtemplateitshow').css('display')=='none')
		{
		$(this).html('▼ <u>How to choose a file extension for the new file menu and template it</u>');
		$('#Howtochooseafileextensionforthenewfilemenuandtemplateitshow').css('display','inline');
		}
		else
		{
			$(this).html('► How to choose a file extension for the new file menu and template it');
			$('#Howtochooseafileextensionforthenewfilemenuandtemplateitshow').css('display','none');
		
		}
	});
	</script>
	
	<p id='Howtocreatenewfileextensions' class='link chop' style='text-align:center;'>
	► How to create new file extensions
	</p>
	<small class='chop' id='Howtocreatenewfileextensionsshow' style='display:none'>
	Go to your Extensionless application then go to <b>Utility > Forge</b> and click in the new row's name column and fill out the rest of the info. Don't forget to choose an appliction to open the files with and select it in the switchbox and template it.
	</small>
	<script>
	
	
	$('#Howtocreatenewfileextensions').click(function (){
		setCurTime16();
		if($('#Howtocreatenewfileextensionsshow').css('display')=='none')
		{
		$(this).html('▼ <u>How to create new file extensions</u>');
		$('#Howtocreatenewfileextensionsshow').css('display','inline');
		}
		else
		{
			$(this).html('► How to create new file extensions');
			$('#Howtocreatenewfileextensionsshow').css('display','none');
		
		}
	});
	</script>
		


</div>
</div>
<hr/>
<div class="row">
	<h2>
	<a class="chop" target="_blank" href="/support" title="Support → support.extensionless.com">
	<p style="text-align:center; color:tomato;">
	<img src="/images/support.svg" style="vertical-align:top;" width="55px"/>
	<br/>
	support
	</p>
	</a>
	</h2>
</div>
<div class="row">
  <?php include '../footer.php';?>
</div>
	</div>
	</body>
		 	<script>
 		let vid = document.getElementById('videoHelp');
 		function setCurTime6() { 
  vid.currentTime=6;
}
function setCurTime12() { 
  vid.currentTime=12;
}
function setCurTime15() { 
  vid.currentTime=15;
}
function setCurTime16() { 
  vid.currentTime=16;
} 
 	</script>
</html>
