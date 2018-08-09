
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
session_start();
//print_r($_SESSION['email']);
?>

<html>
  <head>

     
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
<script src="f_clone_Notify.js" type="text/javascript"></script>
<link href="f_clone_Notify.css" rel="stylesheet" />
      
      
      
      
       <!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="" />

<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" type="text/css" href="">
<!--Import jQuery before materialize.js-->
	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body style="background-color:#eeeeee;">
      <?php
      if(isset($_SESSION['email'])){
      ?>
    
 <?php
      }
    ?>
      
      <nav>
    <div class="nav-wrapper" style="background-color:#212121;">
        <form style="width:25%; float:left;" action="search.php" method="post">
        <div class="input-field" id="a">
            <input  id="search" type="search" name="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          
          <i class="material-icons">close</i>
        </div>
      </form>
<?php
/*
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$sql=mysql_query("SELECT user_firstname from user where user_email='$_SESSION[email]'");

$sql2=mysql_query("SELECT user_photo from user where user_email='$_SESSION[email]'");
$row=  mysql_fetch_row($sql);

$row7=mysql_fetch_row($sql2);*/
?>
      <a href="#!" class="brand-logo center" style="float:left;"><img src=""  style="margin-top:5px;"/></a>
	  <a href="#" data-activates="mobile-demo" class="button-collapse" style="float:right;"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down">
        <li>
			<a href="#!"><span class="badge" style="margin-left:-10px;">1</span><i class="material-icons" style="padding-left:-20px;float:left;">add_alert</i></a>
		</li>
        
        <li>

			<div class="fixed-action-btn vertical click-to-toggle" style="top: -9px; right: 24px;">
				<a class="btn-floating btn-large" style="background-color:#212121;">
					<i class="large material-icons">settings</i>
				</a>
				<ul>
                                    
                                        <li><a href="logout.php" class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Logout" style="margin-top:-310px;margin-left:10px;"><i class="material-icons">power_settings_new</i></a></li>
				</ul>
			</div>

		</li>
        <li><a href="mobile.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
          <li>
          <a href="#" style="float:left;">
							<div class="chip" href="abc.html">
								<img src="44_140.jpg" class="responsive-img" alt="USER">
								
							</div>
						</a>
          </li>
        <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit Profile Here">Edit profile</a></li>
        <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Add Blog">Blog</a></li>
        <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Logout">Logout</a></li>
      </ul>

      

    </div>
  </nav>

<?php
/*$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$sql=mysql_query("SELECT user_firstname from user where user_email='$_SESSION[email]'");
$sql1=mysql_query("SELECT user_type,user_photo from user where user_email='$_SESSION[email]'");
$sql2=mysql_query("SELECT user_photo from user where user_email='$_SESSION[email]'");
$row=  mysql_fetch_row($sql);
$row5= mysql_fetch_row($sql1);
$row7=mysql_fetch_row($sql2);
*/?>

 
  
  
  
  
  
  <?php

$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}
else
{
    //echo"<h1>Registration Successful!!</h1><br>";
}
mysql_select_db("r.e.d_db",$con);

$user_id = mysql_query("select * from user where user_email='".$_SESSION['email']."'");
$row=  mysql_fetch_array($user_id);
$id=$row['id'];

$user_group = mysql_query("select * from user_meta where user_id='".$id."'");
$row1=mysql_fetch_array($user_group);
$uname=$row1['meta_key'];
$ucode=$row1['meta_value'];
//print_r($ucode);


$user = mysql_query("select * from user_meta where meta_value='".$ucode."'");
$row2=mysql_fetch_array($user);
$student=$row2['user_id'];
//print_r($student);

$user_student = mysql_query("select * from user where id='".$student."'");
$row3=mysql_fetch_array($user_student);
$usermail=$row3['user_email'];
//print_r($usermail);
 $final= mysql_query("select * from quize_taker where user_mail='".$usermail."'");
                        $row44=mysql_fetch_array($final);
                        $quize_name=$row44['username'];
                                           
?>

        <center><div class="card" style="width:38%;margin-top:5%;">
        
            <font style="font-family: Century Gothic;">Hello,You are looking at the Performance of <?php echo $quize_name;?></font>
        </div>    

            </center>
            <br>
<center>
        <table class="striped" style="width:50%;">
            <thead>
                <tr>
                    
                    <th>Test taken</th>
                    <th>Marks</th>
                </tr>
                
            </thead>
            <tbody>
                 <?php
                    $final= mysql_query("select * from quize_taker where user_mail='".$usermail."'");
                    while ($row4=mysql_fetch_array($final)){
                        //$quize_name=$row4['username'];
                        $quize_score=$row4['percentage'];
                        $quize_date=$row4['date_time'];
                        
                    
                    ?>
                <tr>
                   
                    
                    <td><?php echo $quize_date;?></td>
                    <td><?php echo $quize_score; echo'/100' ;?></td>
                    
                </tr>
                <?php }?>
            </tbody>
            
        </table>
    <br>
    <br>
    <center><font>Average progress</font>
    <div class="progress" style="width:50%;">
        <div class="determinate" style="width:70%;"></div>
    </div>
        
</center>        
    
  
      
      <!--ends here-->
      
      
      
        
   
    
 <script>
//function addComment()
//{
    //var comment=document.getElementById("comment").value;
  //var xhttp = new XMLHttpRequest();
  //xhttp.onreadystatechange = function() {
    //if (xhttp.readyState == 4 && xhttp.status == 200) {
     //document.getElementById("demo").innerHTML = xhttp.responseText;
    //}
  //};
  //xhttp.open("GET", "add_cmt_table.php?postid=<?php //echo $post_id ?>&comment="+comment, true);
  //xhttp.send();
//}

 $(window).resize(function()
        {
            if($(window).width() < 900)
                {
                    $("#card1").hide();
                    $("#tab").hide();
                    
                }
                else if($(window).width() > 300)
                    {
            $("#card1").show();
            $("#tab").show();

                    }
                                    
        });



  $(document).ready(function(){
    
    //alert("Session id : <?php //echo $_SESSION['group_id']; ?>");
      //$('#group_page').hide();
      
      //$('#group_invite_card').hide();

    $('ul.tabs').tabs();
    
    $('select').material_select();
    
    $('.modal-trigger').leanModal();
    
    $(".button-collapse").sideNav();
    
    $('.collapsible').collapsible({
      accordion : false
    });
    
  });

  function showgroupInviteCard(group_code, group_id){
      //alert(group_code + "\nid : "+group_id);
      $.post("./createSession.php",{"group_id":group_id, "group_code":group_code},function(data,status){
          console.log("Data : "+data+"\nStatus : "+status);
      });
      //$('#group_invite_card').show(100);
      
      window.location.reload();
      
      
      //$('#group_page').show();
  }

  </script>
           </body>
</html>
