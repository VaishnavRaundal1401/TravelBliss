<?php
$con = mysqli_connect('localhost', 'root', '', 'UserInfo');

if (!$con) { 
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "INSERT INTO UserInfo (user, email, mobile, comment) VALUES ('$user', '$email', '$mobile', '$comment')";

if (mysqli_query($con, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
header('location:./contact.php');
?>
