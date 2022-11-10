<?php
include('connection.php');



if (isset($_POST['fundi_login'])){

$username=$_POST['username'];
$password=$_POST['password'];
$id_no=$_POST['id_no'];


$fundiquery=("SELECT * FROM `fundis` WHERE ID_NO='$id_no'and USERNAME='$username' and PASSWORD='$password'");
$fundi=$mysqli->query($fundiquery);
$fund= $fundi->fetch_array(MYSQLI_BOTH);





if ($fund > 0){

session_start();
$_SESSION['ID_NO']=$fund['ID_NO'];
//$_SESSION['username']=$fund['username'];

header('location:fundis/dashboard.php');



}



else{  
header('location:index2.php');
   
    } 

}

?>	