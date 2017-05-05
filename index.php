<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Southwest Finland Green Routing</title>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
 <link rel="stylesheet" href="css/leaflet.css">
    <script  type="text/javascript" src="javascript/leaflet.js"></script>

    <script src="javascript/Control.Geocoder.js"></script>
    <script type="text/javascript" src="javascript/map_routing.js"></script>
    <script  type="text/javascript" src="javascript/jquery.min.js"></script>

	<script  type="text/javascript" src="javascript/hammer.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script  type="text/javascript" src="javascript/bootstrap.min.js"></script>

<!--    j-Query UI-->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.timepicker.min.css">
    <script type="text/javascript" src="javascript/jquery-ui.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.timepicker.min.js"></script>

    <script src="javascript/lang.js"></script>
    <script src="javascript/additionalFunctions.js"></script>

    <!--    CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style_routing.css">

    <script src="javascript/leaflet-routing-machine.js"></script>

	<!--	Google Analytics-->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89368575-1', 'auto');
  ga('send', 'pageview');

</script>
	<!--	-->

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
</head>

<body>

    <div id="mapid">
<!-- Empty div for the map-->
    </div>

<!--div for language buttons-->
    <div class="pull-right " id="myNavbar">
        <ul class="nav navbar-nav">
            <li id="FI"><a href="?lang=fi">FI</a></li>
            <li id="SV"><a href="?lang=sv">SV</a></li>
            <li id="EN"><a href="?lang=en">EN</a></li>
        </ul>
    </div>

<!--div for logo and mode options-->
    <div class="logo">
        <div id="info">
			<a onclick="infoPage()" >
				<img src="css/images/info.png" alt="Info" id="infoPic">
			</a>
		</div>
		<div id="logoTitle"></div>
		<div id="comment">
			<a href="./comments/">
				<img src="css/images/comment.png" alt="Comment" id="commentPic">
			</a>
		</div>
        <div id="modeListBoxSelect">
            <div id="walk" class="walkIconClicked"></div>
            <div id="bicycle" class="bikeIcon"></div>
            <div id="car" class="carIcon"></div>
            <div id="bus" class="busIcon"></div>
            <div id="park-and-ride" class="parkRideIcon"></div>
            <div id="settings" class="settingsIcon"></div>
        </div>
    </div>

<!--Appeares when mode options on hover -->
    <div id="tipMode" class="toolTip">
        <p id="tipWalk" style="display: none"></p>
        <p id="tipBike" style="display: none"></p>
        <p id="tipCar" style="display: none"></p>
        <p id="tipBus" style="display: none"></p>
        <p id="tipPR" style="display: none"></p>
        <p id="tipSettings" style="display: none"></p>
    </div>

<!--Appeares when trees image on hover-->
    <div id="tipCO2" class="toolTip">
        <p id="co2Calc" style="display: none"></p>
        <p id="offsetCalc" style="display: none"></p>
    </div>

<!--div for displaying date and time settings-->
    <div class="now-later">
        <div class="time-options">
            <input type="radio" id="nowID" name="timeOption" value="Now" checked><label for="nowID"></label>
            <input type="radio" id="depID" name="timeOption" value="Departure"><label for="depID"></label>
            <input type="radio" id="arrID" name="timeOption" value="Arrival"><label for="arrID"></label>
        </div>
        <div class="DateTimeInput">
            <input type="text" id="dateId" name="date" disabled="disabled">
            <input type="text" id="timeId" name="time" disabled="disabled" pattern="([0-1]{1}[0-9]{1}|20|21|22|23):[0-5]{1}[0-9]{1}">
        </div>
    </div>

<!--div appeares if error happened during route calculation-->
    <div id="error">
        <span></span>
    </div>

<!--Several divs which appeare when settings button is clicked. Each mode has specific settings (div bellow)-->

    <div class="walkSpeed">
        <div class="row">
            <div class="col-md-6">
                <label id="walkSpeed"></label>
            </div>
            <div class="col-md-6">
                <select class="text-field" id="walkSpeedInput">
                    <option id="walkFast" value="1.8"></option>
                    <option id="walkMedium" value="1.4"></option>
                    <option id="walkSlow" value="1.2" selected="selected"></option>
                </select>
            </div>
        </div>
    </div>

    <div class="bikeSpeed">
        <div class="row">
            <div class="col-md-6">
                <label id="bikeSpeed"></label>
            </div>
            <div class="col-md-6">
                <select class="text-field" id="bikeSpeedInput">
                    <option id="bikeFast" value="8"></option>
                    <option id="bikeMedium" value="7" selected="selected"></option>
                    <option id="bikeSlow" value="6"></option></select>
            </div>
        </div>
    </div>

    <div class="walkDistance">
        <div class="row">
            <div class="col-md-6">
                <label id="walkDistance"></label>
            </div>
            <div class="col-md-6">
                <input type=number value="2000" class="text-field" id="walkDistInput">
            </div>
        </div>
    </div>

    <div class="carbonDioxide">

        <div class="row">
            <div class="col-md-6">
                <label id="emission"></label>
            </div>
            <div class="col-md-6">
                <input type=number value="" class="text-field" id="emissionInput">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label id="consumption"></label>
            </div>
            <div class="col-md-6">
                <input type=number value="" class="text-field" id="consumptionInput">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label id="fuelType"></label>
            </div>
            <div class="col-md-6">
                <select class="text-field" id="fuelTypeInput">
                    <option id="petrol" value="2325" selected="selected"></option>
                    <option id="diesel" value="2660"></option>
                    <option id="electric" value="0"></option>    //// value
                </select>
            </div>
        </div>
    </div>

    <div class="applyDiv">
        <button type="button" class="applyBtn">
        </button>
    </div>

<!--Additional buttons added for mobile screen-->
    <button class="langButton">
        <div id="langArrow" class="arrow-up"></div>
    </button>

    <div id="mobileButtons">
        <button type="button" class="changeRoute">
        </button>
        <button type="button"" class="hideAlternative">
            <div id="altArrow" class="arrow-up"></div>
        </button>
    </div>

    <div id="mobile-indicator"></div>
</body>

</html>
