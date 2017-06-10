# Routing Client #



## /var/www/html/index.php ##
### - CDN : ###
#### *Leaflet* : ####
			<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css">
			<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>

#### *Jquery* : #### 
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
			<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

#### *Hammer* : #### 
			<script src="http://hammerjs.github.io/dist/hammer.js"></script>

#### *Bootstrap* : #### 
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

### - Local : ###
#### *CSS* : #### 
			<link rel="stylesheet" href="css/style.css">

#### *javascript* : #### 
			<script src="javascript/leaflet-routing-machine.js"></script>
			<script src="javascript/Control.Geocoder.js"></script>
			<script src="javascript/lang.js"></script>
			<script src="javascript/additionalFunctions.js"></script>
			<script type="text/javascript" src="javascript/map.js"></script>
			
#### *Images* : ####
			<img src="css/images/info.png" alt="Info" id="infoPic">
			<img src="css/images/comment.png" alt="Comment" id="commentPic">
	
## /usr/share/javascript/additionalFunctions.js ##
### - Local : ###
#### *Images* : ####
			return "'css/images/Walk-gray.png'";
			return "'css/images/Car-gray.png'";
			return "'css/images/Biking-gray.png'";
			return "'css/images/Bus-gray.png'";
			return "'css/images/PPlusBus-gray.png'";
			return '"css/images/smile.png"';
			return '"css/images/1tree.png"';
			return '"css/images/2trees.png"';
			return '"css/images/3trees.png"';
			return '"css/images/4trees.png"';
			return '"css/images/5trees.png"';
			return '"css/images/6trees.png"';
			return '"css/images/7trees.png"';
			return '"css/images/8trees.png"';
			return '"css/images/9trees.png"';
			return '"css/images/10trees.png"';
			return '"css/images/10trees.png"';
			
			
## /usr/share/javascript/Control.Geocoder.js ##


## /usr/share/javascript/lang.js ##


## /usr/share/javascript/leaflet-routing-machine.js ##


## /usr/share/javascript/map.js ##


## /usr/share/javascript/jquery/jquery.js ##


## /usr/share/javascript/jquery/jquery.lite.js ##


## /usr/share/javascript/jquery/jquery.pack.js ##


## /usr/share/javascript/jquery/jquery.min.js ##



## css/style.css ##
### - Local : ###
#### *Images* : ####

    background: url('images/Walk.png') no-repeat;
    background: url('images/Walk-gray.png') no-repeat;
    background: url('images/Biking.png') no-repeat;
    background: url('images/Biking-gray.png') no-repeat;
    background: url('images/Bus.png') no-repeat;
    background: url('images/Bus-gray.png') no-repeat;
    background: url('images/Car.png') no-repeat;
    background: url('images/Car-gray.png') no-repeat;
    background: url('images/PPlusBus.png') no-repeat;
    background: url('images/PPlusBus-gray.png') no-repeat;
    background: url('images/setting-white.png') no-repeat;
    background: url('images/setting-gray.png') no-repeat;
    background-image: url('images/leaflet.routing.icons.png');

	
## css/images/10trees.png ##  


## css/images/1tree.png ##    


## css/images/2trees.png ##   


## css/images/3trees.png ##   


## css/images/4trees.png ##   


## css/images/5trees.png ##   


## css/images/6trees.png ##


## css/images/7trees.png ##


## css/images/8trees.png ##


## css/images/9trees.png ##


## css/images/Biking-gray.png ##


## css/images/Biking.png ##


## css/images/Bus-gray.png ##


## css/images/Bus-in.png ##


## css/images/Bus-out.png ##


## css/images/Bus.png ##


## css/images/Car-gray.png ##


## css/images/Car.png ##


## css/images/comment.png ##


## css/images/enter-01.png ##


## css/images/exit-01.png ##


## css/images/ferry.png ##


## css/images/gsmlogo.png ##


## css/images/info.png ##


## css/images/information.png ##


## css/images/leaflet.routing.icons.png ##


## css/images/parking.png ##


## css/images/ParkPlace.png ##


## css/images/park.png ##


## css/images/P-entrance.png ##


## css/images/PPlusBus-gray.png ##


## css/images/PPlusBus.png ##


## css/images/setting-gray.png ##


## css/images/setting-white.png ##


## css/images/smile.png ##


## css/images/Walk-gray.png ##


## css/images/Walk.png ##
	
---

# Comments #

## /var/www/html/comments/index.php ##
### - Local : ###
### *PHP* : ###
			<?php include 'header.php';?>
			<?php include 'widgets/languageButtom.php';?>
			<?php include_once ('modify.php');?>
			<?php include 'footer.php';?>
			
			
## /var/www/html/comments/header.php ##
### - CDN : ###
#### *Leaflet* : ####
			<link rel="stylesheet" href="leaflet.css"/>
			<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.css" />
			<script src="http://cdn.leafletjs.com/leaflet/v1.0.0-rc.1/leaflet.js"></script>

#### *Bootstrap* : ####
			<link rel="stylesheet" href="doc/styles/bootstrap.css">

#### *JQuery* : ####
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

#### *Google Maps API* : ####
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBXIxKmHz3QFTynyL8AMUBqQNxgS2sy8d8"></script>

### - Local : ###
#### *Images* : ####
			    <img class="pull-left" src="images/infoicon.png" id="infoPic">
                <img src="images/routicon.png" id="routingPic">
			
			
## /var/www/html/comments/widgets/languageButtom.php ##


## /var/www/html/comments/modify.php ##
### - Local : ###
#### *Images* : ####
                <img class="pull-left" src="images/infoicon.png" id="infoPic">
                <img src="images/routicon.png" id="routingPic">


