			<article>
			
				<p class="heading1">Parkeringsplatser material</p><br>
			<p>Parkeringsplatser material är tillgänglig som databas dump (MySQL och SQL Server), metadata och användnings instruktioner.</p>
		<br>	<p>Parkeringsplatser innehåller park_lots som har åtmistone en segment med åtminstone en ingång för bilar. 
				Varje ingång (och utgång) har adress, latitude och longitude.<br><br>
			Varje parkeringsplats består en park_lot som har åtminstone ett segment med åtminstone en ingång för bilar. Varje ingång (och utgång) har sin egen adress och geographisk position, latitude och longitude.<br>
Dessutom kan det finnas utgångar där man endas kommer fram till fots. Dessa har också en egen adress för att kunna spara på stegen dit man är på väg.<br>
Ändamålet med segmentering av parkeringsområden är att kunna avgränsa delområden med olika egenskaper eller naturlig placering, såsom i olika våningar eller i olika garagen. Om t.ex. höjden är begränsad på en del av området bildas två segment med olika höjd. En möjlig förbindelse mellan de olika segmenten är också angiven för ifall att det närmaste delområdet är fullsatt.<br> 
För att underlätta sökning av specifika platser, såsom varmt garage om vintern, uttag för motorvärmare, för laddning av t.ex. elbil och elcykel eller var finns det rum för husbil eller rullstol? Dessa kan sökas systematiskt, men det kan också finnas egenskaper som operatören själv kan namnge vid behov.
 
			<br>
			<image border="1" width=50% height=70% src="images/park_lot.png">
			</p>
	</article>