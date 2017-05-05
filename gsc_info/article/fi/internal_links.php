				
	   <article class="card">
            <div class="card_thumb"> 
                
                <a href="http://geosmartcity.dc.turkuamk.fi/mockup/" target="_blank">
                    <img src="images/download.png">
                    <div class="tex">
                        Parking Places mockup
                     </div>
                </a>
            </div>
            <div class="card_body">
                <div class="description">
                Check out our parking places mockup!
                </div>
            </div>
        </article>
		
        <!--<article class="card">
        	<div class="card_thumb"> 
            	
            	<a target="_blank">
                	<img src="images/download.png">
                	<div class="tex">
                		Parkkipaikkaaineisto
                     </div>
                </a>
            </div>
            <div class="card_body">
            	<div class="description">
                Mysql dump
                </div>
            </div>
        </article>
        
        <article class="card">
        	<div class="card_thumb">
            	
            	<a target="_blank">
                	<img src="images/download.png">
                    <div class="tex">
                    	OSM datafile
                    </div>
                </a>
            </div>
            <div class="card_body">
            	<div class="description">
                OpenStreetMap tiedosto Turun alueesta
                </div>
            </div>
        </article>-->
    
     <article class="card3">
        	<div class="card_thumb3">
                    <div class="tex3"> 
                        Kerro meille tyypillisestä työmatkastasi

                    </div>
            </div>
            <div class="card_body3">
            	
                    <form id="form1" method="post" action="Database/questionaire.php">
                    
                    
                	<div class="question">
                        <label for="age">Ikä:</label>
                        <input type="text" id="age" name="age" readonly>
                   	    <div id="ageslider" class="slider"></div>
                	</div>
                    
                    
                    <div class="question">
                        <label>Sukupuoli:</label><br>
                    	<div id="gender">
                        	
                            <label>Mies</label>
                            <input type="radio" id="male" name="gender" value="male" checked>
                            
                            
                            <label>Nainen</label>
                            <input type="radio" class="gender" name="gender" value="female">
                            
                        </div>
                    </div>
                    
                    
                    
                    <div class="question">
                        <label>Työmatkan syy</label>
                    	<div class="radios">
                            <input type="radio" name="occupation" value="student">Opiskelu<br>
                            <input type="radio" name="occupation" value="work">Työ<br>
                            <input type="radio" id="occupation" name="occupation" value="other" checked>Muu
                        </div>
                    </div>
                    
                    
                    <div class="question">
                        <label for="distance">Työmatkan pituus yhteen suuntaan (keskimäärin) km</label>
                        <input type="text" id="distance" name="distance" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    	<div id="distanceslider" class="slider"></div>
                    </div>
                    
                    
                     <div class="question">
                        <label>Tavallisimmat kulkuvälineet yhden työmatkan aikana (matkaketju)</label>
                    	<div class="radios">
                            <input type="checkbox" name="walk" value="walk">Kävely<br>
                            <input type="checkbox" name="bike" value="bike">Pyörä<br>
                            <input type="checkbox" name="car" value="car">Henkiloauto<br>
                            <input type="checkbox" name="bus" value="bus">Bussi<br>
                            <input type="checkbox" name="train" value="train">Juna<br>
                            <input type="checkbox" id="other" name="other" value="other" checked>Muu
                        </div>
                    </div>
                    
				
	                    
                    <input type="submit" value="Send" id="send" name="send">
						
                    <a id="message" href="../result" target=_blank></a>
					
		
				
                    </form>

			               
            </div>
        </article>
    
    
    
    
    
    
    
    
    <!--<div id="internal_links">
				
		<div class="links">
			<article class="link_download">
				<a href="http://fi.okfn.org/" target="_blank">
				<img src="images/download.png" style="height: 35px; width: 90px;"></a>
			</article>
			
			<article class="link_article">
				<a href="http://fi.okfn.org/" target="_blank"><u>parkkipaikkaaineisto</u></a>
				<br>
				<p><b>Mysql dump</span></p></b><br>
			</article>
			
			</div>
		
		<div class="links">	
			<article class="link_download">
				<a href="http://openstreetmap.org/" target="_blank">
				<img src="images/download.png" style="height: 35px; width: 90px;">
			</article>
			
			<article class="link_article">
				<a href="http://openstreetmap.org/" target="_blank"><u>OSM datafile</u></a>
				<br>
				<p><b>OpenStreetMap tiedosto Turun alueesta</b></p>
				
			</article>
	
		</div>
	</div>-->