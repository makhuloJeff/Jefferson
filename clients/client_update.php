
<?php
include('connection.php');
include('dashboard.php');

///UPDATE ACCOUNT CODE

if (isset($_POST['save_changes'])){

$client_ID=$_SESSION['ID_NO'];
$username=trim($_POST['username']);
$password=$_POST['password'];
$location=trim($_POST['location']);
$p_no=trim($_POST['p_no']);



$up_cli=("update clients set USERNAME ='$username', PASSWORD ='$password',LOCATION ='$location', PHONE_NUMBER ='$p_no' where ID_NO ='$client_ID' ");

 $mysqli->query($up_cli);
 $msg="Profile Updated Succesfully";
 //header("location: dashboard.php?remarks=Profile Update Successful");
 echo("<script>location.href='"."dashboard.php?msg=$msg';</script>");

/*if ($mysqli->query($mysqli) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "
" . $mysqli->error;

}
*/


}

else

///DELETE ACCOUNT CODE

if (isset($_POST['delete_acc'])){
$client_ID=$_SESSION['ID_NO'];

$del_cli=(" DELETE FROM clients  where ID_NO ='$client_ID' ");

 $mysqli->query($del_cli);
 $msg="Account Deleted Succesfully";

 echo("<script>location.href='"."../index.php?msg=$msg';</script>");


}
?>