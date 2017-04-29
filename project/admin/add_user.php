<?php

$con= mysqli_connect("localhost", "root", "", "cms");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Container</title>
    <!-- Bootstrap -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/g.png">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/animated.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">Container</a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="posts.php"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Post</a></li>
                    <li><a href="add_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Add User</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item active"> <i class="fa fa-tachometer"></i> Dashboard </a>
                    <a href="postdata.php" class="list-group-item"> <i class="fa fa-file-text-o"></i> All post <span class="badge">14</span> </a> 
 
                   <a href="user.php" class="list-group-item"><i class="fa fa-user"></i>  Users
  <span class="badge">14</span>
  </a> </div>
            </div>
            <div class="col-md-9">
                <h1><i class="fa fa-user-plus"></i> Add new Users <small>View All Users</small><hr>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html" class="active"> <i class="fa fa-tachometer"></i> Dashboard</a>
                    </li>
                    <li class="active"> <i class="fa fa-user-plus"></i> Add new Users</li>
                </ol>
           
                 <?php
            if(isset($_POST['submit']))
            {
                $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
                $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
                $username = mysqli_real_escape_string($con,$_POST['username']);
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);
                $role =$_POST['role'];
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
            
                if(empty($first_name) or empty($last_name) or empty($email) or empty($password) or empty($image) ) {
                    
                $error ="All * fields are essencial";
                }
          
                else{
                    
                $insert ="INSERT INTO `users` (`id`, `date`, `first_name`, `last_name`, `username`, `email`, `image`, `password`, `role`, `detail`, `salt`) VALUES (NULL, '12165463', '$first_name', '$last_name', '$username', '$email', '$image', '$password', '$role', 'welginowq;p;\r\n\r\nvd;knladn\r\n;vdnalkn', '')";
                    
                    if(mysqli_query($con,$insert))
                    {
                        echo "User successfully Added";
                    }
                    else{
                        $error="user not added";
                    }
                }
            }
            ?>
                          
            <div class="col-md-8">
                
                  <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="first_name">
                        First Name:*  
                      </label>
                      <?php 
                      if(isset($error))
                      {
                          echo "<span
                        class='pull-right' style='color:red;'>$error</span>"
    ;                      
                      }?>
                      <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="last_name">
                        last Name:*  
                      </label>
                      <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="username">
                        Username:*  
                      </label>
                      <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="eamil">
                       Email:*  
                      </label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="password">
                        Password:*  
                      </label>
                      <input type="text" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="first_name">
                        Roll:*  
                      </label>
                      <select name="role" id="role" class="form-control">
                          <option value="author">Author</option>
                          <option value="reader">Reader</option>
                          <option value="admin">Admin</option>
                      </select>
                  </div>
                  
                  
                  
                   <div class="form-group">
                      <label for="image">
                       Profile Picture:*  
                      </label>
                      <input type="file" name="image" class="form-control">
                  </div>
                  
            
                  
                  <input type="submit" value="Add User" name="submit" class="btn btn-primary">
              </form>
         
                
            </div>
           
            <div class="col-md-4"></div>
                    
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>