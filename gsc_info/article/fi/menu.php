
			<ul>

				<a href="?page=home&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="home"){echo "current";}?>><li>Yleistä</li></a>
<!--
			<a href="http://amanda.dc.turkuamk.fi/~Tiina.Ferm/GCS/" class="current"><li>Yleistä</li></a>
-->			
				<a href="?page=instruction&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="instruction"){echo "current";}?>>
					<li>Aineisto</li></a>
				<a href="?page=maintenance&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="maintenance"){echo "current";}?>>
					<li>Ylläpito</li></a>
				<a href="?page=term&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="term"){echo "current";}?>>
					<li>Käyttöehdot</li></a>
				<a href="?page=contact&amp;lang=<?php echo $_GET['lang'];?>"class=<?php if($_SESSION['page']=="contact"){echo "current";}?>>
					<li>Yhteystiedot</li></a>
				<a href="?page=link&amp;lang=<?php echo $_GET['lang'];?>" class=<?php if($_SESSION['page']=="link"){echo "current";}?>>
					<li>Linkit</li></a>
			</ul>	
