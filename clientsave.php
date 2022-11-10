<?php
session_start();
include('connection.php');
$Uname=trim($_POST['Uname']);
$Password=$_POST['Password'];
$Fname=trim($_POST['Fname']);
$Lname=trim($_POST['Lname']);
$Idno=trim($_POST['Idno']);
$Location=trim($_POST['Location']);
$Pno=trim($_POST['Pno']);


$sql=("INSERT INTO clients (ID_NO, USERNAME, PASSWORD, FIRST_NAME, LAST_NAME, LOCATION, PHONE_NUMBER) VALUES ('$Idno', '$Uname',  '$Password','$Fname', '$Lname', '$Location', '$Pno' ) ");

header("location: index.php?remarks= Client Registration Successful");

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "
" . $mysqli->error;
}


$mysqli->close();
?>
