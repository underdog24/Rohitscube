<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
       <!-- meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="" />

<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection">

    <link rel="stylesheet" type="text/css" href="">
<!--Import jQuery before materialize.js-->
	<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body style="background-color:#eeeeee;">
      <nav>
    <div class="nav-wrapper" style="background-color:#212121;">
      <form style="width:25%; float:left;">
        <div class="input-field" id="a">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
<?php
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$sql=mysql_query("SELECT user_firstname from user where user_email='$_SESSION[email]'");

$sql2=mysql_query("SELECT user_photo from user where user_email='$_SESSION[email]'");
$row=  mysql_fetch_row($sql);

$row7=mysql_fetch_row($sql2);
?>
      <a href="#!" class="brand-logo center" style="float:left;"><img src=""  style="margin-top:5px;"/></a>
	  <a href="#" data-activates="mobile-demo" class="button-collapse" style="float:right;"><i class="material-icons">menu</i></a>

      <ul class="right hide-on-med-and-down">
        <li>
			<a href="#!"><span class="badge" style="margin-left:-10px;">1</span><i class="material-icons" style="padding-left:-20px;float:left;">add_alert</i></a>
		</li>
        <li>
			
		</li>
        <li>

			<div class="fixed-action-btn vertical click-to-toggle" style="top: -9px; right: 24px;">
				<a class="btn-floating btn-large" style="background-color:#212121;">
					<i class="large material-icons">settings</i>
				</a>
				<ul>
					<li><a class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Profile" style="margin-top:-450px; margin-left:10px;"><i class="material-icons">insert_chart</i></a></li>
					<!--<li><a class="btn-floating yellow tooltipped" data-position="left" data-delay="50" data-tooltip="Blog" style="margin-top:-485px; margin-left:10px;"><i class="material-icons">format_quote</i></a></li>-->
                                        <li><a href="./destroySession.php" class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Logout" style="margin-top:-390px;margin-left:10px;"><i class="material-icons">power_settings_new</i></a></li>
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
        <li>
        <div class="input-field" id="a" style="background-color:red;">
          <input id="search" type="search" required>
          <label for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div></li>
      </ul>

    </div>
  </nav>

<?php
$con=mysql_connect('localhost',"root","");
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
?>

    <div class="row">
        <div class="col s2 m2" style="margin-left:-20%;margin-top:2%;">
            <div class="card">
                <div class="avatar-container section">

                    <img class="responsive-image"  src="<?php echo $row7[0] ?>" style="width:20%;margin-left:4%;">
                    <a class="" href="#">Hi, <?php echo $row[0] ?></a>
                    
                    <p class="" style="margin-left:25%;margin-top:-20%;"><?php echo $row5[0] ?></p>
                    
                </div>
                </div>
            <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">supervisor_account</i>View Groups</div>
      <div class="collapsible-body">
     <?php
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$sql=mysql_query("SELECT * from teacher_create_group where group_code in (select meta_value from user_meta where user_id=(select id from user where user_email='".$_SESSION['email']."'))");


while($row= mysql_fetch_assoc($sql))
{
    ?>
          <a href="#" onclick="createGroupSession('<?php echo $row['group_code']; ?>',' <?php echo $row['group_id']; ?>');" >
               
              <center>
                  <?php echo $row['group_name']; ?>
              </center>
          </a>
   <?php
}
?>
      </div>
    </li>

    
    <li>
      <div class="collapsible-header"><i class="material-icons">perm_identity</i>Parent Code</div>
      <div class="collapsible-body">
     <?php
$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}

mysql_select_db("r.e.d_db",$con);
$user_id = mysql_query("select * from user where user_email='".$_SESSION['email']."'");
$row=  mysql_fetch_array($user_id);
$id=$row['id'];
$sql=mysql_query("select * from user_meta where user_id='".$id."'");
$row1= mysql_fetch_array($sql);
$parentcode=$row1['meta_key'];

$code=$row1['meta_value'];

if($parentcode=='parent_code'){
    ?><center>
        <a href="#"><?php echo $code;?></a></center>
        <?php
}
else
{
    echo 'no code';
}
   ?>   
      </div>
    </li>

    
    
    
    
    
    
    
    
                 <div class="collection" style="margin-top:5%;box-shadow: 2px 2px 3px #ede7f6;">
                     <a href="index.php" class="collection-item">Start a Quiz</a>
                    <a href="#!" class="collection-item">Show All</a>
                </div>
                

                

                


                
    
     </div>
                
    <div class="card col s8 m6" style="margin-left:445%;margin-top:-174%;height:auto;width:120%;position:relative;">
        <div class="collection col s10 m12" style="margin-top:5%;box-shadow: 2px 2px 3px #ede7f6;">
                    <a href="#!" class="collection-item">Start a Quiz </a>
                    <a href="#!" class="collection-item">Parent Code</a>
                    <a class="modal-trigger" href="#modst">Show All</a>
        </div>
    </div>
        <div id="modst" class="modal" style="width:500px;margin-top:100px;border-radius:20px 20px 20px 20px;height:400px;">
            <div class="modal-content col s10 m12">
                                        <div class="input-field col s12">
                                            <input type="text" id="scode" class="validate" name="grstcode">
                                            <label for="gcode">GroupCode<sup><font color="red">*</font></sup></label>
                                        </div>
            </div>
        </div>

                <!--**********************Tabs Ended*********************-->
                <script src="jquery-1.6.1.min.js" type="text/javascript">
                </script>
