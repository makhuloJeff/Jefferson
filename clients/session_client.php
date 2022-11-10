<?php
include('connection.php'); 
session_start();



if(!isset($_SESSION['ID_NO']))
{

header('location:../index.php');
}


?>