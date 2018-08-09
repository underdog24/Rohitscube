
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
session_start();
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

			<div class="fixed-action-btn vertical click-to-toggle" style="top: -9px; right: 24px;">
				<a class="btn-floating btn-large" style="background-color:#212121;">
					<i class="large material-icons">settings</i>
				</a>
				<ul>
                                    <li><a href="profilepage.php" class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Edit Profile" style="margin-top:-360px; margin-left:10px;"><i class="material-icons">insert_chart</i></a></li>
					<!--<li><a class="btn-floating yellow tooltipped" data-position="left" data-delay="50" data-tooltip="Blog" style="margin-top:-465px; margin-left:10px;"><i class="material-icons">format_quote</i></a></li>-->
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
$sql=mysql_query("SELECT * from teacher_create_group where group_email='$_SESSION[email]'");

while($row= mysql_fetch_assoc($sql))
{
    ?>
          <a href="#" onclick="showgroupInviteCard('<?php echo $row['group_code']; ?>',' <?php echo $row['group_id']; ?>');" >
               
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
      <div class="collapsible-header"><i class="material-icons">playlist_add</i>
      <a class="modal-trigger" href="#modal12"><font color="black">Create group</font></a></div>
      <div class="collapsible-body">

 
              <div id="modal12" class="modal" style="width:500px;margin-top:100px;border-radius:20px 20px 20px 20px;height:400px;">
                        <div class="modal-content col s10 m12">
                            <h6>Bring your classroom onto R.E.D</h6>
                            <hr>
                          <form action="teacher_create_group.php" method="post">
                            <div class="input-field col s12">
    
                                <input type="text" id="gname" class="validate" name="groupname">
                                <label for="gname">Group name</label>
                                </div>
                                <div class="input-field col s12" style="margin-top:5%;">
                                    <select name="grade">
                        <option value="" disabled selected>Grade</option>
                        <option value="1">1<sup>st</sup></option>
                        <option value="2">2<sup>nd</sup></option>
                        <option value="3">3<sup>rd</sup></option>
                        <option value="4">4<sup>th</sup></option>
                        <option value="5">5<sup>th</sup></option>
                        <option value="6">6<sup>th</sup></option>
                        <option value="7">7<sup>th</sup></option>
                        <option value="8">8<sup>th</sup></option>
                        <option value="9">9<sup>th</sup></option>
                        <option value="10">10<sup>th</sup></option>
                        <option value="11">11<sup>th</sup></option>
                        <option value="12">12<sup>th</sup></option>
                        </select>
                                </div>
                                <br>
                                <div class="input-field col s12" style="margin-top:5%;">
                                    <select name="subjectarea">
                        <option value="" disabled selected>Select Area</option>
                        <option value="Science">Science</option>
                        <option value="Computer Technology">Computer Technology</option>
                        <option value="Social Studies">Social Studies</option>
                        <option value="World Languages">World Languages</option>
                        <option value="Health and P.E">Health and P.E</option>
                        <option value="Mathematics">Mathematics</option>
                        <option value="Special Education">Special Education</option>
                    </select>

                </div>
                                <center>
       <button class="btn waves-effect waves-light" type="submit" name="action">create
  </button>
          </center>
                                </form>
                            </div>
      
      
              </div>
      </div>
    </li>

                <div class="collection" style="margin-top:5%;box-shadow: 2px 2px 3px #ede7f6;">
                    <a href="addQuestion.php" class="collection-item">Design a Quiz</a>
                    <a href="#!" class="collection-item">Support</a>
                    <a href="#!" class="collection-item">Show All</a>
                </div>
                

                <!--**********************Tabs Started*********************-->

                


                
    
     </div>
                
    <div class="card col s8 m6" style="margin-left:445%;margin-top:-174%;height:auto;width:120%;position:relative;">
        <div class="collection col s10 m12" style="margin-top:5%;box-shadow: 2px 2px 3px #ede7f6;">
                    <a href="#!" class="collection-item">Community</a>
                    <a href="#!" class="collection-item">Support</a>
                    <a href="#!" class="collection-item">Show All</a>
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
          <div class="card col s4 m6"  style="margin-left:25%;margin-top:-25%;">

                                <div class="input-field col s12">
                                 <form name="frm" method="post" >
                                <input type="text" id="cmt" class="validate" name="cmt">
                                <label for="comment">post here</label>   
                                <center><input type="button" value="Post" onclick="get()" style="border-radius:0px 10px 0px 10px;width:20%;color:#eeeeee;background-color:#212121;"></center>
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
             <input type="submit" name="submit" id="submit" value="upload" />
             </center>
                             
  </form>
       
                                </div>
          </div>

              <?php
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
    $post_file=$row['post_image']

?> 
      <div class="card col s4 m6" style="margin-left:25%;" id="an">          
        <img src="<?php echo $user_pic; ?>" width=50px; height=50px;>
   <div style="margin-left:60px; margin-top:-30px"><?php echo $firstname;?>&nbsp; <?php echo $lastname;?></div>
         <br>
         <br>
         <div style="color:red;"><?php echo $post;?></div>
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
         <div class=card style="background-color:#eeeeee;">
             <div class=input-field col s6 style='width:80%;'>
                 
                 <form action="add_cmt_table.php?postid=<?php echo $post_id; ?>" method="post">
                     <input type=text id="comment" name="comment">
                     <label for="comment">comment here</label>
                     <input type="submit" value="Comment" style="margin-left:102%;margin-top: -7%;border-radius:0px 10px 0px 10px;width:20%;color:#eeeeee;background-color:#212121;">     
                 </form>
             </div>
             
             
         </div>
      </div>
<?php
}
?>
          
<?php
if(isset($_SESSION['group_code'])){
    
?>
  <div class="card col s4 m6" style="margin-left:80%; position: absolute; width: 150px;" id="group_invite_card">
      <div class="row">
        <label class="col l8">Group Code : </label>
        <p class="col l3"> <?php echo $_SESSION['group_code']; ?> </p>
    
        <center><a href="#m1" class="modal-trigger">INVITE</a></center>
      </div>
<?php
}
}
?>
      <!--modal for invite starts-->
      
      <div id="m1" class="modal" style="width:500px;margin-top:100px;border-radius:20px 20px 20px 20px;height:240px;">
                        <div class="modal-content col s10 m12">
                           
                            <center><h5>Send your students group code</h5></center>
             <div class=input-field col s12>
                 <form action="mailer.php" method="get">
                     <input type=text id="email" name="email">
                     <label for="email">Enter Email ID:</label>
                     <center><input type="submit" value="Send" style="margin-top: 5%;border-radius:0px 10px 0px 10px;width:20%;color:#eeeeee;background-color:#212121;"/></center>
                     
                 </form>
             </div>
                            
                            </div>
      
      
              </div>
      
      <!--ends here-->
      
      
      
        
   </div>

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
