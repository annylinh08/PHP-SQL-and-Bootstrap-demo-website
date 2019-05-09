<!--Linh Duong -200393657-->
<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Saving Registration</title>
</head>

<body>
<?php
//store inputs in variables
$employeeName = $_POST['employeeName'];
$employeeId = $_POST['employeeId'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$ok = true;

//validate
if (empty($employeeName)) {
    echo 'Employee name is required<br />';
    $ok = false;}

if (empty($employeeId)) {
	echo 'Employee email is required<br />';
	$ok = false;
}

if (empty($password)) {
	echo 'Password is required<br />';
	$ok = false;
}

if ($password != $confirm) {
	echo 'Passwords must match<br />';
	$ok = false;
}

//validate recaptcha
session_start ();
include_once  'securimage/securimage.php';
$securimage = new Securimage();
if ($securimage -> check ($_POST['captcha_code'])==false) {



    echo "The security code entered was incorrect.<br /><br />";
    echo "Please go <a href ='javascript: history.go (-1) '>back</a> and try again.";
    exit;
}


if ($ok == true) {
	//connect
	require_once('db.php');
		
	//hash the password
	$password = hash('sha512', $password);
	
	//run the sql insert
    $sql = "INSERT INTO employees (employeeName, employeeId, password) VALUES ('$employeeName', '$employeeId', '$password')";
    mysqli_query($conn, $sql);
	//disconnect
	$conn = null;
	
	//show a message
	echo 'User saved.  Click <a href="login.php">here</a> to login.';
}
?>
</body>

</html>
