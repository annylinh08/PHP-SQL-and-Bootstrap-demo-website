<!--Create Database and connect to database-->
<!--Linh Duong - 200393657-->
<?php
//$servername = "localhost";
//$dbusername = "root";
//$dbpassword = "mysql";
//$dbname = "comp1006-2019";
//
//// Create connection
//$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//    echo 'fail';
//}
//
//?>
<?php
$servername = "aws.computerstudi.es/~gcc200393657/";
$dbusername = "gcc200393657";
$dbpassword = "q8LYAQj9z_";
$dbname = "gcc200393657";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo 'fail';
}

?>
