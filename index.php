<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
      <script src="js/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.min.js"></script>
        <meta charset="UTF-8">
        <title></title>
        <script>
        function start(url)
        {
            window.location=url;
        }
        </script>
    </head>
    <body bgcolor="#eeeeee">
        <nav style="background-color:#212121;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center"><font style="font-family:Comic Sans MS;">Lets See what you learned!</font></a>
      
    </div>
  </nav>
        <br>
        <center><h4><font style="font-family:Comic Sans MS;">Click when you are ready to start the Quiz</font></h4></center>
        <br>
        <button class="waves-effect waves-light btn" onclick="start('quizehome.php?question=20')" style="margin-left:40%;">Click here to begin</button>
    </body>
</html>
