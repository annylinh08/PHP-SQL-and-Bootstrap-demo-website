<!--Linh Duong - 200393657-->

<html>
	<head>
        <title>Add Customers Information</title>
    </head>
    <body>
    <?php ob_start();
//   Connect to database and check authentication before letting user add customer
    require_once('header.php');
    require_once ('auth.php');



    // Link to go back to the table
          echo ' <a href ="display_customers.php">Back to the table</a>';

        ?>


        <h1 align="center">Add Customer Information</h1>
        <form class="col-sm-offset-5" method="post" action="save_customers.php" enctype="multipart/form-data">
            <div>
                <label for="photo">Add profile photo:</label>
                <input type="file" name="photo" id="photo" />
            </div>
            <div>
                <label for="givenname">First Name:</label>
                <input name="givenname" required />
            </div>
            <div>
                <label for="surname">Last Name:</label>
                <input name="surname" required />
            </div>
            <div>
                <label for="streetaddress">Street Address:</label>
                <input name="streetaddress" required />
            </div>
            <div>
                <label for="city">City:</label>
                <input name="city" required />
            </div>
            <div>
                <label for="province">Province:</label>
                <select id="province" name="province">
                    <option value="choose">Choose</option>
                    <option value="AB">AB</option>
                    <option value="BC">BC</option>
                    <option value="ON">ON</option>
                    <option value="MB">MB</option>
                    <option value="NB">NB</option>
                    <option value="NL">NL</option>
                    <option value="NT">NT</option>
                    <option value="NS">NS</option>
                    <option value="NV">NV</option>
                    <option value="PE">PE</option>
                    <option value="QC">QC</option>
                    <option value="SK">SK</option>
                    <option value="YK">YK</option>
                </select>
            </div>
            <div>
                <label for="postal_code">Postal code:</label>
                <input name="postal_code" required />
            </div>
            <div>
                <label for="emailaddress">Email:</label>
                <input name="emailaddress" required type="email" />
            </div>
            <div>
                <label for="telephonenumber">Phone Number:</label>
                <input name="telephonenumber" required type="tel"  />
            </div>
            <div class="col-sm-offset-1">
                <input type="submit" value="Save" class="btn btn-primary" />
            </div>
        </form>
    </body>
</html>
