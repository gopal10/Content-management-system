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
                    
                    <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a></li>
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
                <h1><i class="fa fa-file"></i> Add new Post <small>View Posts</small><hr>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php" class="active"> <i class="fa fa-tachometer"></i> Dashboard</a>
                    </li>
                    <li class="active"> <i class="fa fa-user-plus"></i> Add Post</li>
                </ol>
           
                 <?php
            if(isset($_POST['submit']))
            {
                $name = mysqli_real_escape_string($con,$_POST['name']);
                $post_data = mysqli_real_escape_string($con,$_POST['post_data']);
                $title = mysqli_real_escape_string($con,$_POST['title']);
                $categories = mysqli_real_escape_string($con,$_POST['categories']);
               $date = mysqli_real_escape_string($con,$_POST['date']);
                $status =$_POST['status'];
                $author_image = $_FILES['author_image']['name'];
                $image = $_FILES['image']['name'];
                $image_tmp = $_FILES['image']['tmp_name'];
            
                if(empty($name) or empty($title) or empty($status) ) {
                    
                $error ="All * fields are essencial";
                }
          
                else{
                    
                $insert ="INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `categories`, `tags`, `post_data`, `views`, `status`) VALUES (NULL, '$date', '$title', '$name', '$author_image', '$image', '$categories', '', '$post_data', '', '$status')";
                    
                    if(mysqli_query($con,$insert))
                    {
                        echo "post successfully Added";
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
                       Author Name:*  
                      </label>
                      <?php 
                      if(isset($error))
                      {
                          echo "<span
                        class='pull-right' style='color:red;'>$error</span>"
    ;                      
                      }?>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Author Name">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="title">
                        Title:*  
                      </label>
                      <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="categories">
                        Categories:*  
                      </label>
                      <input type="text" name="categories" id="categories" class="form-control" placeholder="Username">
                  </div>
                  
                  
                   <div class="form-group">
                      <label for="date">
                       Date:*  
                      </label>
                      <input type="text" name="date" id="date" class="form-control" placeholder="Date">
                  </div>
                  
                  

                  
                  
                   <div class="form-group">
                      <label for="first_name">
                        Status:*  
                      </label>
                      <select name="status" id="status" class="form-control">
                          <option value="publish">Publish</option>
                          <option value="draft">Draft</option>
                         
                      </select>
                  </div>
                  
                  
                  
                   <div class="form-group">
                      <label for="image">
                       Image:*  
                      </label>
                      <input type="file" name="image" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <label for="image">
                       Author Image:*  
                      </label>
                      <input type="file" name="author_image" class="form-control">
                  </div>
            
                  
                  <div class="form-group">
                      <label for="post_data">
                       Post Data:*  
                      </label>
                     <textarea type="text" cols="30" rows="10" name="post_data" id="post_data" class="form-control" placeholder="post data">
                </textarea>
                    </div>
                  
                  <input type="submit" value="Add Post" name="submit" class="btn btn-primary">
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


