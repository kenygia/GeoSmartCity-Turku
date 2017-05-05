<div id="wrapper">
		<div id="content">
			<section>
			<?php
			if($_SESSION["page"]=="home"){
				include("article/".$_GET["lang"]."/"."competition.php");
				include("article/".$_GET["lang"]."/"."area.php");
			}else if($_SESSION["page"]=="link"){
				include("article/".$_GET["lang"]."/"."link.php");
			}else if($_SESSION["page"]=="instruction"){
				include("article/".$_GET["lang"]."/"."instruction.php");
			}else if($_SESSION["page"]=="maintenance"){
				include("article/".$_GET["lang"]."/"."about.php");
				include("article/".$_GET["lang"]."/"."version.php");
			}else if($_SESSION["page"]=="term"){
				include("article/".$_GET["lang"]."/"."term.php");
			}else if($_SESSION["page"]=="contact"){
				include("article/".$_GET["lang"]."/"."contact.php");
				//include("article/".$_GET["lang"]."/"."feedback.php");
				include("Database/userfeedback.php");
			}
			?>
			
			</section>