<script type="text/javascript">
function get()
{
    var input=$('#cmt').val();
    $.post('add_cmt.php',{comment:input},function(output){$('#an').slideDown('slow').prepend(output+'<br/>').hide().fadeIn('slow')});
};
</script>

<?php
if(isset($_SESSION['group_id'])){
    
?>
          <div class="card col s4 m6" style="margin-left:25%;margin-top:-23%; margin-bottom: 10px;">

                                <div class="input-field col s12">
                                 <form name="frm" method="post">
                                <input type="text" id="cmt" class="validate" name="cmt">
                                <label for="comment">post here</label>
                                <center><input type="button" value="post" onclick="get()" style="border-radius:0px 10px 0px 10px;width:20%;color:#eeeeee;background-color:#212121;"></center>
                                </form>
                                 <h3><p align="center">Files Upload  And  Download</p></h3>
                                

                                <form class="col s12" action="pdf.php" method="post" name="form" enctype="multipart/form-data">
 
             <font style="margin-left:6%;">PHOTO:
             </font>
             <input type="file" name="photo" class="waves-effect waves-light" style="margin-left: 25px; heigth:20px; widht:50px;">
             <br>
             <br>
        <hr>
             <center>
             <input type="submit" name="submit" id="submit" value="Submit" style="border-radius:0px 10px 0px 10px;width:20%;color:#eeeeee;background-color:#212121;"/>
             </center>
                             
  </form>
                                </div>

               
          </div>

          
              <?php
              
              
//$sql=mysql_query("SELECT id, user_photo,user_firstname,user_lastname from user where user_email='".$_SESSION['email']."'");
//$row=  mysql_fetch_array($sql);
//if($row){
//    $user_id = $row['id'];
//    $user_pic=$row['user_photo'];
//    $firstname=$row['user_firstname'];
//    $lastname=$row['user_lastname'];
//}
//
//$sql=mysql_query("SELECT meta_value from user_meta where id='".$user_id."'");
//$row10=  mysql_fetch_array($sql);
//if($row10){
//   $user_groupcode=$row10['meta_value'];
//}

//
//$sql=mysql_query("SELECT group_id from teacher_create_group where group_email='".$_SESSION['email']."'");
//if(!$sql){
//    die("Invalid Request : ".mysql_error());
//}
//
//$row1=  mysql_fetch_array($sql);
//
//if($row1){
//    $group_id = $row1['group_id'];
//    
//    print_r($group_id);
//}          
$sql11=mysql_query("SELECT id, user_photo,user_firstname,user_lastname, pid,post_content,post_image from post p inner join user u on p.user_id=u.id where p.group_id='".$_SESSION['group_id']."' order by pid desc");
 
          
while($row=mysql_fetch_array($sql11)){

    $user_id = $row['id'];
    $user_pic=$row['user_photo'];
    $firstname=$row['user_firstname'];
    $lastname=$row['user_lastname'];
    
    $post_id = $row['pid'];
    $post = $row['post_content'];
    $post_file=$row['post_image'];

?> 
                 
      <div class="card col s4 m6" style="margin-left:25%;" id="an">          
        <img src="<?php echo $user_pic; ?>" width=50px; height=50px;>
       <div style="margin-left:60px; margin-top:-30px"><?php echo $firstname;?>&nbsp; <?php echo $lastname;?></div>
         <br>
         <br>
         <div style="color:blue;"><?php echo $post;  ?></div>
         <?php
         if($post_file != null){
         ?>
         <div style="color:red;"><img src="tick.png"><a href="download.php?filename=<?php echo $post_file;?>"><?php echo $post_file;?></a></div>
         <?php }
         ?>
         <br>
         <?php
         
         $sql12=mysql_query("SELECT comment_content, user_firstname, user_lastname, user_photo from comment c inner join user u on u.id=c.user_id where c.p_id=$post_id;");
        
         
         if(!$sql12){
             die("Invalid query : ".mysql_error());
         }
         
         while($row = mysql_fetch_array($sql12))
         {
             $comment_content = $row['comment_content'];
             $user_name = $row['user_firstname']." ".$row['user_lastname'];
             $user_img = $row['user_photo'];
         ?>
         
         <div>
             <img src="<?php echo $user_img; ?> "width=50px; height=50px; style="margin-left:5%;"></div><sup>
         <div style="color:blue; margin-left:110px; font-size:100%; margin-top:-30px"><b><?php echo $user_name;?></b> </div></sup>
         
         <div style="margin-left:20%;"><?php echo $comment_content;  ?></div>
        <br/>
         
         <?php
         }
         ?>
         
         &nbsp;
         <div class=card style="background-color:#eeeeee;;">
             <div class=input-field col s6 style='width:80%;'>
                 <form action="add_cmt_table.php?postid=<?php echo $post_id ?>" method="post">
                     <input type=text id="comment" name="comment">
                     <label for="comment">comment here</label>
                     
                     <input type="text" value="student" name="user_type" hidden/>
                     
                     <input type="submit" value="comment" style="margin-left:102%;margin-top: -7%;border-radius:0px 10px 0px 10px;width:20%;color:#eeeeee;background-color:#212121;">     
                 </form>
             </div>
             
         </div>
      </div>
<?php
}
}
?>
          

  
        </div>
    
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

function createGroupSession(group_code, group_id){
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
