<?php 

include_once('../msqli_oop/function.php');  
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Status = $_POST['Status'];

if(isset($_POST['btncreate'])){
$insert_data = new DB_con();
$sql = $insert_data->insert_data($Email,$Password,$Status);
}

   
?>