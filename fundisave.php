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
$Specialty=trim($_POST['Specialty']);
$rate_ph=trim($_POST['rate_ph']);
$image = $_FILES['image']['name'];
$image_text = mysqli_real_escape_string($mysqli, $_POST['image_text']);
$target = "f_pp/".basename($image);   


$sql=("INSERT INTO fundis(ID_NO,USERNAME, PASSWORD, FIRST_NAME, LAST_NAME, LOCATION, PHONE_NUMBER, PROFILE_PHOTO, IMAGE_TEXT, SPECIALTY, RATE_PH)VALUES('$Idno', '$Uname',  '$Password','$Fname', '$Lname', '$Location', '$Pno', '$image', '$image_text', '$Specialty', '$rate_ph' )");

mysqli_query($mysqli, $sql);
move_uploaded_file($_FILES['image']['tmp_name'], $target);


header("location: index.php?remarks=Fundi Registration Successful");

/*if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "
" . $mysqli->error;
}
*/

$mysqli->close();
?>
