<?php
include 'connectdb.php';
?>
<?php
if(isset($_POST['comp_id'])){
    
    $id=$_POST['comp_id'];
$query = "select * from details where cust_id='$id'";
$result = mysqli_query($conn, $query);
if($row = mysqli_fetch_assoc($result)){

echo '
<thead>

</thead>
<tbody>
    <tr><td>Customer ID</td><td>'.$row['cust_id'].'</td></tr>
    <tr><td>Name</td><td>'.$row['name'].'</td></tr>
    <tr><td>Mobile</td><td>'.$row['mobile'].'</td></tr>
    <tr><td>Address</td><td>'.$row['address'].'</td></tr>
    <tr><td>Product</td><td>'.$row['product'].'</td></tr>
    <tr><td>Complaint</td><td>'.$row['complaint'].'</td></tr>
    <tr><td>Date</td><td>'.$row['date'].'</td></tr>
    <tr><td>Status</td><td>'.$row['status'].'</td></tr>
</tbody>
';
 }
 else     echo 'Enter Valid Complaint ID';
}

?>