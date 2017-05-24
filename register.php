<?php
include 'connectdb.php';

?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mob=$_POST['mob'];
    $add=$_POST['address'];
    $pro=$_POST['product'];
    $comp=$_POST['complaint'];
    $status='Pending';
    $date = date('Y-m-d H:i:s');
    
    session_start();
    $_SESSION['date']=$date;
    
    $query="insert into details values(NULL,'$name',$mob,'$add','$pro','$comp','$date','$status')";
    $result=mysqli_query($conn,$query);
    
    
// the message


    
    if(!empty($result)){
        header('location:display.php');
    }
    else{
        echo 'Network connection failed';
    }
}


?>

