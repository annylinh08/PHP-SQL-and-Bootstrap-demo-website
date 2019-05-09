<!--Linh Duong - 200393657-->
<!DOCTYPE html>
<html>

<body>

<?php
require 'db.php';
//get the unique id
$id = $_GET['id'];

//Construct the delete sql
$sql = "DELETE FROM customers WHERE (id='$id')";
$retval = mysqli_query($conn, $sql);
if ($retval == true){
    // die('could not delete data: '. mysqli_error($conn));
    echo "Deleted data successfully\n";
}
else {
    die('could not delete data: '. mysqli_error($conn));
}
//if delete successfully relocate back to the tables
header('location: display_customers.php');
?>


</body>

</html>
