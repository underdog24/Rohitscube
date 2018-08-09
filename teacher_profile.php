<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teacherprofile</title>
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
        <script>
                
  $(document).ready(function() {
    $('select').material_select();
  });
        </script>
        <style>
            .main
            {
               height: 29px;
               color: #728294;
                font-family: Lato;
                font-size: 26px;
                 font-weight: 400;
                line-height: 29px;
            }
             .main2
            {
               height: 29px;
               color: #728294;
                font-family: Lato;
                font-size:15px;
                 font-weight: 400;
                line-height: 29px;
            }
            .bg
            {
                background-image: url("images/wallpaper2_1.jpg");
                background-repeat: no-repeat;
                background-size: 1360px 1000px;
            }
                  .main3
            {
               height: 29px;
               color:black;
                font-family: Lato;
                font-size:50px;
                 font-weight: 400;
                line-height: 29px;
            }
            
        </style>
    </head>
    <body bgcolor="#e5e5ff">
        <br>
        <br>
    <div class="row">
        <div class="col s12 m6">
            <div class="card" style="height:540px; width:1000px; margin-left: 160px;">
                <br>
                <center>
                <div class="main3">WELCOME TO R.ED.CUBE</div>
                </center>
                <br>
                <hr>
                <center>
                    <h4 class="main">Set up Your Profile</h4>
                </center>
    <div class="row">
        <form class="col s12" action="t_profile.php" method="post" enctype="multipart/form-data" >
            <div class="row">
                    <div class="main2" style="margin-left: 50px;"> Your Name* </div>                     
                    <select class="browser-default" style="width: 100px;height: 30px; margin-left: 50px;" name="title">
    <option value="" disabled selected>Title</option>
    <option value="Mr.">Mr.</option>
    <option value="Mrs.">Mrs.</option>
    <option value="Ms.">Ms.</option>
    <option value="Dr.">Dr.</option>
  </select>   
   
            <div class="row" style="margin-left: 170px; margin-top: -60px;">
            <div class="input-field col s3">
            <input placeholder="First Name" id="first_name" name="firstname" type="text" class="validate">
          
        </div>
        <div class="input-field col s3">
            <input id="last_name" type="text" class="validate" name="lastname" placeholder="Last Name">
        </div>
      </div>
        </div>
        <div class="main2" style="margin-left: 50px; ">What you teach?</div>
        
        <div class="input-field col s1" style="margin-left:5%;margin-top:;">
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
        
                <div class="input-field col s2">
                    <select  name="subjectarea">
    <option value="" disabled selected>Subject area</option>
    <option value="science">Science</option>
    <option value="maths">Maths</option>
    <option value="S.S">Social Science</option>
    <option value="hindi">Hindi</option>
  </select> 
                </div>
        <br>
        <br>
        <br>
       
      
        <br>
             <font style="margin-left:6%;">PHOTO:
             </font>
             <input type="file" name="Photos" class="waves-effect waves-light" style="margin-left: 25px; heigth:20px; widht:50px;">
        
        <br>
        <br>
        <hr>
             <center>
           <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>    
  </button> 
             </center>
  
  </form>
       
        </div>
        </div>
    </div>
    </div>
    </body>
</html>
