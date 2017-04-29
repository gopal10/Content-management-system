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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="index.php">Container</a> </div>
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
                    <a href="category.php" class="list-group-item"> <i class="fa fa-folder-open"></i> Categories <span class="badge">14</span> </a> <a href="user.php" class="list-group-item"><i class="fa fa-user"></i>  Users
  <span class="badge">14</span>
  </a> </div>
            </div>
            <div class="col-md-9">
                <h1>
          
  <i class="fa fa-tachometer"></i>  Dashboard <small>Statitics Overview</small><hr>
 
                </h1>
                <ol class="breadcrumb">
                    <li class="active"> <i class="fa fa-tachometer"></i> Dashboard</li>
                </ol>
                <div class="row tag-boxes">
                 
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"> <i class="fa fa-file-text fa-5x"></i> </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge">18</div>
                                        <div class="text-right">All Post</div>
                                    </div>
                                </div>
                            </div>
                            <a href="postdata.php">
                                <div class="panel-footer"> <span class="pull-left"><i class="fa fa-arrow-circle-right"></i> View All Post</span> <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3"> <i class="fa fa-users fa-5x"></i> </div>
                                    <div class="col-xs-9">
                                        <div class="text-right huge">11</div>
                                        <div class="text-right">Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="user.php">
                                <div class="panel-footer"> <span class="pull-left"><i class="fa fa-arrow-circle-right"></i> View All Users</span> <span class="pull-right"></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                </div>
                <hr>
                <h3>New Users</h3>
            
               
               
               
                        <table class="table table-hower table-border table-stripped">
                        <thead>
                            <tr>
                               <th><input type="checkbox"></th>
                                <th>Sr #</th>
                               
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Image</th>
            
                            </tr>
                        </thead>
                        <tbody>
                     <?php
                $query="SELECT * FROM users ORDER BY id DESC";
                $run =mysqli_query($con,$query);
                if(mysqli_num_rows($run)>0)
                {
                    
                ?>
                      
                            
                 <?php
                    while($row = mysqli_fetch_array($run))
                    {
                        $id=$row['id'];
                        $first_name=$row['first_name'];
                        $last_name=$row['last_name'];
                        $email=$row['email'];
                        $username=$row['username'];
                        $role=$row['role'];
                        $image=$row['image'];
                      
                
    
                    ?>
                           
                           
                            <tr>
                               <th><input type="checkbox"></th>
                                <td><?php echo $id; ?></td>
                                
                                <td><?php echo "$first_name $last_name"; ?></td>
                                <td><?php echo $username; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><img src="images/<?php echo $image; ?>" alt="image" width="30px;"></td>
                              
                            </tr>
                      <?php 
                    }
                            ?>
                        </tbody>
                        
                    </table>
                     <?php
                }
                else
                    echo "<h2><center> NO data Available</center></h2>"
                ?>
                    
                
                
                
                
                
                <a href="user.php" class="btn btn-primary ">View All Users</a>
                <h3>New Post</h3>
              
               
                
                  
                
                
                
                   <table class="table table-hower table-border table-stripped">
                        <thead>
                            <tr>
                               <th><input type="checkbox"></th>
                                <th>Sr #</th>
                                <th>Title</th>
                                <th>Author</th>
                             
                                <th>status</th>
                                <th>Author Image</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                     <?php
                $query="SELECT * FROM posts ORDER BY id DESC";
                $run =mysqli_query($con,$query);
                if(mysqli_num_rows($run)>0)
                {
                    
                ?>
                      
                            
                 <?php
                    while($row = mysqli_fetch_array($run))
                    {
                        $id=$row['id'];
                        $title=$row['title'];
                        $author=$row['author'];
                        $author_image=$row['author_image'];
                        $status=$row['status'];
                                
    
                    ?>
                           
                           
                            <tr>
                               <th><input type="checkbox"></th>
                                <td><?php echo $id; ?></td>
                                <td><?php echo "$title";?></td>
                                <td><?php echo "$author"; ?></td>
                                <td><?php echo "$status"; ?></td>
                               
                                <td><img src="images/<?php echo $author_image; ?>" alt="image" width="30px;"></td>
                               
                            </tr>
                      <?php 
                    }
                            ?>
                        </tbody>
                        
                    </table>
                    
                    
                    <?php
                }
                else
                    echo "<h2><center> NO data Available</center></h2>"
                ?>
                
                
                
                
                
                
                <a href="postdata.php" class="btn btn-primary">View All Posts </a> </div>
        </div>
    </div>
    
    <footer class="text-center" >
   
            Copyright &copy; By Container
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>