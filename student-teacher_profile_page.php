<?php
  session_start();
?>
<html>
<title>Profile Page</title>
<head>



  <link href="footer-basic-centered.css" rel="stylesheet" type="text/css" media="all" />

      <!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="" />

<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" type="text/css" href="">
<!--Import jQuery before materialize.js-->
	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();

            $('.materialboxed').materialbox();
            $('select').material_select();



        });
        </script>

</head>
<body>
<?php
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$sql=mysql_query("SELECT user_firstname from user where user_email='$_SESSION[email]'");
$sql2=mysql_query("SELECT user_photo from user where user_email='$_SESSION[email]'");
$sql3=mysql_query("SELECT user_type from user where user_email='$_SESSION[email]'");
$row=mysql_fetch_row($sql);
$row2=mysql_fetch_row($sql2);
$row3=mysql_fetch_row($sql3);
?>

    <div class="card" style="height:30%;width:100%;">
        <div class="valign-wrapper">
            <?php
            $sql4=mysql_query("SELECT COUNT(group_name) from teacher_create_group where group_email='$_SESSION[email]'");
  
             while ($row4= mysql_fetch_row($sql4)){
                 
            ?>
            <h5 class="valign" style="margin-top:11%;margin-left:70%;">Managing &nbsp;<?php echo $row4[0]; ?> groups</h5>
        </div>
             <?php }?>
        <img src="<?php echo $row2[0]; ?>" class="circle responsive-img" style="width:20%;height:90%;margin-top:-7%;margin-left:37%;">

        <div class="valign-wrapper">
        <h5 class="valign" style="margin-top:-32%;margin-left:45%;"><?php echo $row3[0]; ?></h5>
        </div>


        <div class="valign-wrapper">
        <h5 class="valign" style="margin-top:-15%;margin-left:5%;">Managing $$ groups</h5>
        </div>




</div>



<hr style="width:47%;margin-left:54%;margin-top:4%;"></hr>
<div class="valign-wrapper">
        <h5 class="valign" style="margin-top:-3%;margin-left:65%;"><?php echo $row[0]; ?></h5>
        </div>
<div class="card" style="width:40%;height:100%;margin-top:10%;margin-left:28%;background-color:#adb9da; ">















</body>


</html>