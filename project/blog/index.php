<!DOCTYPE html>
<html lang="en">

<?php
    require_once("inc/top.php")
    ?>
<?php
    require_once("inc/head.php")
    ?>
<body>
    
    <div class="jumbotron">
        <div class="container">
            <div id="detail" class="animated fadeInLeft">
                <h1>GP's Container <span> Blog </span></h1>
                <p>Here you can Post or Read the Blog Content</p>
            </div>
        </div> <img src="images/top1.jpg" alt="Top img"> </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                
                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/top.jpg" alt="slider">
      <div class="carousel-caption">
        This is heading for Slider 1
      </div>
    </div>
    <div class="item">
      <img src="images/slier.jpg" alt="slider1">
      <div class="carousel-caption">
        This is heading for slider 2
      </div>
    </div>
    
      <div class="item">
      <img src="images/top1.jpg" alt="slider1">
      <div class="carousel-caption">
        This is heading for slider 3
      </div>
    </div>
      
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
                                      <a href="post.php?post_id=<?php echo $id;?>"> <img src="images/<?php echo $image;?>" alt=" slider 1" width="500px" ></a>
                                      <p class="desc">
                                          <?php echo substr($post_data,0,400);  "....."  ?>
                                      </p>
                                      <a href="post.php?post_id=<?php echo $id;?>" class=" btn btn-primary">Read More...</a>
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
                
                <div class="col-md-4">
                    <div class="widgets">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for..."> <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span> </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /widgets close-->
                    <div class="widgets">
                        <div class="popular">
                            <h4>Popular Post</h4>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/top.jpg" alt="image"></a>
                                </div>
                                <div class="col-xs-8 details">
                                    <a href="#">
                                        <h4>This is Heading for post</h4></a>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 5th jan 2016</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/top.jpg" alt="image"></a>
                                </div>
                                <div class="col-xs-8 details">
                                    <a href="#">
                                        <h4>This is Heading for post</h4></a>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 5th jan 2016</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/top.jpg" alt="image"></a>
                                </div>
                                <div class="col-xs-8 details">
                                    <a href="#">
                                        <h4>This is Heading for post</h4></a>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 5th jan 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--close-->
                    <div class="widgets">
                        <div class="popular">
                            <h4>Recent Post</h4>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/top.jpg" alt="image"></a>
                                </div>
                                <div class="col-xs-8 details">
                                    <a href="#">
                                        <h4>This is Heading for post</h4></a>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 5th jan 2016</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/top.jpg" alt="image"></a>
                                </div>
                                <div class="col-xs-8 details">
                                    <a href="#">
                                        <h4>This is Heading for post</h4></a>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 5th jan 2016</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/top.jpg" alt="image"></a>
                                </div>
                                <div class="col-xs-8 details">
                                    <a href="#">
                                        <h4>This is Heading for post</h4></a>
                                    <p><i class="fa fa-clock-o" aria-hidden="true"></i> 5th jan 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--close-->
                    <div class="widgets">
                        <div class="popular">
                            <h4>Categories</h4>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul>
                                        <li><a href="">category</a></li>
                                        <li><a href="">category</a></li>
                                        <li><a href="">category</a></li>
                                        <li><a href="">category</a></li>
                                        <li><a href="">category</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul>
                                        <li><a href="">category</a></li>
                                        <li><a href="">category</a></li>
                                        <li><a href="">category</a></li>
                                        <li><a href="">category</a></li>
                                        <li><a href="">category</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--close-->
                    <div class="widgets">
                        <div class="popular">
                            <h4>Social Icons</h4>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/facebook.png" alt="Fb image"></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/tw1.png" alt="twitter image"></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/google.png" alt="google image"></a>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/insta.png" alt="insta image"></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/skype.png" alt="skype image"></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="#"><img src="images/link.png" alt="linkdin image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--close-->
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