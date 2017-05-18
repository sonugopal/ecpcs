<?php
session_start();
if(!isset($_SESSION['pass'])){
    header('location:login.php');
}


?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
        <title>ECPCS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css" type="text/css">
        <link rel="stylesheet" href="registration.css" type="text/css">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row head">
                <div class="col-xs-2 col-md-1 col-lg-1 col-sm-2">

                    <img src="img/logo.png" id="logo"> 
                </div>
                <div class="col-xs-10 col-md-5 col-lg-5 col-sm-10">
                    <h1 id="heading">easy care pc services</h1>
                    <a href="Logout.php" id="admin"><h4>logout</h4></a>
                    <a href="admin.php" id="admin"><h4>Refresh</h4></a>
                </div>
                
            </div>
    <div class="row container">
        
    </div>
    
</body>
</html>
    
