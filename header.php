	<?php
if($_SERVER['REQUEST_URI']=="/catalog/" || $_SERVER['REQUEST_URI']=="/catalog/quickstart/" || str_contains($_SERVER['REQUEST_URI'],"/catalog/community/") || str_contains($_SERVER['REQUEST_URI'],"/x/"))
	{
		$cat="<span class='my-nav my-nav-tab-a' title='Catalog → catalog.extensionless.com'>
		<img style='vertical-align:middle;margin-top:-3px;' width='15px' src='/images/catalog.svg'/>
		<b>
		catalog
		</b>
		</span>";
	}
	else
	{
		$cat="<a style='border: 1px solid salmon ;' class='my-nav my-nav-tab' title='Catalog → catalog.extensionless.com' href='/catalog'>
		<img style='vertical-align:middle;margin-top:-3px;' width='15px' src='/images/catalog-active.svg'/>
		catalog
		</a>";
	}
if($_SERVER['REQUEST_URI']=="/")
{
	$hom="
	<span class='my-nav my-nav-tab-a' title='Home → extensionless.com'>
	<img style='vertical-align:middle;margin-top:-3px;' width='15px' src='/images/home.svg'/>
	<b>
	home
	</b>
	</span>
	";
	}
	else
	{
	$hom="
	<a  style='border: 1px solid salmon ;' class='my-nav my-nav-tab' title='Home → extensionless.com' href='/'>
	<img style='vertical-align:middle;margin-top:-3px;' width='15px' src='/images/home-active.svg'/>
	home
	</a>";
	}
if($_SERVER['REQUEST_URI']=="/help/")
{
		$hel=" 
		<span class='my-nav my-nav-tab-a' title='Help → help.extensionless.com'>
		<img width='15px' src='/images/help.svg'/>
		<b>
		help
		</b>
		</span>";
	}
	else
	{
		$hel="
		<a  style='border: 1px solid salmon ;' class='my-nav my-nav-tab' title='Help → help.extensionless.com' href='/help'>
		<img width='15px' src='/images/help-active.svg'/>
		help
		</a>";
	}
	echo "

	<div style='text-align:left;'>
	<small style='color:bisque; border: 1px solid bisque ;border-top: 0px; border-bottom-left-radius:6px;  border-bottom-right-radius:6px;border-top-right-radius:3px;border-top-left-radius:3px; padding:4px; 
background: linear-gradient(180deg, rgba(255,235,205,0.5) 0%, BlanchedAlmond 100%);position:absolute; top:0px;right:15%;'>
	|
	<a style='vertical-align:middle; margin-left:5px;' title='Extensionless Facebook Page' target='_blank' href='https://www.facebook.com/TheExtensionless'>
	<img width='22px' src='/images/facebook.svg'/>
	</a>
	|
	<a style='vertical-align:middle; margin-left:5px;'  title='Extensionless Twitter Profile - @ex10sionless' target='_blank'  href='https://www.twitter.com/ex10sionless/'>
	<img width='22px' src='/images/x.svg'/>
	</a>
	|
	<a style='vertical-align:middle; margin-left:5px;' target='_blank'   title='Extensionless Instgram Profile - @extensionless'  href='https://www.instagram.com/extensionless/'>
	<img width='22px' src='/images/instagram.svg'/>
	</a>
	|
	<a style='vertical-align:middle; margin-left:5px;' target='_blank'   title='Extensionless YouTube Channel' href='https://www.youtube.com/@extensionless/'>
	<img height='22px' src='/images/youtube.svg'/>
	</a>
	|
	<a style='vertical-align:middle; margin-left:5px;' target='_blank' title='Extensionless LinkedIn Profile' href='https://www.linkedin.com/company/extensionless/'>
	<img width='22px' src='/images/linkedin.svg'/>
	</a>
	|
	<a style='vertical-align:middle; margin-left:5px;' target='_blank' href='mailto:hi@extensionless.com' title='E-Mail To - hi@extensionless.com' style='display:inline;' >
	<img  width='22px' style='display:inline'  src='/images/email.svg'/>
	</a>
	|
	</small>
	<br/> 
	<br/> 
	<a href='/'>
	<h1 style='color:black; vertical-align:middle;' class='vimh'>extensionless<img style='display:inline; vertical-align:middle; width:69px;' src='/images/extensionless-logo.svg'/>
	</h1>
	<small class='x10big my-nav-tab-c'>BETA</small>
	<div>
	<hr/>
	<p class='vimh'>
	<small>
	$hom
	$cat
	$hel
	</small>
	</p>
	</div>";
	?>