<html>

<head>
    <title>Welcome to Container</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/g.png">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/animated.css"> </head>

<body>
   <?php
    $base= "C:\xampp\htdocs\project\core";
    if(isset($_POST['name']))
    {
    mkdir($base.$_POST['name'],0777,true);
    }
    ?>
   
   
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.php">
                    <div-col-xs-3><img src="images/g.png" alt="logo" width="35px"></div-col-xs-3>
                    <div-col-xs-9>Container</div-col-xs-9>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true">Home</i>
</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>

 Login</a></li>
                    <li><a href="register.php"><i class="fa fa-sign-in" aria-hidden="true"></i>

 Register</a></li>
                    <li><a href="register/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>


 LOG OUT</a></li>
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
                <h1>Container</h1>
                <p> Welcome To the Container .</p>
            </div>
        </div> <img src="images/top1.jpg" alt="Top img" width="100%"> </div>
       <div class="container">
     <h1>Here You can Create Your Custom Web-Pages</h1>
        </div>
       <div class="container">
        
     <form action="website.php" method="post">
         <div class="form-group">
             <input type="text" name="name" id="name" placeholder="Name">
         </div>
         

         <input type="submit" value="Confirm" class="btn btn-info">
         
         
     </form>
        

        </div>
        
    </body>
</html>