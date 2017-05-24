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
        header('location:adminpanel.php');
    }
}
else
    echo 'Network error.Try again';


