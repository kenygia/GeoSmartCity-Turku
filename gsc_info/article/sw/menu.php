		
				
			<ul>

				<a href="?page=home&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="home"){echo "current";}?>><li>Allmänt</li></a>

			<!--
			<a href="http://amanda.dc.turkuamk.fi/~Tiina.Ferm/GCS/" class="current"><li>Allmänt</li></a>
			-->
				<a href="?page=instruction&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="instruction"){echo "current";}?>>
					<li>Materialet</li></a>
				<a href="?page=maintenance&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="maintenance"){echo "current";}?>>
					<li>Underhåll</li></a>
				<a href="?page=term&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="term"){echo "current";}?>>
					<li>Användarvillkor</li></a>
				<a href="?page=contact&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="contact"){echo "current";}?>>
					<li>Kontakt</li></a>
				<a href="?page=link&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="link"){echo "current";}?>>
					<li>Länkar</li></a>
			</ul>

