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
        <div class="row head border">
            <div class="col-xs-2 col-md-1 col-lg-1 col-sm-2">

                <img src="img/logo.png" id="logo"> 
            </div>
            <div class="col-xs-10 col-md-5 col-lg-5 col-sm-10">
                <a href="index.php" class="white"><h1 id="heading">easy care pc services</h1></a>
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
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <br>
                    <h2>Registration Successfull</h2>
                    <p class="white">Please keep your complaint ID to check complaint status</p>
                    <?php
                    include 'connectdb.php';
                    session_start();
                    $date = $_SESSION['date'];
                    $query = "select * from details where date='$date'";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);
                    $msg = "Complaint ID: ".$row['cust_id']."\nName: " . $row['name'] . "\nMobile: " . $row['mobile'] . "\nAddress: " . $row['address'] . "\nProduct: " . $row['product'] . "\nComplaint: " . $row['complaint'] . "\nDate: " . $row['date'];


                    $subject = $row['name'] . ' ' . $row['product'];

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);
// send email
                    mail("sonugopal41@gmail.com",$subject, $msg,"ecpcs");
                    ?>
                    <table class="table" id="white">
                        <thead>

                        </thead>
                        <tbody>
                            <tr><td>Customer ID</td><td><?php echo $row['cust_id']; ?></td></tr>
                            <tr><td>Name</td><td><?php echo $row['name']; ?></td></tr>
                            <tr><td>Mobile</td><td><?php echo $row['mobile']; ?></td></tr>
                            <tr><td>Address</td><td><?php echo $row['address']; ?></td></tr>
                            <tr><td>Product</td><td><?php echo $row['product']; ?></td></tr>
                            <tr><td>Complaint</td><td><?php echo $row['complaint']; ?></td></tr>
                            <tr><td>Date</td><td><?php echo $row['date']; ?></td></tr>
                            <tr><td>Status</td><td><?php echo $row['status']; ?></td></tr>
                        </tbody>
                    </table>
                    <?php
                    session_destroy();
                    ?>
                    <?php
                     $authKey = "153993AXLNGnWPh59294af8";
        

//Multiple mobiles numbers separated by comma
        $mobileNumber = $row['mobile'];

//Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "ECPCSD";
//verify otp
        
        
        
//verify route

        $route = 4;

//Your message to send, Add URL encoding here.
        $message = urlencode("Your complaint has registered\n\nComplaint ID: ".$row['cust_id']."\nName: " . $row['name'] . "\nMobile: " . $row['mobile'] . "\nAddress: " . $row['address'] . "\nProduct: " . $row['product'] . "\nComplaint: " . $row['complaint'] . "\nDate: " . $row['date'].'\n\nVisit ecpcs.in');

//Define route 
//Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );

//API URL
        $url = "https://control.msg91.com/api/sendhttp.php";

// init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
                //,CURLOPT_FOLLOWLOCATION => true
        ));


//Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
        $output = curl_exec($ch);

//Print error if any
        if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }

        curl_close($ch);
    

if($output==0){
    echo 'Something went wrong..'
    . 'Try again';
}
   
                    ?>


                </div>
            </div>
        </div>

    </body>
</html>
