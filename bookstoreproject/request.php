<?php 
 
$con=mysqli_connect('localhost','root','','bookstore');
 if (isset($_POST['sumbit']))
 {
 	$name=$_POST['name'];
 	$email=$_POST['mail'];
 	$city=$_POST['city'];
 	$phone=$_POST['number'];
 	$bookdetail=$_POST['details'];

 	$sql="INSERT INTO request ('name','city','phone_no','email','bookname') values ('$name','$mail','$city','$number','$details')";
   
   if (mysql_query($con,$sql)) {

    echo "new record has been added successfully";

   } 

   else{
    echo "error: ". $sql."";
   }
