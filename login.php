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
            </div>
            <div class="hidden-sm hidden-xs col-md-6 col-lg-6">
                <div class="row">
                    


                    <nav id="navig">
                        <ul id="navig">
                            <li><a href="index.php">Home</a></li>

                        </ul>
                    </nav>
                </div>


            </div>

        </div>
        <div class="row container">
            <div class="col-xs-12 col-md-5">
                <form class="form-group" method="post" action="login.php">
                    Username<br>
                    <input type="text" class="form-control" name="user">
                    Password<br>
                    <input type="password" class="form-control" name="pass">
                    <button type="submit" name="login" class="btn btn-success">Login</button>
                </form>
                <br>

            </div>
            <?php
            include 'connectdb.php';
            if (isset($_POST['login'])) {
                $pass = $_POST['pass'];
                $user = $_POST['user'];
                $query = "select * from admin where username='$user' && password='$pass'";
                $result = mysqli_query($conn,$query);
                if (mysqli_num_rows($result) < 1) {
                    echo 'Username or password entered incorrect!';
                } else {
                    session_start();
                    $_SESSION['user']=$user;
                    $_SESSION['pass']=$pass;
                    header('location:admin.php');
                }
            }
            ?>
        </div>
    </body>
</html>

