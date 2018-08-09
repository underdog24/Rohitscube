<?php
session_start();
?>

<?php
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$sql=mysql_query("SELECT user_firstname from user where user_email='$_SESSION[email]'");
$sql1=mysql_query("SELECT user_type from user where user_email='$_SESSION[email]'");
$sql2=mysql_query("SELECT user_photo from user where user_email='$_SESSION[email]'");
$row=  mysql_fetch_row($sql);
$row5= mysql_fetch_row($sql1);
$row7=mysql_fetch_row($sql2);
?>

<html>
    <head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link  rel="stylesheet" href="toastr.css">
    <link type="text/css" rel="stylesheet" href="profile.css">
    
<!--Import jQuery before materialize.js-->
	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        </head>
        <body>


            <nav style="height:2%;">
            <div class="nav-wrapper" style="background-color:#EF8E27;height:90%;">
                
            </div>
            </nav>


            <div class="card" style="width:100%;height:90%;background-color:#212121;margin-top:-.5%;position:fixed;">
            
            <div class="pro" style="margin-top:10%;">
           <center><img src="<?php echo $row7[0] ?>" width="120"></center>
        
            </div>
            <div class="name">
        

            </div>


            <div class="grp">
                
                <b><center><?php echo $row[0] ?></center></b>

            </div>
            

   <div class="grp">
                      <?php
            $sql4=mysql_query("SELECT COUNT(group_name) from teacher_create_group where group_email='$_SESSION[email]'");
  
             while ($row4= mysql_fetch_row($sql4)){
                 
            ?>
       <b><center>Managing group &nbsp;<?php echo $row4[0] ?></center></b>
             <?php } ?>
            </div>
                
                
                <div class="Desig">
                <b><center><?php echo $row5[0] ?></center></b>
                

            </div>

</div>




        </body>
        </html>