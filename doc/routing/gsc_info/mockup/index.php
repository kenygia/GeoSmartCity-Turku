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
    <a href="http://ec.europa.eu/cip/" target="_blank"> <img src="images/cip.png"></a>
 </article>
</header>


<div id="bodywrapper">


<!--form-->
<aside>
    <article>

        <form method="post" action="route.php" id="form">
            <input type="text" placeholder=" From" name="from" size="40" required="required" /><br>
            <input type="text" placeholder=" Your destination" name="destination" required="required" size="40"  /><br>
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

    <article id="content">

        <div id="front_section">
            <h1>
                Southwest Finland Routing
            </h1>
            <p>Discover the journey to your destinaton.</p>

        </div>

        <div id="index">
            <div id="index_left">
               <img src="images/tree2.png" style="width: 140px; height:140px; height: "/>
            </div>


            <?php
            if(!isset($_SESSION['name'])) {


                ?>
                <div id="multiplat">
                    <p><a href="files/signup.php">Sign In / Sign Up </a></p>
                    <span>Please sign up for accessing your preference in multiple devices</span><br>
                    <img src="images/multiplat.png" style="width: 160px; height:100px;">

                </div>
                <?php
            }
            ?>

        </div>

            <div id="index_right">

                <div id="index_rightimg">
                    <img src="images/bus.png"><img src="images/car.png"><img src="images/bike.png"><img src="images/walk.png">
                </div>
                <div id="index_rightinfo">

                    <p>Based on your search and preference you set, different possible routes are searched. You can see the details of
                    your journey for bus, car, bike and walking. You can also be able to view your route in map. </p>

                    <p>Route which does not fit your preference is simply discarded and not displayed in the result</p>

                </div>

            </div>

            <div id="tree_info">
            <div id="tree_infoimg">
                <img src="images/tree.png"><img src="images/tree.png">
            </div>
                <div id="tree_infomessage">
                    <p>Based on your preferance and your journey, the amount of carbondioxide(co<sub>2</sub>) produced is calculated. It is indicated by the tree - one tree
                        indicator indicates that one healthy tree is required to compensate the carbon you have emitted throughout your journey.   </p>

                    <p>Calculation on your public bus journey is based on 18persons/bus assumption.</p>

                    <p>There is no carbon emmision on bike and walking route.</p>
                </div>

            </div>






    </article>

</section>
</div>


</body>
</html>