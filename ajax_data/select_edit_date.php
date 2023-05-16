<?php

include_once('../msqli_oop/function.php');  
$update_id = $_POST['studentupdate_id'];

$select_data_edit = new DB_con();
$sql = $select_data_edit->select_data_edit($update_id);
$row = mysqli_fetch_array($sql)
?>

<form id="edit_form" method="post" class="form-horizontal">

    <form id="insert_form" method="post">
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="edit_email" value="<?php echo $row['email'];?> ">
        </div>
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="text" class="form-control" id="edit_pass" value="<?php echo $row['password'];?>">
        </div>
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Status:</label>
            <select class="form-select" aria-label="Default select example" id="edit_status">
                <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                <option value="admin">admin</option>
                <option value="users">users</option>
            </select>
        </div>



        <input type="hidden" id="edit_id" value="<?php echo $row['id']; ?>">

    </form>