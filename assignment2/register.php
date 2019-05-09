<?php ob_start();

$title = 'Register';
require_once('header.php');
?>

<div class="container">
    <h1>User Registration</h1>
<!--    Create the register form-->
    <form method="post" action="save-register.php" class="form-horizontal">
        <div class="form-group">
            <label for="employeeName" class="col-sm-2">Employee Name:</label>
            <input name="employeeName" type="text"/>
        </div>
        <div class="form-group">
            <label for="employeeId" class="col-sm-2">Employee email:</label>
            <input name="employeeId" type="email"/>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2">Password:</label>
            <input type="password" name="password"/>
        </div>
        <div class="form-group">
            <label for="confirm" class="col-sm-2">Confirm Password:</label>
            <input type="password" name="confirm" />
        </div>
        <div>
            <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
        </div>
<!--        Create captcha checking-->
        <div>
            <lable for="captcha_code" class="col-sm-2">Input the words:</lable>
            <input type="text" name="captcha_code" size="10" maxlength="6"/>
            <a href ="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[Different Image]</a>
        </div>
        <div class="col-sm-offset-2">
            <input type="submit" value="Register" class="btn btn-primary" />
        </div>
    </form>
</div>

<?php
require_once('footer.php');
ob_flush(); ?>
