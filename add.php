<?php
include 'connect.php';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];
    $query = "insert into contact(name,email,phone,website,message) values('$name','$email','$phone','$website','$message')";
    echo $query;
    if (mysqli_query($conn, $query)) {
        echo "Thank You";
        header( "refresh:5;url=contact.php" );
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo 'something went wrong';
}
