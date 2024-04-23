<?php

$con = mysqli_connect('localhost','root', '', 'Needs');

if($con){ 
   echo "Connection successful";
}else{
   echo "No connection";
}

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$requirement = $_POST['requirement'];

$query = "INSERT into Needs (name, mobile, country, requirement) values('$name', '$mobile', '$country', '$requirement')";

if (mysqli_query($con, $query)) {
   echo "New record created successfully";
} else {
   echo "Error: " . $query . "<br>" . mysqli_error($con);
}

header('location:./JourneyGuru.php');

?>

