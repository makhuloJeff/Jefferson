<?php
include('connection.php');



if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];
$id_no=$_POST['id_no'];


$clientquery=("SELECT * FROM `clients` WHERE ID_NO='$id_no'and USERNAME='$username' and PASSWORD='$password'");
$client=$mysqli->query($clientquery);
$cli= $client->fetch_array(MYSQLI_BOTH);





if ($cli > 0){

session_start();
$_SESSION['ID_NO']=$cli['ID_NO'];
$_SESSION['username']=$cli['username'];

header('location:clients/dashboard.php');



}



else{
  
header('location:index2.php');
   
    } 

}

?>	