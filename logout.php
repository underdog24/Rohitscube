<?php

session_start();

unset($_SESSION['email']);

session_destroy();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
header('location:Home.php');
?>