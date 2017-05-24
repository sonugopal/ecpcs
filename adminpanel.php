<?php
include 'connectdb.php';
session_start();
if (empty($_SESSION['pass'])) {
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
        <link rel="stylesheet" href="admin.css" type="text/css">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="js/admin.js" type="text/javascript"></script>


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
                <a href="adminpanel.php" id="admin"><h4>Refresh</h4></a>
            </div>

        </div>
        <div class="row container">
            <div class="col-xs-12 col-md-4">
<!--                <button class="btn btn-success" id="reg">Registration</button>
                <button class="btn btn-danger" id="pending">Pending Complaints</button>-->
            </div>
        </div>
        <?php
        ?>

        <div class="row container">
            <div class="col-xs-12 col-md-6">
                <!--                <div id="registration" class="white">
                                    <h3>Registration</h3>
                                    <form class="form-group" method="post" action="reg.php">
                                                    
                                                    Name<br>
                                                    <input type="text" name="name" class="form-control" placeholder="Custumer Name" required>
                                                    Mobile<br><input type="number" name="mob" class="form-control" placeholder="Mobile no" required>
                                                    Address<br><input type="text" name="address" class="form-control" placeholder="Address" required>
                                                    Product Name<br><input type="text" name="product" class="form-control" placeholder="Product name with serial no." required>
                                                    Complaint<br><input type="text" name="complaint" class="form-control" placeholder="complaint" required>
                                                    <br><button type="submit" name="submit" class="btn btn-success bttn">Submit</button>
                                                    
                                                </form>
                                </div>-->
<!--                <div id="complaint">
                    dsadasd
                </div>-->
            </div>
        </div>
        <div class="row container">
            <div class="col-xs-12 col-md-12">
                <?php
                $query="select * from details where status='Pending'";
                $result= mysqli_query($conn,$query);
                
                ?>
                <form action="updation.php" method="post">
                <table class="table white" id="align">
                    <thead>
                        
                    </thead>
                    <tbody>
                        
                        <?php
                                        while ($row= mysqli_fetch_assoc($result)){
                                            echo '<tr><td>'.$row['cust_id'].'<td><td>'.$row['name'].'<td><td>'.$row['product'].'<td><td><select name="'.$row['cust_id'].'"class="form-control">'
                                                    . '<option value="pending">Pending</option>'
                                                    . '<option value="Completed">Completed</option>'
                                                    . '<option value="Return">Return</option><select><td><tr>';
                                        }
                        ?>
                    </tbody>
                </table>
                    <button type="submit" class="btn btn-success" name="update">Update</button>
                        
                </form>
                
            </div>
        </div>


    </body>
</html>
