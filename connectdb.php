<?php


$host="localhost";
$user="root";
$pass="";
$dbname="ecpcs";
$conn = new mysqli($host, $user, $pass,$dbname);
if(empty($conn)){
    echo 'connection failed';
}

?>


