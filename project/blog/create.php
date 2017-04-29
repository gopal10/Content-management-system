

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gp's Blog</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/g.png">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animated.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.html">
                    <div-col-xs-3><img src="images/g.png" alt="logo" width="35px"></div-col-xs-3>
                    <div-col-xs-9>GP's Container</div-col-xs-9>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true">Home</i>
</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text" aria-hidden="true"></i>
  Pages<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-alt" aria-hidden="true"></i> Categories<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 2</a></li>
                        </ul>
                    </li>
                    <li><a href="../admin/index.php"><i class="fa fa-lock" aria-hidden="true"></i>
 Admin-Panel</a></li>
                    
                    <li><a href="contact.php"><i class="fa fa-comments" aria-hidden="true"></i>
 Contact Us</a></li>
               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="jumbotron">
        <div class="container">
            <div id="detail" class="animated fadeInLeft">
                <h1>Create<span> Post </span></h1>
                <p>Here you can create your own custom post</p>
            </div>
        </div> <img src="images/top1.jpg" alt="Top img"> </div>
    
<div class="container">
<div class="col-md-7">
<form action="postcon.php" method="POST" >
<div class="form-group">
    <label for="name">Name </label>
<input type="text" id="author" name="author" placeholder="Name" class="form-control" >  
   <label for="name">Date </label>
<input type="text" id="date" name="date" placeholder="Date" class="form-control" >    
      <label for="name">Title </label>
<input type="text" name="title" id="title" placeholder="Title" class="form-control" >    
     
     <label for="name">Author-Image </label>
<input type="text" name="author_image" id="author_image" placeholder="Author-image" class="form-control" >    
     
     <label for="name">Image </label>
<input type="text" id="image" name="image" placeholder="Image" class="form-control" >    
      
      <label for="name">Categories </label>
<input type="text" name="categories" id="categories" placeholder="Categories" class="form-control" >    
      
      <label for="name">Post Information </label>
<textarea type="text" id="post_data" name="post_data" placeholder="Information" cols="40" rows="10" class="form-control" >    
    </textarea>
      <label for="name">Status </label>
<input type="text" id="status" name="status" placeholder="publish" class="form-control" >    


        <input type="submit" value="Post"  class="btn btn-success">
   </div> 
    </form>
    </div>
       
</div>    
        </body>
  <footer>
      &copy; 
      
      
  </footer>
 
