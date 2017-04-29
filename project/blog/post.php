

<?php

$con = mysqli_connect("localhost", "root", "", "cms");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gp's Blog</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/g.png">
    <link rel="stylesheet" href="css/font-awesome.css">
   
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
                <h1>Custom<span> Post </span></h1>
                <p>Here you can view your own custom post</p>
            </div>
        </div> <img src="images/top1.jpg" alt="Top img"> </div>
    <section>
           
           <div class="container">
               
               <h1><a href="../admin/posts.php">Click Here TO Create Your Own Post </a></h1>
               
           </div>
           
           
            <?php
        $query= "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC";
        $run= mysqli_query($con, $query);
    if(mysqli_num_rows($run)>0)
    {
        while($row=mysqli_fetch_array($run)){
            $id=$row['id'];
              $date=getdate($row['date']);
            $day= $date['mday'];
            $month= $date['month'];
            $year= $date['year'];
              $title=$row['title'];
              $author=$row['author'];
              $author_image=$row['author_image'];
              $categories=$row['categories'];
              $tags=$row['tags'];
              $post_data=$row['post_data'];
              $views=$row['views'];
              $status=$row['status'];
              $image=$row['image'];
            
        ?>
                              
                   <div class="post">
                       <div class="row col-md-2 post-date">
                           <div class="day"><?php echo $day;    ?></div>
                           <div class="month"><?php echo $month;    ?></div>
                           <div class="year"><?php echo $year;    ?></div>
         
                       </div>
                       <div class="row col-md-8 post-title">
                           <h2>
                              <a href="post.php?post_id=<?php echo $id;?>"> <?php echo ucfirst($title);    ?></a>
                           </h2>
                           <p>Written By: <span><?php echo ucfirst($author);    ?></span></p>
                       </div>
                       <div class="row col-md-2 profile-picture">
                           <img src="images/<?php echo $author_image;    ?>" alt="profile pic" class="img-circle">
                       </div>
                                      <a href="post.php?post_id=<?php echo $id;?>"> <img src="images/<?php echo $image;?>" alt=" slider 1" width="300px" ></a>
                                      <p class="desc">
                                          <?php echo ucfirst($post_data);  "....."  ?>
                                      </p>
                                     
                                      <div class="bottom">
                                          <span><i class="fa fa-folder"></i><a href="index.php?cat=<?php echo $id;?>"> <?php echo ucfirst($categories);?>    </a>     </span>   |
                                          
                                          <span><i class="fa fa-comment"></i><a href="#"> Comment</a></span>
                                      </div>
                    </div>
<?php
        }
    }
                     else
        {
            echo "<center><h2>No post available</h2></center>";
        }
                    ?>


 <nav id="pagination">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
            
                      
                    </div>
                    
                    
                     
                    </div>
                
                
            </div>
        </div>
    </section>
    <footer>
        <div class="container"> &copy; Copyrights By GP's Container All Rights Reserved </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html