<?php

$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];
$confirm_password = $_POST['confpass'];
$contact_number = $_POST['contno'];
$city = $_POST['city'];

$username = stripcslashes($username);
$email = stripcslashes($email);
$password = stripcslashes($password);
$confirm_password = stripcslashes($confirm_password);
$contact_number = stripcslashes($contact_number);
$city = stripcslashes($city);
$username = mysql_real_escape_string($username);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$confirm_password = mysql_real_escape_string($confirm_password);
$contact_number = mysql_real_escape_string($contact_number);
$city = mysql_real_escape_string($city);

$conn = mysql_connect("localhost", "root", "");
mysql_select_db( "cms" );

if($username!='' && $email!='' && $password!='' && $confirm_password!='' && $contact_number!='' && $city!='')
{

      if($password==$confirm_password)
        {
		   $md5pass = md5($password);
		   
		   $md5confirmpass = md5($confirm_password);
		   
           $result="insert into register(username,email,password,confirm_password,contact_number,city) values ('$username','$email','$md5pass','$md5confirmpass','$contact_number','$city')";
              if(mysql_query($result))
	             {
                     echo "<script>alert('Your Registration Was Successful. Thank You !!')</script>";
                     echo "<script>window.open('index.php','_self')</script>";
                 }
        }
      if($password!=$confirm_password)
        {
           echo "<script>alert('Please Check Your Confirmed Password')</script>";
	       echo "<script>window.open('register.php','_self')</script>";
		}
}
else
   {
       if($username=='')
          {
              echo "<script>alert('Please Enter An Username')</script>";
          }
       if($email=='')
          {
              echo "<script>alert('Please Enter An E-Mail')</script>";
          }
       if($password=='')
          {
              echo "<script>alert('Please Enter A Password')</script>";
          }
       if($confirm_password=='')
          {
              echo "<script>alert('Please Confirm Your Password')</script>";
          }
       if($contact_number=='')
          {
              echo "<script>alert('Please Enter A Contact Number')</script>";
          }
       if($city=='')
          {
              echo "<script>alert('Please Enter A City')</script>";
          }
    
	  echo "<script>window.open('register.php','_self')</script>";

    }

	
?>