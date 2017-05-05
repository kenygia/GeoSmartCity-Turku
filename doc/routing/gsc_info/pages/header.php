
<?php

$current=$_SESSION["page"];
?>
<header>
		<article id="logo">
			<a href="?page=home&amp;lang=<?php echo $_GET['lang'];?>"></a>
		</article>
		<article id="lang">
			<ul>
            	<a href="?page=<?php echo $current.'&amp;lang=fi';?>"><li>Suomi |</li></a>
                <a href="?page=<?php echo $current.'&amp;lang=sw';?>"><li>Svenska |</li></a>
				<a href="?page=<?php echo $current.'&amp;lang=en';?>"><li>English</li></a>
			</ul>
		</article>
	</header>