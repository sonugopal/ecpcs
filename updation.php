<?php

include 'connectdb.php';

if (isset($_POST['update'])) {
    $query = "select * from details where status='Pending'";
    $result = mysqli_query($conn, $query);
    while ($row= mysqli_fetch_assoc($result)){
        $id=$row['cust_id'];
        $status=$_POST[$id];
        $que="update details set status='$status' where details.cust_id=$id";
        $res=mysqli_query($conn,$que);
        if($status=='Completed'){
            $authKey = "153993AXLNGnWPh59294af8";
        

//Multiple mobiles numbers separated by comma
        $mobileNumber = $row['mobile'];

//Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "ECPCSD";
//verify otp
        
        
        
//verify route

        $route = 4;

//Your message to send, Add URL encoding here.
        $message = urlencode("EASY CARE PC SERVICES\nYour registered complaint has solved. You can contact us for any computer needs\n"
                . "\necpcs.in\nPh:7561003300");

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
        }
        header('location:adminpanel.php');
    }
}
else
    echo 'Network error.Try again';


