<!--Linh Duong -200393657-->
<?php ob_start(); ?>
    <html>

    <body>

    <?php
    $employeeName =$_POST['employeeName'];
    $employeeId =$_POST['employeeId'];
    $password = hash('sha512', $_POST['password']);
    $sql = "SELECT * FROM employees where  employeeId= '$employeeId' and password = '$password'";
    require_once ('db.php');
    $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    echo 'Logged in Successfully.';
    foreach ($result as $row) {
        //access the existing session created automatically by the server
        session_start();
        //take the user's information from the database and store it in a session variable
        $_SESSION['id'] = $row['id'];
        $_SESSION['employeeName'] = $row['employeeName'];
        $_SESSION['employeeId'] = $row['employeeId'];
        $_SESSION['password'] = $row['password'];
        //redirect the user
        Header('Location: display_customers.php');
    }
} else {
    echo 'Invalid Login';
}
$conn = null;
?>
<?php ob_flush(); ?>