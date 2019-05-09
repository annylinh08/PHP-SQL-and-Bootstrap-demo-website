
<html>
<body>
<?php
require 'db.php';
$photo = $_FILES['photo'];
$id = $_POST['id'];
//
if(isset($_POST['save'])) {
    $givenname = $_POST ['givenname'];
    $surname = $_POST ['surname'];
    $streetaddress = $_POST ['streetaddress'];
    $city = $_POST ['city'];
    $province = $_POST ['province'];
    $postal_code = $_POST ['postal_code'];
    $country = $_POST ['country'];
    $emailaddress = $_POST ['emailaddress'];
    $telephonenumber = $_POST ['telephonenumber'];
//
    if (($_FILES['photo']['name'])) {
        $image_name = $_FILES['photo']['name'];
        echo 'Image Name: ' . $image_name . '<br />';
        //get the type of file
        $type = $_FILES['photo']['type'];
        echo 'File Type: ' . $type . '<br />';
        //see where the file got uploaded to in cache
        $temp_dir = $_FILES['photo']['tmp_name'];
        echo 'Temp Dir: ' . $temp_dir . '<br />';

        //Check the size and file type of the photo
        $size = $_FILES['photo']['size'];
        $error = $_FILES['photo']['error'];
        $fileExt = explode('.', $image_name);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        if (in_array($fileActualExt, $allowed)) {
            if ($error === 0) {
                if ($size < 1000000) {
                    unlink(realpath("images/$old_image"));
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    //set up a permanent directory path
                    $target = 'images/' . $fileNameNew;
                    move_uploaded_file($temp_dir, $target);
                } else {
                    echo "The file is too big";
                }
            } else {
                echo "There was an error uploading your file";
            }
        } else {
            echo "You cannot upload files of this type!";
        }
    } //
    else {
        $target = $old_image;
    }
}
$sql=( "UPDATE customers SET photo = '$target' ,givenname = '$givenname', surname = '$surname', streetaddress = '$streetaddress', city = '$city', province ='$province', postal_code = '$postalcode', emailaddress ='$emailaddress', telephonenumber ='$telephonenumber' WHERE id= $id");
echo $sql;
mysqli_query($conn, $sql) or die('Error updating database.');
//////disconnect
mysqli_close($conn);
//
//header('Location: display_customers.php');}
//
?>
</body>
</html>


