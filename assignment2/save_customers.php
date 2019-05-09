<!--Linh Duong -200393657-->
<html>
    <head>
        <title>Save Customer Information</title>
    </head>
    <body>
    <?php
    require_once('auth.php');
    // Create database variables
    $username="root";
    $servername="localhost";
    $password="mysql";
    $dbname="comp1006-2019";
    //create the name for data in each column
    $givenname  = $_POST ['givenname'];
    $surname  = $_POST ['surname'];
    $streetaddress  = $_POST ['streetaddress'];
    $city  = $_POST ['city'];
    $province  = $_POST ['province'];
    $postal_code  = $_POST ['postal_code'];
    $country  = $_POST ['country'];
    $emailaddress  = $_POST ['emailaddress'];
    $telephonenumber  = $_POST ['telephonenumber'];
    $complete = true;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname );
    //Check connection
    if ($conn->connect_error) {
        die("connection failed: ". $conn->connect_error);
    }
        // Check each user input & show any error messages
        if (empty ($givenname)){
            $complete = false;}
        if (empty ($surname)){
            $complete = false;}
        if (empty ($streetaddress)){
            $complete = false;}
        if (empty ($city)){
            $complete = false;}
        if (empty ($province)){
            $complete = false;}
        if (empty ($postal_code)){
            $complete = false;}
        if (empty ($emailaddress)){
            $complete = false;}
        if (empty ($telephonenumber)){
            $complete = false;}

        // Check if there are any errors, if not connect
        if ($complete){
            //For image
            //get the name of the uploaded file & display the file name
            $file = $_FILES['photo'];
            $image_name = $_FILES['photo']['name'];
            echo 'Image Name: ' . $image_name . '<br />';
            //get the type of file
            $type = $_FILES['photo']['type'];
            echo 'File Type: ' . $type. '<br />';
            //see where the file got uploaded to in cache
            $temp_dir = $_FILES['photo']['tmp_name'];
            echo 'Temp Dir: ' . $temp_dir . '<br />';

            //Check the size and file type of the photo
            $size = $_FILES['photo']['size'];
            $error = $_FILES['photo']['error'];
            $fileExt = explode('.', $image_name);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png','pdf');
            if(in_array($fileActualExt, $allowed)){
               if($error ===0){
                    if($size < 10000000){
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        //set up a permanent directory path
                        $target = 'images/' . $fileNameNew;
                        move_uploaded_file($temp_dir, $target);
                    }
                    else{
                        echo"YOur file is to big";
                    }
               }
               else{
                   echo "There was an error uploading your file";
               }
            }
            else{
                echo "You cannot upload files of this type!";
            }
            //Run the sql to insert information and image in the folder
            $sql = "INSERT INTO customers (photo, givenname, surname, streetaddress, city, province, postal_code, emailaddress, telephonenumber) VALUES ('$target','$givenname','$surname', '$streetaddress', '$city',  '$province',  '$postal_code','$emailaddress', '$telephonenumber')";
            //echo $sql;
            //execute the save the data into table above
            if ($conn->query($sql) == TRUE){
                {
                    echo "error: ". $sql . "<br>" . $conn->error;
                }

                $conn->close();echo "<h1>New record was successfully created</h1>";
            }
            else

            //Disconnect
            $conn = null;

        }
//        Relocate back to customer table after insert succesfully
        header('Location: display_customers.php');
        ?>
    </body>
</html>