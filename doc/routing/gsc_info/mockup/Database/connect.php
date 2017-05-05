<?php
try{

   // $con=new PDO("mysql:host=localhost; dbname=greenrouting","root","");
    $con=new PDO("mysql:host=localhost; dbname=geosmartcity","geosmartdb","WMbDT6mAYeQ6qu9R");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    echo "Error : ".$con->getMessage();
}
?>