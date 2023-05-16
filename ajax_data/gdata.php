<?php 
 include_once('../msqli_oop/function.php');  
header("Content-type:text/html; charset=UTF-8");        
header("Cache-Control: no-store, no-cache, must-revalidate");       
header("Cache-Control: post-check=0, pre-check=0", false);       
if($_GET['rev']==1){
    echo date("Y-m-d H:i:s");
    $fetchdata = new DB_con();
    $sql = $fetchdata->fetchdata();
  

    echo "<table class='table'>";
       echo "<thead>
            <tr>
                <th scope='col'>#</th>
                <th scope='col'>email</th>
                <th scope='col'>password</th>
                <th scope='col'>status</th>
                <th scope='col'></th>
            </tr>
        </thead>";
       echo" <tbody>";
       while($row = mysqli_fetch_array($sql)) {
       $email = $row['email'];
       $password = $row['password'];
       $status = $row['status'];
       $id_del = $row['id'];
    

       echo"<tr>
                <th scope='row'>1</th>
                <td>$email</td>
                <td>$password</td>
                <td>$status</td>
                <td>
                <a  id='btn_edit' value='$id_del' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#updateleModal'
                data-bs-whatever='@fat'>แก้ไขข้อมูล</a>
                    <a id='delete' value='$id_del' class='btn btn-danger'>ลบข้อมูล</a>
                </td>
            </tr>";
        }

       echo" </tbody>";
    echo"</table>";
    
}
?>