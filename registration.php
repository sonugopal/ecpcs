<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
        <title>ECPCS</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css" type="text/css">
        <link rel="stylesheet" href="registration.css" type="text/css">

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
                </div>
                <div class="hidden-sm hidden-xs col-md-6 col-lg-6">
                    <div class="row">
                        
                        <a href="login.php" id="admin"><h4>Admin</h4></a>
                    </div>
                    
                    
                </div>

            </div>
    <div class="row container form-group" id="form2">
        <form method="post" action="register.php">
                                    <h1>Register Your Complaint</h1>
                                    <br>Name<br>
                                    <input type="text" name="name" class="form-control as" placeholder="Custumer Name" required>
                                   <br> Mobile<br><input type="number" name="mob" class="form-control as" placeholder="Mobile no" required>
                                    <br>Address<br><input type="text" name="address" class="form-control as" placeholder="Address" required>
                                    <br>Product Name<br><input type="text" name="product" class="form-control as" placeholder="Product name with serial no." required>
                                    <br>Complaint<br><input type="text" name="complaint" class="form-control as" placeholder="complaint" required>
                                    <br><button type="submit" name="submit" class="btn btn-success ab">Submit</button>
                                </form>
    </div>
</body>
</html>
    
