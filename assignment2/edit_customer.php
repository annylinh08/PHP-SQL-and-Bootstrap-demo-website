<!--Linh Duong - 200393657-->
<!DOCTYPE html>
<head>
    <?php
    require 'header.php';
    //authentication check
    require_once ('auth.php');
    //get the unique id
    $id = $_GET['id'];
    //write and run the sql select and store the results
    $sql = "SELECT * FROM customers WHERE id = '$id'";
    $result = $conn -> query($sql);
    //store the all the name of information in each column on database into variables
    foreach ($result as $row) {
//        $photo  = $row['photo'];
        $givenname  = $row['givenname'];
        $surname  = $row['surname'];
        $streetaddress  = $row['streetaddress'];
        $city  = $row['city'];
        $province  = $row['province'];
        $postal_code  = $row['postal_code'];
        $emailaddress  = $row['emailaddress'];
        $telephonenumber  = $row['telephonenumber'];
        }
    //disconnect
    $conn = null;
    ?>
<!--    Link to go back the table-->
    <a href="display_customers.php"><strong>Go Back</strong></a>
    <!-- Create a form to update customers information to the database -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>Update Customer</title>
</head>
<body>
<h1 align="center">Update Customer</h1>
<form class="col-sm-offset-5" action=".\update_customer.php" method="post" enctype="multipart/form-data">
<!--    <div>-->
<!--        <label for="photo">Add photo of the house:</label>-->
<!--        <input type="file" name="photo" id="photo"--><?php //echo $photo; ?><!-- />-->
<!--    </div>-->
<!--    <div class="col-sm-offset-3">-->
<!--        --><?php
//        //show the photo if there is one
//        if (!empty($photo)) {
//            echo '<img src="images/' . $photo . '" alt="Customer Photo" width="150" />';
//        }
//        ?>
<!--    </div>-->
    <div>
        <label for="givenname">First Name:</label>
        <input name="givenname" required value="<?php echo $givenname; ?>"/>
    </div>
    <div>
        <label for="surname">Last Name:</label>
        <input name="surname" required value="<?php echo $surname; ?>" />
    </div>
    <div>
        <label for="streetaddress">Street Address:</label>
        <input name="streetaddress" required value="<?php echo $streetaddress; ?>"/>
    </div>
    <div>
        <label for="city">City:</label>
        <input name="city" required value="<?php echo $city; ?>" />
    </div>
    <?php
    // Create database variables
    $username="root";
    $servername="localhost";
    $password="mysql";
    $dbname="comp1006-2019";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname );

    //Select information from table 2 which is named provinces
    $sql2 = "Select * from PROVINCES";
    $result = mysqli_query($conn, $sql2);

    //Display the options
//    using if condition to let the machine show the option table or just keep the old value
    echo '<label for="province">province: </label>';
    echo '<select id="province" name="province">';
    echo '<option value="choose">...</option>';
    while ($row = mysqli_fetch_array($result)){
        if($row['provinces'] = $province)
            echo '<option selected value='.$row['province'].'>'.$row['province'].'</option>';
        else
            echo '<option value='.$row['province'].'>'.$row['province'].'</option>';

    }
    echo '</select>';
    ?>

    <div>
        <label for="postal_code">Postal code:</label>
        <input name="postal_code" required value="<?php echo $postal_code; ?>" />
    </div>
    <div>
        <label for="emailaddress">Email:</label>
        <input name="emailaddress" required type="email" value="<?php echo $emailaddress; ?>" />
    </div>
    <div>
        <label for="telephonenumber">Phone Number:</label>
        <input name="telephonenumber" required type="tel" value="<?php echo $telephonenumber; ?>" />
    </div>
    <div class="col-sm-offset-1" >
<!--        <input type="hidden" name="current_photo" value="--><?php //echo $photo; ?><!--" />-->
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="submit" name="save" value="Save" />
    </div>
</form>
</body>
<?php require 'footer.php';?>
</html>