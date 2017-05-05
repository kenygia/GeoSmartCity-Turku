<?php
require_once("../Database/connect.php");
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>useraccount</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <script type="text/javascript" src="../script.js"></script>

</head>
<body>
<header>
    <article id="logo_gsc">
        <img src="../images/gsmlogo.png">
    </article>

    <article id="logo_cip">
        <img src="../images/cip.png">
    </article>
</header>

<section id="recovery_section">
<article id="recover">
    <p class="forgot_head">Forgot your password ? </p>
    <p>Please provide following credentials to recover your password : </p>
    <form method="post">
        <img src="../images/write.png" style="height:20px;width: 20px;"><input type="text" name="fname" placeholder="Full name" required><br>
        <img src="../images/mail.png" style="height:20px;width: 20px;"><input type="text" name="email" placeholder="Email address" required><br>
        <input type="submit" name="recover" value="Recover">
    </form>


    <?php
      if(isset($_POST['recover'])) {
        $name = $_POST["fname"];
        $email = $_POST["email"];

        echo "<p class='forgot_head head_title'>Your Recovery result:</p>";


        $st = $con->prepare("SELECT *FROM users WHERE fullname='".$name."' AND email='".$email."' ");
        $st->execute();
        if($st->rowCount()>0) {
            foreach ($st as $result) {
                echo "<p class='recovery_result'>Username : ";
              echo $result["username"]."</p>";
                echo "<p class='recovery_result'>Password : ";
                echo $result["password"] ."</p>";
            }
        }else{
           echo "<p class='recovery_result'>Sorry ! There is no record for the credentials you provided. Please try again or register as new user.</p>";
        }

        //$result = $st->fetch(PDO::FETCH_ASSOC);
        //echo $result["fullname"];


    }


    ?>
</article>

</section>


</body>

