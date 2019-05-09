<!--Linh Duong -200393657-->

<?php ob_start();

$title = 'Log In';
require_once('header.php');
?>
    <html>
    <body>
    <div class="container">
        <h1>Log In</h1>
<!--        Create log in form-->
        <form method="post" action="validate.php" class="form-horizontal">
            <div class="form-group">
                <label for="employeeId" class="col-sm-2">Employee Email:</label>
                <input name="employeeId" required/>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2">Password:</label>
                <input type="password" name="password" required />
            </div>
            <div class="col-sm-offset-2">
                <input type="submit" value="Login" class="btn btn-primary" />
            </div>
            <div class="col-sm-offset-2">
                <a href="forget-password.php">I forgot my password</a>
            </div>
    </form>
    </div>
    </body>
    </html>
<?php
require_once('footer.php');
?>