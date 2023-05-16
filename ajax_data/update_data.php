<?php 
include_once('../msqli_oop/function.php');  
$Email = $_POST['update_email'];
$Password = $_POST['update_pass'];
$Status = $_POST['update_status'];
$edit_id = $_POST['update_id'];

if(isset($_POST['update_button'])){
$update_data = new DB_con();
$sql = $update_data->update_data($Email,$Password,$Status,$edit_id);
}

   
?>