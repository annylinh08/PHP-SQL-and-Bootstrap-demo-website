<!--Linh Duong -200393657-->

<!--Disconnect the database and relocate back to home page-->
<?php ob_start();

//access the existing session
session_start();

//remove any session variables
session_unset();

//remove the user's session
session_destroy();

//redirect to the login page
header('location:home.html');
exit();

ob_flush();
?>