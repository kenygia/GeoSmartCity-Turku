<!doctype html>
<html>
    <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
    
    <title>Green Routing</title>
    </head>

    <body>
    
    <!-- HEADER -->
    	<header>
        	<nav>
                <a id="logo">Logo</a>
                <a id="login">Login</a>
            </nav>
        </header>
        
    <!-- BODY -->
        <div class="container">
        
        	
    <!-- SEARCH FORM -->
            	<div class="col-md-4">
                	<div id="form">
                    	<form id="searchForm">
                    	<input type="text" class="fields" placeholder="From...">
                        <input type="text" class="fields" placeholder="Destination...">
                        <label for="passengers" id="lpass">Number of passengers</label>
                        <input type="text" id="passengers">
                        <div>
                        	<label for="passengers" id="lpass">NOW</label>
                        	<label for="passengers" id="lpass">LATER</label>
                        </div>
                        
                        <input type="button" value="Search">
                    </form>
                    <button id="pbutton">Preferences</button>
                    <div id="preferences">
                    	
                        <div class="save">
                        	<img>
                            <img>
                        </div>
                        <div>  
                            <div class="distance">
                                <label>Max. walking distance (Km):</label>
                                <input type="text" class="text">
                            </div>
                            <div class="distance">
                                <label>Walking Speed:</label>
                                <input type="text" class="text">
                            </div>
                            <div class="distance">
                                <label>Max. biking distance (Km/h):</label>
                                <input type="text" class="text">
                            </div>
                            <div class="distance">
                                <label>Biking speed</label>
                                <input type="text" class="text">
                            </div>
                        </div>
                      
                        <div class="transport">
                        	 <div class="distance">
                                <label>Max. walking distance (Km):</label>
                                <input type="text" class="text">
                            </div>
                            <div class="distance">
                                <label>Walking Speed:</label>
                                <input type="text" class="text">
                            </div>
                            <div class="distance">
                                <label>Max. biking distance (Km/h):</label>
                                <input type="text" class="text">
                            </div>
                            <div class="distance">
                                <label>Biking speed</label>
                                <input type="text" class="text">
                            </div>
                        </div>
                    </div>
                    </div>
                	
                </div>
                
                 
     <!-- SIDE BLOCK CONTENT -->
                <div class="col-md-8">
                	<div id="content">
                    
                    	<div id="title">
                            <h1>Southwest Finland Routing</h1>
                            <p>Discover the journey to your destinaton. </p>
                        </div>
                        
                        <div id="infoBlocks">
                        	<p id="block1">Based on your search and preference you set, different possible routes are searched. You can see the
                             details of your journey for bus, car, bike and walking. You can also be able to view your route in map.Route which
                              does not fit your preference is simply discarded and not displayed in the result</p>
                        	<p id="block2">Based on your preferance and your journey, the amount of carbondioxide(co2) produced is calculated.
                             It is indicated by the tree - one tree indicator indicates that one healthy tree is required to compensate the 
                             carbon you have emitted throughout your journey. Calculation on your public bus journey is based on 18persons/bus
                              assumption.There is no carbon emmision on bike and walking route.</p>
                        </div>
                    	
                    </div>
                </div>
            
            </div>
        
    <!-- FOOTER -->  
           
           <div class = "navbar navbar-default navbar-fixed-bottom" id="footer">
               
           </div>
    
    </body>
</html>