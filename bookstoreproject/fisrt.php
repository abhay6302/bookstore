<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="bookstore";

   $con=mysqli_connect($servername,$username,$password,$database);

   if (!$con) {
   	die('could not connect'.mysql_error());
   }
   ?>