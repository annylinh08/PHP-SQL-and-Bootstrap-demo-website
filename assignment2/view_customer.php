<!--Linh Duong -200393657-->
<?php
//Require header to connect with databse and show the navigation bar
require 'header.php';
//check for authentication before we show any data
session_start();
require_once('auth.php');

    //retrieve the selected id from the url querystring and save it to a variable
    $id = $_GET['id'];
    //set up query
    $sql = "SELECT * FROM customers WHERE id = $id";
    //run the query and store the results
    $result = $conn->query($sql);
    echo '<section class="inner-wrapper">
					<h1>Customer Information</h1>';
    foreach ($result as $row) {
        echo '
				<section>
					<article class="image-box">';
        echo '<div class="img-container"><img src="'.$row['photo'].'" height="300" width="450" align="left"/></div>';
        echo'
					</article>
					<article>
						<div>
							Name: ' . $row['givenname']  . ' <span class="spacer"></span>' . $row['surname']  . '
						</div>
						<div>
							Address: ' . $row['streetaddress']  . ' <span class="spacer"></span> ' . $row['city']  . '
							<span class="spacer"></span> ' . $row['province']  . '
							<span class="spacer"></span> ' . $row['postal_code']  . '
						</div>
						<div>
							Email: <a href="mailto:' . $row['emailaddress'] . '">' . $row['emailaddress'] . '</a>
						</div>
						<div>
							Phone number:' . $row['telephonenumber'] . '
						</div>
						<div><a href="display_customers.php">Go Back</a></div>
					</article>
				</section>
			';
    }
    //close the table
    echo '</section>';
    //disconnect
    $conn = null;

require 'footer.php';
?>