## /var/www/html/comments/footer.php ##
### - Local : ###
#### *Javascript* : ####
			<script src="javascript/map.js"></script>
			<script src="javascript/display_functions.js"></script>
			<script src="javascript/comment_functions.js"></script>
			<script src="javascript/database_functions.js"></script>
			<script src="javascript/additional_functions.js"></script>
			<script src="javascript/address_functions.js"></script>
			<script src="javascript/css_functions.js"></script>

#### *Bootstrap* : ####
			<script src="doc/scripts/bootstrap.js"></script>

			
## /var/www/html/comments/editComment.php ##
### - Local : ###
#### *PHP* : ####
			<?php include 'header.php'?>
			<?php include 'footer.php';?>
			
### *Images* : ###
			<img src="images/comment.png" id="backToCommentpic">
			
## /var/www/html/comments/edit.php ##
### - Local : ###
### *Images* : ###
                <img class="pull-left" src="images/infoicon.png" id="infoPic">

## /var/www/html/comments/Contol.Geocoder.js ##

## /var/www/html/comments/leaflet-routing-machine.js ##

## /var/www/html/comments/leaflet.js ##
### - Local : ###
### *Images* : ###
			var problemIcon = new LeafIcon({iconUrl: 'images/problem.png'});
			var infoIcon = new LeafIcon({iconUrl: 'images/info.png'});
			var eventIcon = new LeafIcon({iconUrl: 'images/event.png'});
			var otherIcon = new LeafIcon({iconUrl: 'images/other.png'});

## /var/www/html/comments/javascript/additional_functions.js ##

## /var/www/html/comments/javascript/additionalFunctions.js ##
### - Local : ###
#### *Images* : ####
			return "'css/images/Walk-gray.png'";
			return "'css/images/Car-gray.png'";
			return "'css/images/Biking-gray.png'";
			return "'css/images/Bus-gray.png'";
			return "'css/images/PPlusBus-gray.png'";
			return '"css/images/smile.png"';
			return '"css/images/1tree.png"';
			return '"css/images/2trees.png"';
			return '"css/images/3trees.png"';
			return '"css/images/4trees.png"';
			return '"css/images/5trees.png"';
			return '"css/images/6trees.png"';
			return '"css/images/7trees.png"';
			return '"css/images/8trees.png"';
			return '"css/images/9trees.png"';
			return '"css/images/10trees.png"';
			return '"css/images/10trees.png"';
			
## /var/www/html/comments/javascript/address_functions.js ##


## /var/www/html/comments/javascript/comment_functions.js ##


## /var/www/html/comments/javascript/Control.Geocoder.js ##


## /var/www/html/comments/javascript/css_functions.js ##


## /var/www/html/comments/javascript/databse_functions.js ##
### - Local : ###
#### *PHP* : ####
			r = $.post( "/comments/baguette/marker.php", { name: com.title,

				
## /var/www/html/comments/javascript/display_functions.js ##
### - Local : ###
#### *PHP* : ####
			xhttp.open("GET", '/comments/baguette/marker.php', true);

	
## /var/www/html/comments/javascript/lang.js ##


## /var/www/html/comments/javascript/leaflet-routing-machine.js ##


## /var/www/html/comments/javascript/map.js ##


## /var/www/html/comments/images/all.png ##


## /var/www/html/comments/images/cancel.png ##


## /var/www/html/comments/images/comment.png ##


## /var/www/html/comments/images/edit.png ##


## /var/www/html/comments/images/event.png ##


## /var/www/html/comments/images/event.xcf ##


## /var/www/html/comments/images/infoicon.png ##


## /var/www/html/comments/images/info.png ##


## /var/www/html/comments/images/info.xcf ##


## /var/www/html/comments/images/next.jpg ##


## /var/www/html/comments/images/next.png ##


## /var/www/html/comments/images/other.png ##


## /var/www/html/comments/images/other.xcf ##


## /var/www/html/comments/images/prev.png ##


## /var/www/html/comments/images/problem.png ##


## /var/www/html/comments/images/problem.xcf ##


## /var/www/html/comments/images/remove.png ##


## /var/www/html/comments/images/return_arrow.png ##


## /var/www/html/comments/images/routicon.png ##


## /var/www/html/comments/baguette/marker.php ##
### - Local : ###
#### *PHP* : ####
			require_once __DIR__."/vendor/autoload.php";

## /var/www/html/comments/baguette/report.php ##
### - Local : ###
#### *PHP* : ####
			require_once __DIR__."/vendor/autoload.php";


## /var/www/html/comments/baguette/vendor/autoload.php ##
### - Local : ###
#### *PHP* : ####
			require_once __DIR__ . '/composer' . '/autoload_real.php';

## /var/www/html/comments/baguette/vendor/composer/autoload_classmap.php ##


## /var/www/html/comments/baguette/vendor/composer/autoload_namespaces.php ##


## /var/www/html/comments/baguette/vendor/composer/autoload_psr4.php ##


## /var/www/html/comments/baguette/vendor/composer/autoload_real.php ##


## /var/www/html/comments/baguette/vendor/composer/ClassLoader.php ##


## /var/www/html/comments/baguette/src/Database.php ##


## /var/www/html/comments/baguette/src/Tables/MarkerTable.php ##


## /var/www/html/comments/baguette/src/Tables/ReportTable.php ##


## /var/www/html/comments/baguette/src/Pages/Marker.php ##


## /var/www/html/comments/baguette/src/Pages/Page.php ##


## /var/www/html/comments/baguette/src/Pages/Report.php ##


## /var/www/html/comments/baguette/src/Models/AbstractModel.php ##


## /var/www/html/comments/baguette/src/Models/MarlerModel.php ##


## /var/www/html/comments/baguette/src/Models/ReportModel.php ##



























