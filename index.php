<?php


require("includes/common.php");

if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!DOCTYPE html>

<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>ISMS</title>
       
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        
        <script src="js/jquery.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
       
        <?php
        include 'includes/header.php';
        ?>


        <div id="content">
            
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>Stationery Aids </h1>
                            <p>Flat 5% off on several orders</p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">proceed to shop</a>
                        </div>
                    </center>
                </div>
            </div>
           
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>One Sided Pages</h3>
                                    <p>one sided pages</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Project File</h3>
                                    <p>project file</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Index Page</h3>
                                    <p>index page</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            
        </div>
   
   
    </body> 
</html>