<?php 

include_once('../msqli_oop/function.php');  
$userid = $_POST['studentdelete_id'];
$deletedata = new DB_con();
$sql = $deletedata->delete($userid);
   
?>