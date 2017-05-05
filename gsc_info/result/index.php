<?php
include("../Database/connect.php");

$st=$con->prepare("SELECT *FROM questionnaire");
$st->execute();
$count_total=$st->rowCount();

$st=$con->prepare("SELECT *FROM questionnaire where gender = :gen");
$st->execute(array(':gen'=>"male"));
$count_male=$st->rowCount();

$st=$con->prepare("SELECT *FROM questionnaire where gender = :gen");
$st->execute(array(':gen'=>"female"));
$count_female=$st->rowCount();

$st=$con->prepare("SELECT occupation FROM questionnaire");
$st->execute(array(':gen'=>"female"));
$student=0;
$working=0;
$others=0;

while($fetch=$st->fetch(PDO::FETCH_ASSOC)){
    IF($fetch['occupation']=='student'){
        $student=$student+1;
    }ELSEIF($fetch['occupation']=='working'){
        $working=$working+1;
    }ELSE{
        $others=$others+1;
    }
}


$st=$con->prepare("SELECT age FROM questionnaire");
$st->execute();

$fetch_10_20=0;
$fetch_21_30=0;
$fetch_31_40=0;
$fetch_41_50=0;
$fetch_51_60=0;
$fetch_61_70=0;
$fetch_71_80=0;
$fetch_81_90=0;
$age=0;

while($fetch=$st->fetch(PDO::FETCH_ASSOC)){
   if($fetch['age']>=10 && $fetch['age']<=20){
       $fetch_10_20=$fetch_10_20+1;
   }else if($fetch['age']>=21 && $fetch['age']<=30){
       $fetch_21_30=$fetch_21_30+1;
   }else if($fetch['age']>=31 && $fetch['age']<=40){
       $fetch_31_40=$fetch_31_40+1;
   }else if($fetch['age']>=41 && $fetch['age']<=50){
       $fetch_41_50=$fetch_41_50+1;
   }else if($fetch['age']>=51 && $fetch['age']<=60){
       $fetch_51_60=$fetch_51_60+1;
   }else if($fetch['age']>=61 && $fetch['age']<=70){
       $fetch_61_70=$fetch_61_70+1;
   }else if($fetch['age']>=71 && $fetch['age']<=80){
       $fetch_71_80=$fetch_71_80+1;
   }else if($fetch['age']>=81 && $fetch['age']<=90){
       $fetch_81_90=$fetch_81_90+1;
   }
}


$st=$con->prepare("SELECT distance FROM questionnaire");
$st->execute();

$distance_0_5=0;
$distance_6_10=0;
$distance_11_15=0;
$distance_16_20=0;
$distance_21_25=0;
$distance_26_30=0;
$distance_30=0;

while($fetch=$st->fetch(PDO::FETCH_ASSOC)){
    IF($fetch['distance']>=0 && $fetch['distance']<=5){
        $distance_0_5=$distance_0_5+1;
    }ELSEIF($fetch['distance']>=6 && $fetch['distance']<=10){
        $distance_6_10=$distance_6_10+1;
    }ELSEIF($fetch['distance']>=11 && $fetch['distance']<=15){
        $distance_11_15=$distance_11_15+1;
    }ELSEIF($fetch['distance']>=16 && $fetch['distance']<=20){
        $distance_16_20=$distance_16_20+1;
    }ELSEIF($fetch['distance']>=21 && $fetch['distance']<=25){
        $distance_21_25=$distance_21_25+1;
    }ELSEIF($fetch['distance']>=26 && $fetch['distance']<=30){
        $distance_26_30=$distance_26_30+1;
    }ELSE{
        $distance_30=$distance_30+1;
    }
}


$count_walk=0;
$count_bus=0;
$count_bike=0;
$count_car=0;
$count_other=0;
$st=$con->prepare("SELECT walk FROM questionnaire");
$st->execute();
while($fetch=$st->fetch(PDO::FETCH_ASSOC)){
    IF($fetch['walk']=='walk'){
        $count_walk=$count_walk+1;
    }
}


$st=$con->prepare("SELECT bus FROM questionnaire");
$st->execute();
while($fetch=$st->fetch(PDO::FETCH_ASSOC)){
    IF($fetch['bus']=='bus'){
        $count_bus=$count_bus+1;
    }
}

