<!--Linh Duong - 200393657-->

<html>
<body>
<?php
    //connect to database
    require 'db.php';
    //check the authentication
    require_once('auth.php');
    //$photo = $_FILES['photo'];
    //$photo = mysqli_real_escape_string($conn,$_POST['photo']);

    //primary key make sure the data is updated in actual id
    $id = $_POST['id'];

    //Call the varibles name
    $givenname = mysqli_real_escape_string($conn,$_POST['givenname']);
    $surname = mysqli_real_escape_string($conn,$_POST['surname']);
    $streetaddress = mysqli_real_escape_string($conn,$_POST['streetaddress']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $province = mysqli_real_escape_string($conn,$_POST['province']);
    $postalcode = mysqli_real_escape_string($conn,$_POST['postal_code']);
    $emailaddress = mysqli_real_escape_string($conn,$_POST['emailaddress']);
    $telephonenumber = mysqli_real_escape_string($conn,$_POST['telephonenumber']);

//    Update querry
    $sql = " UPDATE customers SET givenname ='$givenname', surname ='$surname', streetaddress = '$streetaddress', city = '$city', province = '$province', postal_code = '$postalcode', emailaddress = '$emailaddress', telephonenumber = '$telephonenumber' where id = '$id'";
//    Process the request if update does not succeed error page pop up
    mysqli_query($conn, $sql) or die (header('Location: error.php'));
    //disconnect
    mysqli_close($conn);
//    Relocate back to the table when update successful
    header('Location: display_customers.php');

?>
</body>
</html>