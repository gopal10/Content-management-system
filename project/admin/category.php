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
                    <li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Post</a></li>
                    <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Add User</a></li>
                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item active"> <i class="fa fa-tachometer"></i> Dashboard </a>
                    <a href="#" class="list-group-item"> <i class="fa fa-file-text-o"></i> All post <span class="badge">14</span> </a> <a href="#" class="list-group-item"><i class="fa fa-comment"></i>  Comments
  <span class="badge">14</span>
  </a>
                    <a href="#" class="list-group-item"> <i class="fa fa-folder-open"></i> Categories <span class="badge">14</span> </a> <a href="#" class="list-group-item"><i class="fa fa-user"></i>  Users
  <span class="badge">14</span>
  </a> </div>
            </div>
            <div class="col-md-9">
                <h1>
          
  <i class="fa fa-folder-open"></i>  Categories <small>Different Categories</small><hr>
 
                </h1>
                <ol class="breadcrumb">
                    <li> <a href="index.php" class="active"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
                    <li class="active"> <i class="fa fa-folder-open"></i> Categories</li>
                </ol>
                
                <div class="row">
                    <div class="col-md-6">
                        <form action="">
                            <div class="form-group">
                                <label for="category">Category Name:</label>
                                <input type="text" placeholder="Category name" class="form-control">
                          
                             </div>
                        
                         <input type="submit" value="Add Category" name="submit" class="btn btn-info">
                        </form>
                        
                    </div>
                    <div class="col-md-6">
                        <table class="table table-hover table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Category Name</th>
                                    <th>Posts</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cyber Security</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cyber Security</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cyber Security</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cyber Security</td>
                                    <td>12</td>
                                    <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                    <td><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
        
                  </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>