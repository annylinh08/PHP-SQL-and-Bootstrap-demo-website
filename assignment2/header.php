<!--Linh Duong -200393657-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VR Security Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    Reference the bootstrap link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--    Style for the customer table-->
    <style>
        table{
                grid-column-gap: 30px;
                border="0";
                align="center";
                position: relative;
                overflow-wrap: inherit;
        }
    </style>
</head>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.html">VR Security</a>
        </div>
<!--       Using if condition to check if user log in, show the link to table of customers, name of user and log out,
            else only register and log in-->
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <?php
                //access the current session
                session_start();
                if (!empty($_SESSION['id'])) {
                    echo '<li class="active" style=""><a href="display_customers.php">List of house</a></li>';
                echo '<li class="col-sm-8" style="color: white;top:15px;align: right; ">'.$_SESSION['employeeName'] .'</li>';
                echo'<li><a href="logout.php">Log Out</a></li>';}

                    else {
            echo '<li><a href="register.php">Register</a></li>;
				<li><a href="login.php">Login</a></li>';
        }
        ?>
                <?php require 'db.php'; ?>
            </ul>
        </div>
    </div>
</nav>


