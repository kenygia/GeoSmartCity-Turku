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
<!--<img src="images/church.jpg">-->
<header>
    <article id="logo_gsc">
        <img src="../images/gsc_transparent.png">
    </article>

    <article id="logo_cip">
        <img src="../images/cip.png">
    </article>
</header>

<section id="useraccount_section">
    <article id="info">
            <h1>GreenRouting User Account</h1><br>
        <span>By having user account you can:</span>
        <div class="info_text">
            <img src="../images/account.png"><br>

            Access your own travel preferences.
        </div >

        <div class="info_text">
            <img src="../images/save.png"><br>

            Modify and save your travel preferences.
        </div>

        <div class="info_text">
            <img src="../images/multiplat.png"><br>

           Access your preference in multiple devices.
        </div>

        <div class="info_text">
            <img src="../images/sharing.png"><br>

            Contribute by sharing your preferences.
        </div>

    </article>

    <article id="loginform">
        <div class="signin">
            <label>Signin with existing account.</label>


            <?php
            if(isset($_POST['submit_signin'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $st = $con->prepare("SELECT fullname,username,password FROM users");
                $st->execute();
            //   $result=$st->fetch(PDO::FETCH_ASSOC);


                foreach($st as $check){
                    if($check['username']==$username && $check['password']==$password){
                        $fullname=$check['fullname'];
                      session_start();
                       $_SESSION['name']=$fullname;
                     //  echo $_SESSION['name'];
                       // header("location:../index.php");
				$url="../index.php";
			echo '<script>window.location = "'.$url.'";</script>';
                    }
                }
            }



                if(isset($_POST['submit_signup'])) {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            $st = $con->prepare("INSERT INTO users(fullname,email,username,password)VALUES(:n,:e,:u,:p)");
            $st->bindValue(":n", $_POST["fullname"]);
            $st->bindValue(":e", $_POST["email"]);
            $st->bindValue(":u", $_POST["username"]);
            $st->bindValue(":p", $_POST["password"]);

            //prepare to inset into preference table with default value;
            $input = $con->prepare("INSERT INTO preference(fullname)VALUES(:fn)");
            $input->bindValue(":fn", $_POST["fullname"]);
            $input->execute();

            if ($st->execute()){
            //  session_start();
            // $_SESSION['name']= $fullname;
            //    header("location:../index.php");
            // }


            // }
            ?>

            <article id="success_message">

                <div id="successmessage_heading">
                    <h3><?php
                        echo "Registration Successful !";
                        ?><h3>
                </div>
                <div id="success_dialog">

                    <p><?php
                        echo "You have been registered successfully. You can sign in now with your username and password";
                        ?><br></p>

                    <button id="close" onclick="exitmessage()">Ok</button>
                </div>
            </article>


                <?php
                }
                }
            ?>


            <form method="post" >
              <img src="../images/account.png" style="height:20px;width: 20px;">
                <input type="text" placeholder="username" name="username" required><br>
                <img src="../images/lock.png" style="height:20px;width: 20px;">
                <input type="password" placeholder="password" name="password" required><br>
                <input type="submit" name="submit_signin" value="Sing In"><br><br>
                <label id="forgot_password"><a href="passwordrecover.php"> Forgot your password ? </a></label>
            </form>
        </div>
        <div class="signin">
            <span>Not registered yet? </span><br>
           <label>Create  GreenRouting account. </label>

            <form method="post">
                <img src="../images/write.png" style="height:20px;width: 20px;">
                <input type="text" placeholder="Full name" name="fullname" required><br>
                <img src="../images/mail.png" style="height:20px;width: 20px;">
                <input type="text" placeholder="email" name="email" required><br>
                <img src="../images/account.png" style="height:20px;width: 20px;">
                <input type="text" placeholder="username" name="username" required><br>
                <img src="../images/lock.png" style="height:20px;width: 20px;">
                <input type="password" placeholder="password" name="password" required><br>
                <input type="submit" name="submit_signup" value="Sing Up">
            </form>
        </div>
    </article>
</section>


</body>
</html>