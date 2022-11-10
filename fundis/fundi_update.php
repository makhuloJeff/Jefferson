
<?php
include('connection.php');
include('dashboard.php');

///UPDATE ACCOUNT CODE

if (isset($_POST['save_changes'])){

$fundi_ID=$_SESSION['ID_NO'];
$username=trim($_POST['username']);
$password=$_POST['password'];
$location=trim($_POST['location']);
$p_no=trim($_POST['p_no']);



$up_fund=("update fundis set USERNAME ='$username', PASSWORD ='$password',LOCATION ='$location', PHONE_NUMBER ='$p_no' where ID_NO ='$fundi_ID' ");

 $mysqli->query($up_fund);
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
$fundi_ID=$_SESSION['ID_NO'];

$del_fund=(" DELETE FROM fundis  where ID_NO ='$fundi_ID' ");

 $mysqli->query($del_fund);
 $msg="Account Deleted Succesfully";

 echo("<script>location.href='"."../index.php?msg=$msg';</script>");


}
?>