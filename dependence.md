# Routing Client #



## index.php ##
### - CDN : ###
#### *Leaflet* : ####
    		<link rel="stylesheet" href="css/leaflet.css">
    		<script  type="text/javascript" src="javascript/leaflet.js"></script>
			<script src="javascript/Control.Geocoder.js"></script>
			<script src="javascript/leaflet-routing-machine.js"></script>
    		<script type="text/javascript" src="javascript/map_routing.js"></script>

#### *Jquery* : #### 
			<script  type="text/javascript" src="javascript/jquery.min.js"></script>
			<script type="text/javascript" src="javascript/jquery-ui.min.js"></script>
			<script type="text/javascript" src="javascript/jquery.timepicker.min.js"></script>
			<link rel="stylesheet" href="css/jquery-ui.css">
			<link rel="stylesheet" href="css/jquery.timepicker.min.css">

#### *Hammer* : #### 
			<script  type="text/javascript" src="javascript/hammer.js"></script>

#### *Bootstrap* : #### 
    		<link rel="stylesheet" href="css/bootstrap.min.css">
			<script  type="text/javascript" src="javascript/bootstrap.min.js"></script>

### - Local : ###
#### *CSS* : #### 
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/style_routing.css">

#### *javascript* : #### 
    		<script src="javascript/setup.js"></script>
			<script src="javascript/lang.js"></script>
			<script src="javascript/additionalFunctions.js"></script>
    		<script src="javascript/post_loading.js"> </script>
			
#### *Images* : ####
    		<link rel="shortcut icon" type="image/png" href="favicon.png"/>
			<img src="css/images/info.png" alt="Info" id="infoPic">
			<img src="css/images/comment.png" alt="Comment" id="commentPic">
	
## javascript/additionalFunctions.js ##
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
			
			
## javascript/Control.Geocoder.js ##


## javascript/lang.js ##


## javascript/leaflet-routing-machine.js ##


## javascript/map.js ##


## javascript/jquery/jquery.js ##


## javascript/jquery/jquery.lite.js ##


## javascript/jquery/jquery.pack.js ##


## javascript/jquery/jquery.min.js ##



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

## comments/index.php ##
### - Local : ###
### *PHP* : ###
			<?php include 'header.php';?>
			<?php include 'widgets/languageButtom.php';?>
			<?php include_once ('modify.php');?>
			<?php include 'footer.php';?>
			
			
## comments/header.php ##
### - CDN : ###
#### *Leaflet* : ####
			<link rel="stylesheet" href="leaflet.css"/>
			<link rel="stylesheet" href="../javascript/leaflet.css" />
			<script src="../javascript/leaflet.js"></script>

#### *Bootstrap* : ####
			<link rel="stylesheet" href="../css/bootstrap.css">

#### *JQuery* : ####
			<script src="../javascript/jquery.min.js"></script>

#### *Google Maps API* : ####
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBXIxKmHz3QFTynyL8AMUBqQNxgS2sy8d8"></script>

### - Local : ###
#### *Images* : ####
			    <img class="pull-left" src="images/infoicon.png" id="infoPic">
                <img src="images/routicon.png" id="routingPic">
			
			
## comments/widgets/languageButtom.php ##


## comments/modify.php ##
### - Local : ###
#### *Images* : ####
                <img class="pull-left" src="images/infoicon.png" id="infoPic">
                <img src="images/routicon.png" id="routingPic">


## comments/footer.php ##
### - Local : ###
#### *Javascript* : ####
			<script src="../javascript/map_comment.js"></script>
			<script src="javascript/display_functions.js"></script>
			<script src="javascript/comment_functions.js"></script>
			<script src="javascript/database_functions.js"></script>
			<script src="javascript/additional_functions.js"></script>
			<script src="javascript/address_functions.js"></script>
			<script src="javascript/css_functions.js"></script>

#### *Bootstrap* : ####
			<script src="../javascript/bootstrap.js"></script>

			
## comments/editComment.php ##
### - Local : ###
#### *PHP* : ####
			<?php include 'header.php'?>
			<?php include 'footer.php';?>
			
### *Images* : ###
			<img src="../css/images/comment.png" id="backToCommentpic">
			
## comments/edit.php ##
### - Local : ###
### *Images* : ###
                <img class="pull-left" src="../css/images/infoicon.png" id="infoPic">

## comments/Contol.Geocoder.js ##

## comments/leaflet-routing-machine.js ##

## comments/leaflet.js ##
### - Local : ###
### *Images* : ###
			var problemIcon = new LeafIcon({iconUrl: '../css/images/problem.png'});
			var infoIcon = new LeafIcon({iconUrl: '../css/images/info.png'});
			var eventIcon = new LeafIcon({iconUrl: '../css/images/event.png'});
			var otherIcon = new LeafIcon({iconUrl: '../css/images/other.png'});

## comments/javascript/additional_functions.js ##
			
## comments/javascript/address_functions.js ##


## comments/javascript/comment_functions.js ##


## comments/javascript/Control.Geocoder.js ##


## comments/javascript/css_functions.js ##


## comments/javascript/databse_functions.js ##
### - Local : ###
#### *PHP* : ####
			r = $.post( "./baguette/marker.php", { name: com.title,

				
## comments/javascript/display_functions.js ##
### - Local : ###
#### *PHP* : ####
			xhttp.open("GET", './baguette/marker.php', true);

	
## comments/javascript/lang.js ##


## comments/javascript/leaflet-routing-machine.js ##


## comments/javascript/map.js ##


## comments/images/all.png ##


## comments/images/cancel.png ##


## comments/images/comment.png ##


## comments/images/edit.png ##


## comments/images/event.png ##


## comments/images/event.xcf ##


## comments/images/infoicon.png ##


## comments/images/info.png ##


## comments/images/info.xcf ##


## comments/images/next.jpg ##


## comments/images/next.png ##


## comments/images/other.png ##


## comments/images/other.xcf ##


## comments/images/prev.png ##


## comments/images/problem.png ##


## comments/images/problem.xcf ##


## comments/images/remove.png ##


## comments/images/return_arrow.png ##


## comments/images/routicon.png ##


## comments/baguette/marker.php ##
### - Local : ###
#### *PHP* : ####
			require_once __DIR__."/vendor/autoload.php";

## comments/baguette/report.php ##
### - Local : ###
#### *PHP* : ####
			require_once __DIR__."/vendor/autoload.php";


## comments/baguette/vendor/autoload.php ##
### - Local : ###
#### *PHP* : ####
			require_once __DIR__ . '/composer' . '/autoload_real.php';

## comments/baguette/vendor/composer/autoload_classmap.php ##


## comments/baguette/vendor/composer/autoload_namespaces.php ##


## comments/baguette/vendor/composer/autoload_psr4.php ##


## comments/baguette/vendor/composer/autoload_real.php ##


## comments/baguette/vendor/composer/ClassLoader.php ##


## comments/baguette/src/Database.php ##


## comments/baguette/src/Tables/MarkerTable.php ##


## comments/baguette/src/Tables/ReportTable.php ##


## comments/baguette/src/Pages/Marker.php ##


## comments/baguette/src/Pages/Page.php ##


## comments/baguette/src/Pages/Report.php ##


## comments/baguette/src/Models/AbstractModel.php ##


## comments/baguette/src/Models/MarlerModel.php ##


## comments/baguette/src/Models/ReportModel.php ##



























