<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
session_start();
?>


<html>
    <title>R.E.D</title>
  <head>
  <link href="home.css" rel="stylesheet" type="text/css" media="all" />
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
    
    
    
    
    <script type="text/javascript">
            function neo()
            {


               
                var regex = /^[A-z0-9_\-]+[.][A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{2,4}$/;
                var regex1 = /^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{2,4}$/;
                
               
                if (regex.test(document.getElementById("email").value))
                {
                        document.getElementById("email").style.borderColor="green";
                       
                        return true;
                        
                }
                else if(regex1.test(document.getElementById("email").value))
                {
                        document.getElementById("email").style.borderColor="green";
                       
                        return true;
                }
                else
                    {
                        document.getElementById("email").style.borderColor="red";
                        Materialize.toast('Invalid Email!', 4000)
                        return false;
                        
                    }
            }

                    function neo2()
                    {
                         var pass2=document.getElementById("pass").value;
                         var str=pass2.length;

                         if(str>='6')
                            {
                                document.getElementById("pass").style.borderColor="green";
                                
                                return true;
                            }
                            else
                                {
                                  document.getElementById("pass").style.borderColor="red";
                                Materialize.toast('psswrd must be > 6 letters!', 6000)
                                return false;
                                }
                        

            }



            function alpha() {
                var regex = /^[a-zA-Z]*$/;
                if (regex.test(document.getElementById("txtfname").value)) {
                        return true;
                }
                else {
                    document.getElementById("errfname").innerHTML = " Enter Alphabets Only";
                    return false;
                }
                if(regex.test(document.getElementById("txtlname").value)){
                    return true;
                }
                 else {
                    document.getElementById("errlname").innerHTML = " Enter Alphabets Only";
                    return false;
                }

            }
        </script>

    
    
    
    
    
    
    
    
    
    
    <script>
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();

            $('.materialboxed').materialbox();
            $('select').material_select();



        });
        </script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0-rc1/angular-material.min.js"></script>-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->


    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
      <div class="row">
          <div class="col s12 m12 l12">
              <div class="card" style="height:650px; background-image:url('display (2).png');background-repeat:no-repeat;background-size:1400px 900px;">
                    <!-- Modal Trigger -->

                        <a class="button modal-trigger" href="#modal0" style="margin-top:5%;margin-left:80%;">Login</a>
                        
                        
                        <font style="font-size:52px;color:white;margin-left:30%;margin-top:-40%;font-family:Comic Sans MS;">Rohit's Educational Cube</font>
                        <font style="font-size:24px;color:white;margin-left:30%;margin-top:-40%;font-family:Comic Sans MS;"><center>Education That Lasts Beyond A Lifetime</center></font>
                         
                        <br>
                        <a class="button modal-trigger" href="#modal1" style=" width:20%; margin-top:15%;margin-left:5%;">I'm a Teacher</a>
                        <a class="button modal-trigger" href="#modal2" style="width:20%; margin-top:15%;margin-left:14%;">I'm a Student</a>
                        <a class="button modal-trigger" href="#modal3" style="width:20%;margin-top:15%;margin-left:14%;">I'm a Parent</a>






                       <!-- Modal Structure 0 -->
                      <div id="modal0" class="modal" style="width:400px;margin-top:100px;border-radius:20px 20px 20px 20px;">
                        <div class="modal-content col s6 m8">

                            <div class="row col s6 m8" style="width:350px;">


                                <div class="valign-wrapper" style="margin-left:25%;">
                                <h5 class="valign"><font style="font-family:Century Gothic;">Login Here</font></h5>

                                </div>
                                <div class="valign-wrapper" style="margin-left:20%;">
                                <h6 class="valign"><font style="font-family:Century Gothic;"></font></h6>

                                </div>

                    <form action="login.php" method="post">
                             <div class="input-field col s12">
                                <input type="text" id="email" class="validate" name="email" onblur="neo();">
                                <label for="email">Email id</label>
                             </div>
                            <div class="input-field col s12">
                                <input type="password" id="pass" class="validate" name="password" onblur="neo2();">
                                <label for="pass">Password</label>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left:30%;margin-top:10%;">Submit
                            <i class="material-icons right">send</i>
                            </button>
                            </div>
                        
                            </form>
                       </div>
                    </div>
                      <!--*******************Model structure 0 ends********************************-->


                     <!-- Modal Structure -->
                      <div id="modal1" class="modal" style="width:400px;margin-top:100px;border-radius:20px 20px 20px 20px;">
                        <div class="modal-content col s6 m8">

                            <div class="row col s6 m8" style="width:350px;">


                                <div class="valign-wrapper" style="margin-left:5%;">
                                <h5 class="valign"><font style="font-family:Century Gothic;">R.ED.Cube for Teachers</font></h5>

                                </div>
                                <div class="valign-wrapper" style="margin-left:20%;">
                                <h6 class="valign"><font style="font-family:Century Gothic;">Create your Classroom</font></h6>

                                </div>

                                 <form action="home_teacher_register.php?type=Teacher" method="post">
                             <div class="input-field col s12">
                                 <input type="text" id="email" class="validate" name="email" onblur="neo();">
                                <label for="email">Email id</label>
                             </div>
                            <div class="input-field col s12">
                                <input type="password" id="pass" class="validate" name="password" onblur="neo2();">
                                <label for="pass">Password</label>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left:30%;margin-top:10%;">Submit
                            <i class="material-icons right">send</i>
                            </button>
                            </div>
                            </form>
                       </div>
                    </div>

                      <!--*******************Model structure 1 ends********************************-->



                      <!--**********Model 2 structure Starts**************************************-->
                      <div id="modal2" class="modal" style="width:500px;margin-top:5%;border-radius:10px 10px 10px 20px;">
                              <div class="modal-content col s6 m8">

                                    <div class="row col s6 m8" style="width:400px;">


                                        <div class="valign-wrapper" style="margin-left:20%;margin-top:-5%;">
                                            <h5 class="valign"><font style="font-family:Century Gothic;">R.ED.Cube for Students</font></h5>
                                        </div>

                                        <div class="valign-wrapper" style="margin-left:30%;margin-top:-5%;">
                                            <h6 class="valign"><font style="font-family:Century Gothic;">Join your Classroom</font></h6>
                                        </div>
                                           <form action="home_teacher_register.php?type=Student" method="post">
                                        <div class="input-field col s6">
                                            <input type="text" id="fname" class="validate" name="firstname">
                                            <label for="fname">FirstName</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input type="text" id="lname" class="validate" name="lastname">
                                            <label for="lname">LastName</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" id="gcode" class="validate" name="groupcode">
                                            <label for="gcode">GroupCode<sup><font color="red">*</font></sup></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" id="username" class="validate" name="uname">
                                            <label for="username">UserName</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="email" id="email" name="email" class="validate" onblur="">
                                            
                                            <label for="email">Email<sup><font color="red">*</font></sup></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <input type="password" id="pass" class="validate" name="password">
                                            <label for="email">password</label>
                                        </div>
                                        <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left:30%;margin-top:10px;">Submit
                                            <i class="material-icons right">send</i>
                                        </button>
                            </div>
                            </form>
                       </div>
                    </div>

                    <!--**********Model 2 structure Ends**************************************-->

                    <!--**********Model 3 structure starts**************************************-->

                    <div id="modal3" class="modal" style="width:600px; margin-top:40px;border-radius: 20px 20px 20px 20px;">
    <div class="modal-content">
        <center><h3>R.ED.Cube for Parent</h3>
        
        </center>
        <form action="home_teacher_register.php?type=Parent" method="post">

                  <div class="row">
        <div class="input-field col s6">
            <input id="name" type="text" name="firstname" class="validate">
          <label for="name">First Name</label>
        </div>

        <div class="input-field col s6">
            <input id="code" type="text" name="lastname" class="validate">
          <label for="code">Last Name</label>
        </div>
                      <div class="input-field col s12">
                          <input id="code" type="text" name="code" class="validate">
          <label for="code">parent Code</label>
        </div>

              <div class="input-field col s12">
                  <input id="uname" type="text" name="user_username" class="validate">
          <label for="uname">UserName</label>
        </div>
             <div class="input-field col s12">
                 <input type="email" id="email" name="email" class="validate">
          <label for="email">Email</label>
        </div>
                   <div class="input-field col s12">
                       <input id="password" type="password" name="password" class="validate">
          <label for="password">password</label>
        </div>

          <center>
       <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
          </center>
             </div>
      </form>
   </div>
   </div>





                    <!--**********Model 3 structure Ends**************************************-->
              </div>
              <!--main card ends here-->
              <br>
              <br>
              
              
              
                <div class="col s1 m8 l12">
                    <h4><style="font-size:34px;font-family:Arial"><center>Learning Made Easy</center></font></h4>
                    
                    <img width="250"  src="student.png"    style="margin-top:6%;margin-left:5%;">
                    <img width="250"  src="teacher_1.jpeg" style="margin-top:-13%;margin-left:16%;">
                    <img width="250"  src="parent_1.jpg"    style="margin-top:-14%;margin-left:75%;">
              </div>
              
       </div>
  </div>

  <footer class="footer-basic-centered">


<p class="footer-company-motto">The Education motto.</p>


<p class="footer-links">

<a href="#">Home</a>
				·

<a href="#">Blog</a>
				·

<a href="#">About</a>
				·

<a href="#">Faq</a>
				·

<a href="#">Contact</a>
			</p>


<p class="footer-company-name">R.E.C &copy; 2016</p>


</footer>

	
  </body>
</html>
