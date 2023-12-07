<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Life Style Store</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'includes/header.php';
?>
<div class="container" id="content">
    <div class="row">
    <div class="col-lg">
        <img src="img/contact.png" style="float: right;">
        <h1>Get in Touch</h1>
        <p id="p1">Hi there, we are here to help you.<br> Please feel free to contact us in case you have any queries regarding the products, payment or order delivery.<br </p>
    </div><br><br>
    <div class="col-lg">
        <div style="float: right;">
            <h1>INFO</h1><br>
            <p id="p1">Aurangabad, India - 431001</p><br>
            <p id="p1">Phone : 9049401133</p><br>
            <p id="p1">Email : ISMS@gmail.com</p>
        </div>
        <h1>CONTACT US</h1>
        <div style="float: left;">
        <form>
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
            </div>
            <div class="form-group">
                <textarea rows="5" cols="60" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>