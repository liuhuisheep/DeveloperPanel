<?php

?>
<link href="<?php echo $domain ?>/stylesheets/overview.css#<?php echo rand() ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $domain ?>/scripts/tabexchange.js"></script>
<div id="overview_wrapper">
	<div id="tabindex">
		<ul>
			<li class="curtab" target="intro" onclick="setTab('tabindex',0,'<?php echo $domain ?>/overview/notebook.html')"><img src="<?php echo $domain ?>/overview/images/notebook.png" /></li>
			<li target="intro" onclick="setTab('tabindex',1,'<?php echo $domain ?>/overview/calculator.html')"><img src="<?php echo $domain ?>/overview/images/calculator.png" /></li>
			<li target="intro" onclick="setTab('tabindex',2,'<?php echo $domain ?>/overview/folder.html')"><img src="<?php echo $domain ?>/overview/images/folder.png" /></li>
			<li target="intro" onclick="setTab('tabindex',3,'<?php echo $domain ?>/overview/tools.html')"><img src="<?php echo $domain ?>/overview/images/tools.png" /></li>
			<div class="cutoffline"></div>
		</ul>
	</div>
	<div id="tabcnt">
		<iframe id="intro" name="intro" width="700px" height="500px" frameborder="0" scrolling="no" src="<?php echo $domain ?>/overview/notebook.html"></iframe>
	</div>
</div>