$st=$con->prepare("SELECT bike FROM questionnaire");
$st->execute();
while($fetch=$st->fetch(PDO::FETCH_ASSOC)){
    IF($fetch['bike']=='bike'){
        $count_bike=$count_bike+1;
    }
}

$st=$con->prepare("SELECT car FROM questionnaire");
$st->execute();
while($fetch=$st->fetch(PDO::FETCH_ASSOC)){
    IF($fetch['car']=='car'){
        $count_car=$count_car+1;
    }
}

$st=$con->prepare("SELECT other FROM questionnaire");
$st->execute();
while($fetch=$st->fetch(PDO::FETCH_ASSOC)){
    IF($fetch['other']=='other'){
        $count_other=$count_other+1;
    }
};




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link rel="stylesheet" href="../CSS/1560.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" media="(max-width: 780px)" href="../CSS/780.css" />



    <!--pie chart gender-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Age : 10-20',   <?php  echo $fetch_10_20 ?>],
                ['Age : 21-30',  <?php  echo $fetch_21_30 ?>],
                ['Age : 31-40',  <?php  echo $fetch_31_40 ?>],
                ['Age : 41-50',   <?php  echo $fetch_41_50 ?>],
                ['Age : 51-60',  <?php  echo $fetch_51_60 ?>],
                ['Age : 61-70',   <?php  echo $fetch_61_70 ?>],
                ['Age : 71-80',   <?php  echo $fetch_71_80 ?>],
                ['Age : 81-90',   <?php  echo $fetch_81_90 ?>]
            ]);

            var options = {
                title: 'Response by ages'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_age'));

            chart.draw(data, options);
        }
    </script>

    <!--by age-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Female',   <?php echo $count_female ?>],
                ['Male',    <?php echo $count_male ?>]
            ]);

            var options = {
                title: 'Response by ages'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_gender'));

            chart.draw(data, "");
        }
    </script>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Student',   <?php echo $student ?>],
                ['Working',    <?php echo $working ?>],
                ['Others',    <?php echo $others ?>]

            ]);

            var options = {
                title: 'Response by ages'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_occupation'));

            chart.draw(data, "");
        }
    </script>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['0-5 km',   <?php echo $distance_0_5 ?>],
                ['6-10 km',    <?php echo $distance_6_10 ?>],
                ['11-15 km',    <?php echo $distance_11_15 ?>],
                ['16-20 km',    <?php echo $distance_16_20 ?>],
                ['21-25 km',    <?php echo $distance_21_25 ?>],
                ['25-30 km',    <?php echo $distance_26_30 ?>],
                [' More than 30 km',    <?php echo $distance_30 ?>]

            ]);

            var options = {
                title: 'Response by ages'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_distance'));

            chart.draw(data, "");
        }
    </script>

    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Walk ',   <?php echo $count_walk ?>],
                ['Bus',    <?php echo $count_bus ?>],
                ['Bike',    <?php echo $count_bike ?>],
                ['Car',    <?php echo $count_car ?>],
                ['Others',    <?php echo $count_other ?>]

            ]);

            var options = {
                title: 'Response by ages'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_travel'));

            chart.draw(data, "");
        }
    </script>





</head>



<body>

<header>
    <article id="logo">

    </article>
</header>

<section class="result_page result">
    <article>
        <h2>Thank you for responding the poll.</h2><br>
        <h4>[ Total response: <?php echo $count_total ?> ] </h4><br>
        <p>Below is the summery of response given by all the users for poll questions. You can compare your response to others.</p>

    </article>


    <!--The age chart-->
    <article>
    <div class="response_header">
        <p>Response by Gender</p>
    </div>
    <div id="piechart_gender" ></div>
        <div class="response_header">
            <p>Response by Age</p>
        </div>
     <div id="piechart_age"></div>




        <div class="response_header">
            <p>Response by Occupation</p>
        </div>
    <div id="piechart_occupation"></div>
        <div class="response_header">
            <p>Response by Travel distance</p>
        </div>
    <div id="piechart_distance"> </div>




        <div class="response_header">
            <p>Response by means of travel</p>
        </div>
    <div id="piechart_travel">

    </div>

    </article>





</section>

</body>
</html>