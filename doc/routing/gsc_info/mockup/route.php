<?php

session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Mockup</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script type="text/javascript" src="script.js"></script>

    <!--the datepicker script-->
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>
<!--<img src="images/church.jpg">-->
<header>
    <article id="logo_gsc">
        <a href="http://www.geosmartcity.eu/" target="_blank"><img src="images/gsmlogo.png"></a>
    </article>

    <article id="logo_cip">
        <a href="http://ec.europa.eu/cip/" target="_blank">  <img src="images/cip.png"></a>
    </article>
</header>


<!--form-->
<aside>
    <article>

        <form method="post" action="route.php" id="form">
            <input type="text" placeholder=" From" name="from" size="40" required="required" value="Joukahaisenkatu 3,"/><br>
            <input type="text" placeholder=" Your destination" name="destination" required="required" size="40" value="1651- Kohmo" /><br>
            <label>Number of passangers:</label> <input type="number" name="from" required="required" size="15" min="1"  value="1"/><br>

            <div id="time">
                <label id="now" onclick="highlightnow()">NOW</label>
                <label id="later" onclick="highlightlater()">LATER</label>
            </div>
            <div id="field_time">
                <input type="datetime" id="current_time" />
                <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

                <script>
                    $(function() {
                        $( "#calendar" ).datepicker();
                    });
                </script>

                <input type="text" id="calendar" />




            </div>

            <input type="submit" value="Search">

        </form>

    </article>
    <?php

    include("files/preference.php");

    ?>



</aside>



<!--section of the page starts-->

<section id="indexpage_section">
    <article id="log">
        <div id="log_info">

        <?php
        if(isset($_SESSION['name'])){
            // echo $_SESSION['name'];

            ?>

            <img src='images/account.png' onclick='exitsignout()'/><br>
            <label onclick='exitsignout()'><?php echo $_SESSION['name'] ?></label>


            <div id="logout_popup">
                <h3>
                    Sign Out?

                </h3>
                <p>By signing out, your can no longer access your preferences. But still you can
                    search your route with default preferences
                </p>

                      <span id="cancel" onclick="closelogoutpopup()">
                          Cancel
                      </span>
                <a href="files/signout.php"><span id="signout">Sign out</span></a>
            </div>

            <?php
        }
        else{
            echo "<a href='files/signup.php'><img src='images/account.png'><br>";
            echo "<label>User Account</label></a>";
        }

        ?>
        </div>
    </article>

    <article id="green_routing">
        <div id="green_routing_heading">
            <img src="images/tree2.png" style="width: 150px; height: 150px;">
          <!-- <h2>Green Routing</h2>-->
        </div>

        <div id="route_search">
         <div id="search_info">

             <label>From: Joukahaisenkatu 3</label><br>
             <label>Destination: 1651- Kohmo, </label><br>
             <label>When: 15.09.2015, 13:00</label>
         </div>
            <div id="weather">
                <img src="images/suncloud.png"><br>
                <label>7&deg;C - partly cloudy.</label>
            </div>

        </div>

    </article>

    <article id="search_menu">
         <div><ul>
               <a href="?travel=bus"><li <?php  if(!isset($_GET["travel"])){
                       echo "class='current'";
                   }
                   if(isset($_GET["travel"])){ if($_GET["travel"]=="bus"){echo "class='current'";} }?>><img src="images/bus.png"></li></a>
                <a href="?travel=car">  <li <?php if(isset($_GET["travel"])){ if($_GET["travel"]=="car"){echo "class='current'";} }?> ><img src="images/car.png"></li></a>
                <a href="?travel=bike">  <li <?php if(isset($_GET["travel"])){ if($_GET["travel"]=="bike"){echo "class='current'";} }?>><img src="images/bike.png"></li></a>
                <a href="?travel=walk"><li <?php if(isset($_GET["travel"])){ if($_GET["travel"]=="walk"){echo "class='current'";} }?> > <img src="images/walk.png"></li></a>
            </ul>
        </div>
    </article>




    <?php
if(isset($_GET['travel'])){
    if($_GET['travel']=='bus'){
        include("bus.php");
    }
    else if($_GET['travel']=='car'){
        include("car.php");
    }else if($_GET['travel']=='bike'){
        include("bike.php");
    }else if($_GET['travel']=='walk'){
        include("walk.php");
    }
}
else{
    include("bus.php");
}

?>

    </section>
</body>
</html>