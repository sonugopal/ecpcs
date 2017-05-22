<?php
include 'connectdb.php';
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
        <script src="js/status.js"></script>
        


        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row head border">
            <div class="col-xs-2 col-md-1 col-lg-1 col-sm-2">

                <img src="img/logo.png" id="logo"> 
            </div>
            <div class="col-xs-10 col-md-5 col-lg-5 col-sm-10">
                <h1 id="heading">easy care pc services</h1>
            </div>
            <div class="hidden-sm hidden-xs col-md-6 col-lg-6">
                <div class="row">

                    <!--                        <a href="login.php" id="admin"><h4>Admin</h4></a>-->
                </div>
                <div class="row">
                    <nav id="navig">
                        <ul id="navig">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="login.php">Admin</a></li>
                        </ul>
                    </nav>
                </div>

            </div>

        </div>
        <div class="row container">
            <div class="col-xs-12 col-md-4">
                <br>
                <h3>Enter Complaint ID</h3>
                <input type="number" class="form-control field" id="comp_id" required>
                <button class="btn btn-success" id="check">Check</button>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-md-6 col-lg-6" id="details">
                    <br>


                    <div id="tab">
                        <p class="red" id="err"></p>
                        <table class="table white" id="tabl">

                        </table>
                    </div>


                </div>
            </div>
        </div>

    </body>
</html>
