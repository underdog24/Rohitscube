<?php

$con=mysql_connect('localhost',"root","");
if(!$con)
{
    die("Could not connect:".mysql_error());
}
else
{
    //connected
}
mysql_select_db("r.e.d_db",$con);
?>