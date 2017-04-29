<?php

$conn = mysqli_connect("localhost", "root", "", "cms");


$author = $_POST['author'];
$date = $_POST['date'];
$title = $_POST['title'];
$author_image = $_POST['author_image'];
$image = $_POST['image'];
$post_data = $_POST['post_data'];
$status = $_POST['status'];
$categories = $_POST['categories'];



$date = stripcslashes($date); 
$title = stripcslashes($title);
$author = stripcslashes($author);
$author_image = stripcslashes($author_image);
$image = stripcslashes($image);
$post_data = stripcslashes($post_data);
$categories = stripcslashes($categories);
$status = stripcslashes($status);



$date = mysql_real_escape_string($date);
$title = mysql_real_escape_string($title);
$author = mysql_real_escape_string($author);
$author_image = mysql_real_escape_string($author_image);
$image = mysql_real_escape_string($image);
$post_data = mysql_real_escape_string($post_data);
$categories = mysql_real_escape_string($categories);
$status = mysql_real_escape_string($status);


$result="insert into posts(date,title,author,author_image,image,categories,post_data,status) values ('$date','$title','$author','$author_image','$image','$post_data','$categories','$status')"
    or die("Failed to query database".mysql_error());
   
if(mysql_query($result))
	             {
                     echo "<script>alert('Your Registration Was Successful. Thank You !!')</script>";
                     echo "<script>window.open('main.html','_self')</script>";
                 }

?>