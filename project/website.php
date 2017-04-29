 <?php
error_reporting(1);
    $base= 'C:\xampp\htdocs\project\core\pro';
    
    if(isset($_POST['name']))
    {
    mkdir($base.$_POST['name'],0777,true);
    }
    ?>           
          
               

           <html>
        <head>
           <title>Welcome to Container</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/g.png">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/animated.css">
          
           <title>
        </title>
           
        </head>
        
               <div class="jumbotron">
       
        <div class="container">
            <div id="detail" class="animated fadeInLeft">
                <h1>Container</h1>
                  </div>
        </div>  </div>
                
        <div class="container"> <h1>Click on confirm To Go Ahead</h1>
               </div>
                <div class="container">
                <form action="folder.php" method="post">
                    <textarea name="data" id="data" cols="30" rows="10"></textarea>
                    <input type="submit" value="Save">
                    
                </form>
               
          </div>
         <body>
                
            </body>
    </html>
    
