<html>
<head>
          <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
<script src="f_clone_Notify.js" type="text/javascript"></script>
<link href="f_clone_Notify.css" rel="stylesheet" />
    <style>
        .box
        {
            height:100px;
            width:100px;
            border: solid;
        }
    </style>
</head>
</html>


<?php
session_start();
require_once 'PHPMailer/PHPMailerAutoload.php';
$em=$_GET['email'];

$mail             = new PHPMailer;

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "rohitcube00@gmail.com"; // SMTP account username
$mail->Password   = "rohitcube";        // SMTP account password

$mail->From = "rohitcube00@gmail.com";
$mail->FromName = "Rohit Cube";
$mail->addAddress("$em");

$mail->IsHTML(true);
$mail->Subject    = "Hello Your group code is ";

$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
//$sql=mysql_query("SELECT * from teacher_create_group where group_id='$_SESSION[email]'");
//$row= mysql_fetch_assoc($sql);
           $code=$_SESSION['group_code']; 

            
$mail->Body = "<div style='background-color:#82b1ff blue accent-1;'><font style='color:blue;'><h4>Welcome to Rohit's Educational Cube.</h4></font></div>"
        . "<br>To join our Classroom add group code during sign up. Your group code is: <b>$code</b></div></td></tr></tbody></table>";
    
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("location:home_page_teacher.php");
}
    
?>