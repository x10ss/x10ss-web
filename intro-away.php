    <div class="col-md-8">
	<h2 style="text-align:center;">
	a free <img style="vertical-align:middle;" height="25px" src="/images/file.svg"/>
	file
	extension
	<img style="vertical-align:middle;" width="30px" src="/images/utility.svg"/>
	utility
	for <img style="vertical-align:middle;" width="25px" src="/images/windows.svg"/>
	windows
	</h2>
	<hr/>
	<a id="download-current-setup-version" style="display:inline;" title="download setup.exe" href="https://download.extensionless.com/setup.exe">
		<p style="padding:17px; background-color: tomato; text-align:center; color:white;" class="chop">
			<img title="download" style="vertical-align:middle; width:25px;" src="/images/download.svg"/>
			download setup.exe
			<small class="chop" style="color:white;" id="x10version"></small>
			 | 
			<small style="color:white;" class="chop" id="x10ssssize">
			<?php
			$myfile = 'setup.exe'; 
			echo substr(filesize($myfile)/1000000,0,3) . ' megabytes'; 
			?>
			</small>
			<small><small><small>(initial download)</small></small></small>
		</p>
	</a>
	<hr/>
	</div>