<?php

$username = $_POST['user'];
$password = $_POST['pass'];

session_start();

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$conn = mysql_connect("localhost", "root", "" );
mysql_select_db( "cms" );

$password = md5($password);

$result = mysql_query("select * from register where username = '$username' and password = '$password'")
           or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);

if ($row['username'] == NULL && $row['password'] == NULL )
     {
         echo"<script>alert('You Login Was Successful. Welcome !!')</script>";
         echo"<script>window.open('blog/index.php','_self')</script>";
     }

   else if ($row['username'] == $username && $row['password'] == $password )
     {
         echo"<script>alert('You Login Was Successful. Welcome !!')</script>";
         echo"<script>window.open('blog/index.php','_self')</script>";
     }
   else
     {
         echo"<script>alert('Something Went Wrong. Please Try Again !!')</script>";
         echo"<script>window.open('login.php','_self')</script>";  
     }   
   
?>
