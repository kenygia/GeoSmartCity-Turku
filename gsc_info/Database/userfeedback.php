<?php


include("connect.php");
include("article/".$_GET["lang"]."/feedback.php");

if(isset($_POST["comment_submit"])){
$st=$con->prepare("INSERT INTO feedback(name,email,comment)VALUES(:n,:e,:c)");
$st->bindValue(":n",$_POST["name"]);
$st->bindValue(":e",$_POST["email"]);
$st->bindValue(":c",$_POST["comment"]);
$st->execute();







//$recipients = "feedback@yourdot.com";
//$headers["From"] = "user@somewhere.com";
//$headers["To"] = "feedback@yourdot.com";
//$headers["Subject"] = "User feedback";
//$mailmsg = "Hello, This is a test.";
/* SMTP server name, port, user/passwd */
//$smtpinfo["host"] = "smtp.mycorp.com";
//$smtpinfo["port"] = "25";
//$smtpinfo["auth"] = true;
//$smtpinfo["username"] = "smtpusername";
//$smtpinfo["password"] = "smtpPassword";
/* Create the mail object using the Mail::factory method */
//$mail_object =& Mail::factory("smtp", $smtpinfo);
/* Ok send mail */
//$mail_object->send($recipients, $headers, $mailmsg);









if($_GET["lang"]=="en"){
	$message="Thank you for your response.It has been sent successfully.";
}else if($_GET["lang"]=="en"){
	$message="Kiitos, vastauksesi on lähetetty onnistuneesti!";
}
else{
	$message="";
}
echo "<script type='text/javascript'>alert('$message');</script>";
}

?>		