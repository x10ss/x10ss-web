		<hr/>
		<?php 
	if($_SERVER['HTTP_HOST']=="download.extensionless.com" && $_SERVER['REQUEST_URI']=="/") $ic="↓"; else $ic="•";
	?>

	</div>
	<div class="row">
	<p style="text-align: center;" class="vimh" id="my-share">
	<img style="vertical-align: middle;" src="https://www.extensionless.com/images/share-alt-square.svg" width="27px"/> SHARE</p>
	<div id="my-addtoany" style="display:none;">
	<div class="a2a_kit a2a_kit_size_27 a2a_default_style" id="my_centered_buttons">
	<a title="share via pinterest" class="a2a_button_pinterest"></a>
	<a title="share via reddit" class="a2a_button_reddit"></a>
	<a title="share via whatsapp" class="a2a_button_whatsapp"></a>
	<a title="share via facebook messenger" class="a2a_button_facebook_messenger"></a>
	<a title="share via facebook" class="a2a_button_facebook"></a>
	<a title="share via twitter" class="a2a_button_twitter"></a>
	<a title="share via linkedin" class="a2a_button_linkedin"></a>
	<a title="share via tumblr" class="a2a_button_tumblr"></a>
	</div>
	<br/>
	</div>
	<script async src="https://www.extensionless.com/ata.js">v</script>
	<script>var a2a_config = a2a_config || {};
	a2a_config.icon_color = "tomato";</script>
	<style type="text/css">
	#my_centered_buttons { display: flex; justify-content: center; }
	#my-share{cursor:pointer;}
	</style>
	</div>
<hr/>
		<div clas="row">
	<p class="chop" style="text-align: center;">
	<u>
	 | 
	<a href="https://www.extensionless.com/tospp" title="service terms and conditions/+/|► -(D-~-((•○. win. app. •○ )|||=I+I=-|_I|I|">
	terms of use</a>
	 |
	<a href="https://www.extensionless.com/tospp" title="x₁₀s users data privacy policy">
	privacy policy
	</a>
	 |	
	</u>
	</p>
	<hr/>
	</div>
	<p class="chop" style="text-align:center;">
	<small class="chop">
	<span class="vimh">2024</span>
	&copy; extensionless
	</small>
	</p>
	<br/>
	<hr/><p style="text-align: center;"><?php echo $ic?></p>
	<script>
	var ms = document.getElementById("my-share");
	var ata = document.getElementById("my-addtoany");
	ms.onclick = function(){
	if(ata.style.display == "none")
	ata.style.display = "block";
	else ata.style.display = "none";
	}
	</script>
	