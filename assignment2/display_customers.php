<!--Linh Duong - 200393657-->
<html>
	<head>
        <title>Display Customers Information</title>
    </head>
    <body>
    	<?php

            require_once('header.php');

        //Set up the SQL and join two tables together
        $sql ="SELECT * FROM customers";

        //Execute the SQL command in the db
        $result = mysqli_query ($conn, $sql);
        // Give user a link if they want to add more record
        echo "<a href =add_customers.php><strong>Add a new record</strong></a>";
        echo '<h1 align="center">Customer Information</h1>';
        echo '<table class="table" border="0"  align="center"> 
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Street Address</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>Postal Code</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>View Customer</th> 
                    <th>Update</th> 
                    <th>Delete</th>';

        //Loop through the collection of data
        while ($row = mysqli_fetch_array($result)){
            echo '
                                   <tr>
                                        <td>'.$row['givenname'].'</td>
                                        <td>'.$row['surname'].'</td>
                                        <td>'.$row['streetaddress'].'</td>
                                        <td>'.$row['city'].'</td>
                                        <td>'.$row['province'].'</td>
                                        <td>'.$row['postal_code'].'</td>
                                        <td> <a href="mailto:'.$row['emailaddress'] .'"> '. $row['emailaddress'] . '</td>
                                        <td>'.$row['telephonenumber'].'</td>
                                        <td><a href="view_customer.php?id=' . $row['id'] . '">View Customer</a></td>
                                        <td><a href="edit_customer.php?id=' . $row['id'] . '">Edit</a></td>
			                            <td><a href="delete_customer.php?id=' . $row['id'] . '"
			                            onclick="return confirm(\'Are you sure you want to delete ' . $row['givenname'] . '?\');">Delete</a></td>
                                   </tr>';
            }
            echo '</table>';

            //disconnect from the db
            mysqli_close($conn);

        ?>
    </body>
    <?php require_once ('footer.php');?>
</html>
