<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ECPCS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css" type="text/css">
         <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row head">
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
            <div class="row hidden-lg hidden-md">
                <div class="row container services">
                    
                <div class="col-xs-12">
                    <ul class="items">
                        <li>Residential & Commercial computer sales</li>
                        <li>Services</li>
                        <li>CCTV survilliance services</li>
                        <li>Network Management services</li>
                        
                    </ul>
                </div>
                </div>
                <br>
                
                <div class="row bord">
                    <a href="registration.php"><button class="btn reg">Register Complaint</button></a>
                </div>
                <div class="row container stat">
                    <br>
                    <p>Click below button to know status of your registered complaint</p>
                    <a href="status.php"><button class="btn status">Status of Complaint</button></a>
                </div>
                <br>
                <br>
                <div class="row bor text-center">
                    <a href="https://www.facebook.com/groups/EasyCarePCServices/"<p>easycarepcservices@facebook.com</p></a>
                    <p>easycarepcservices@gmail.com</p>
                    <p>Vengara,Mini bazar 676519</p>
                    <p>Ph:7561003300</p>
                   
                   
                </div>
            </div>
            <div class="row hidden-xs hidden-sm">
                <div class="row bground">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <ul class="items" id="serv">
                        <li>Residential & Commercial computer sales</li>
                        <li>Services</li>
                        <li>CCTV survilliance services</li>
                        <li>Network Management services</li>
                        
                    </ul>
                            
                        </div>
                        <div class="col-lg-4 col-md-4">
                                
                            
                            
                            
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="form-group" id="form">
                                <form class="form-group" method="post" action="register.php">
                                    <h3>Register Your Complaint</h3>
                                    Name<br>
                                    <input type="text" name="name" class="form-control" placeholder="Custumer Name" required>
                                    Mobile<br><input type="number" name="mob" class="form-control" placeholder="Mobile no" required>
                                    Address<br><input type="text" name="address" class="form-control" placeholder="Address" required>
                                    Product Name<br><input type="text" name="product" class="form-control" placeholder="Product name with serial no." required>
                                    Complaint<br><input type="text" name="complaint" class="form-control" placeholder="complaint" required>
                                    <br><button type="submit" name="submit" class="btn btn-success bttn">Submit</button>
                                    <a href="status.php"><img src="img/status.png" id="status"></a>
                                </form>
                            </div> 
                        </div>
                    </div> 
                    <div class="row" id="for">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-3 col-md-3">
                            <a href="https://www.facebook.com/easycarepcservices" id="fb"><p>easycarepcservices@fb.com</p></a> 
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p>easycarepcservices@gmail.com</p> 
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <p>Mob:9947959360</p>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <p>Vengara, Mini bazar 676519</p>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
                 
        </div>
    </body>
</html>
