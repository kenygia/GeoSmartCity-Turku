<?php
include("Database/connect.php");
?>


<article id="preference">
    <p onclick="reveal()">Preference</p>
</article><br>

<article id="pop-up">
    <div id="dialogbox">


        <div id="heading">
            Not signed in !
        </div>
        <div id="dialog">

            <p>Please sign in first to save and share your preferences.<br></p>

            <button onclick="closepopup()">Cancel </button><a href="files/signup.php"><button id="login" >Sign In</button></a>
        </div>
    </div>
</article>


<article id="userpreference">




    <?php
    $user;
    $walk_distance;
    $walk_speed;
    $bike_distance;
    $bike_speed;
    $travel_method;
    $show_parking;
    $car_type;
    $car_size;
    $fuel_consumption;
    $co2;
    $notice="Your preference has been saved.";

    if(isset($_SESSION['name'])){
        $user=$_SESSION['name'];
    }
    else{
        $user="default";
    }


    //include("/Database/connect.php");
    $st = $con->prepare("SELECT *FROM preference WHERE fullname='".$user."'");
    $st->execute();
    foreach($st as $result){
        $walk_distance=$result['walk_distance'];
        $walk_speed=$result['walk_speed'];
        $bike_distance=$result['bike_distance'];
        $bike_speed=$result['bike_speed'];
        $travel_method=$result['travel_method'];
        $show_parking=$result['show_parking'];
        $car_type=$result['car_type'];
        $car_size=$result['car_size'];
        $fuel_consumption=$result['fuel_consumption'];
        $co2=$result['co2'];
    }

    ?>




    <?php
    //if the user press save button, then save the input
    $notice;
    if(isset($_SESSION['name'])){
    $user=$_SESSION['name'];
    include("/Database/connect.php");


    if(isset($_POST['submit_save'])){

        $update=$con->prepare("UPDATE preference SET
         walk_distance='".$_POST['walkingdistance']."',
         walk_speed='".$_POST['walkingspeed']."',
         bike_distance='".$_POST['bikingdistance']."',
         bike_speed='".$_POST['bikingspeed']."',
         travel_method='".$_POST['vechile']."',

         car_type='".$_POST['cartype']."',
         car_size='".$_POST['carsize']."',
         fuel_consumption='".$_POST['fuelconsumption']."',
         co2='".$_POST['co2']."'
         WHERE fullname='".$user."' " );
         if($update->execute()){


            // include("/Database/connect.php");
             $st = $con->prepare("SELECT *FROM preference WHERE fullname='".$user."'");
             $st->execute();
             foreach($st as $result){
                 $walk_distance=$result['walk_distance'];
                 $walk_speed=$result['walk_speed'];
                 $bike_distance=$result['bike_distance'];
                 $bike_speed=$result['bike_speed'];
                 $travel_method=$result['travel_method'];
                 $show_parking=$result['show_parking'];
                 $car_type=$result['car_type'];
                 $car_size=$result['car_size'];
                 $fuel_consumption=$result['fuel_consumption'];
                 $co2=$result['co2'];
             }


         }
    }

    ?>
    <form method="post" action="index.php">


        <fieldset id="saving_fieldset">
            <legend>Save and share preferences</legend>

      <input type="submit" value="" name="submit_save" id="save_button"/>
        <input type="submit" value="" name="submit_share" id="share_button"/>

    </fieldset>
        <?php
        }else
        {


            ?>

        <fieldset id="saving_fieldset">
            <legend>Save and share preferences</legend>
            <div>

               <span class="saveshare"> <img src="images/save.png"  style="height:20px; width: 20px; margin:20px;" onclick="openpopup()"></span>
               <span class="saveshare"> <img src="images/sharing.png"  style="height:20px; width: 20px; margin:20px;" onclick="openpopup()"></span>

            </div>
            </fieldset>
            <?php
        }


        ?>



        <div id="walking_info">
            <h3>
                Walking speed:

            </h3>
            <p>It is assumed that a person normally walks at medium pace(100m/min).
                The slowest pace would be 30m/min while fasted is 150m/min.
            </p>

                      <span id="ok" onclick="closewalkinginfo()">
                          Ok
                      </span>
            </div>


        <div id="biking_info">
            <h3>
                Biking speed:

            </h3>
            <p>It is assumed that a person normally rides at medium speed(300m/min).
                The slowest speed would be 120m/min while fasted is 450m/min.
            </p>

                      <span id="ok_bike" onclick="closebikinginfo()">
                          Ok
                      </span>
        </div>

        <fieldset>
            <legend>Distance and speed</legend>
        <div class="refe_lebel">
            <label>Max. walking distance(km):</label>
            <input type="number"  size="20"  min="1" value="<?php echo  $walk_distance ?>" name="walkingdistance"/><br>
        </div>

        <div class="refe_lebel">
            <label> Walking Speed:</label><img src="images/info.png" style="height: 22px; width: 22px;" onclick="display_walkinginfo()">
            <select name="walkingspeed">
                <option <?php if($walk_speed=="Fast"){ echo "Selected";}?> vaLue="Fast" >Fast</option>
                <option <?php if($walk_speed=="Medium"){ echo "Selected";}  ?>  vaLue="Medium" >Medium</option>
                <option <?php if($walk_speed=="Slow"){ echo "Selected";} ?> vaLue="Slow">Slow</option>
            </select><br>
        </div>

        <div class="refe_lebel">
            <label>Max. biking distance:(km/h)</label>
            <input type="number" size="40" min="1" value="<?php echo $bike_distance ?>" name="bikingdistance"/><br>
        </div>

        <div class="refe_lebel">
            <label >Biking Speed:</label><img src="images/info.png" style="height: 22px; width: 22px;" onclick="display_bikinginfo()">
            <select name="bikingspeed">
                <option <?php if($bike_speed=="Fast"){ echo "Selected";} ?> value="Fast" >Fast</option>
                <option  <?php if($bike_speed=="Medium"){ echo "Selected";} ?> value="Medium">Medium</option>
                <option <?php if($bike_speed=="Slow"){ echo "Selected";} ?> value="Slow" >Slow</option>
            </select><br><br>
        </div>
            </fieldset>

        <fieldset>
            <legend>Private transport</legend>
        <div class="refe_lebel">
            <div id="vehicle_type">
            <input type="radio" name="vechile" <?php if($travel_method=="Car"){ echo "checked"; } ?> value="Car" ><label>Use car</label>
            <input type="radio" <?php if($travel_method=="Bus"){ echo "checked";} ?> name="vechile" value="Bus" ><label>Use Bus</label>
            <input type="checkbox" name="showparking" <?php if($show_parking=="Showparking"){ echo "checked";} ?> value="Showparking" /><label>Show Parking area</label><br>
            </div>
        </div>

        <div class="refe_lebel">
            <label >Car Type</label>
            <select name="cartype"><option <?php if($car_type=="Petrol"){ echo "Selected";} ?> value="Petrol" >Petrol</option>
                <option <?php if($car_type=="Diesel"){ echo "Selected";} ?> value="Diesel" >Diesel</option>
                <option <?php if($car_type=="Electric"){ echo "Selected";} ?> value="Electric" >Electric</option>
            </select><br>
        </div>

        <div class="refe_lebel">
            <label>Car size</label>
            <select name="carsize">
                <option <?php if($car_size=="Small"){ echo "Selected";} ?> value="Small" >Small</option>
                <option  <?php if($car_size=="Medium"){ echo "Selected";} ?>  value="Medium" >Medium</option>
                <option <?php if($car_size=="Large"){ echo "Selected";} ?>  value="Large">Large</option>
            </select><br>
        </div>

        <div class="refe_lebel">
            <label>Fuel Consumption(L/100km)</label>
            <input type="number"    min="1" value="<?php echo $fuel_consumption ?>" name="fuelconsumption"/><br>
        </div>

        <div class="refe_lebel">
            <label >CO<sub>2</sub> Emission(g/km): </label>
            <input type="number"  size="20"  value="<?php echo $co2 ?>" name="co2"/>
        </div>
            </fieldset>
</article>




    </form>


<?php

if(isset($_SESSION['name'])) {
    global $message;
    global $saved;
    if (isset($_POST['submit_save'])) {
        $saved = "Saved !";
        $message = "Your preference has been saved";
    }
    if (isset($_POST['submit_share'])) {
        $saved = "Shared !";
        $message = "Your preference has been shared. We appreciate your contribution.";
    }
}
?>

<?php
if(isset($_POST['submit_save']) || isset($_POST['submit_share']))
{


?>
<article id="success_message">

    <div id="successmessage_heading">
        <h3><?php
            echo $saved;
            ?><h3>
    </div>
    <div id="success_dialog">

        <p><?php
           echo  $message;
            ?><br></p>

        <button id="close" onclick="exitmessage()">Close</button>
    </div>
    <?php

    }

?>
</article>

</artilce>


