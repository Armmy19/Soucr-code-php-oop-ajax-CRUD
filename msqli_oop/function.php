<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'databest_test');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM `login_user`");
            return $result;
        }
        public function select_data_edit($update_id) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM `login_user` WHERE `id` = '$update_id'");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM `login_user` WHERE id = $userid");
            return $deleterecord;
        }

        public function insert_data($Email,$Password,$Status) {
            // $insert_data->bindParam(':sid',$userid);
			if ($Email == "") 
			{
                echo '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> fail to insert data </strong>
              </div>' ;
              
            }else{
                $insert_data = mysqli_query($this->dbcon, "INSERT INTO `login_user`(`email`, `password`, `status`) VALUES ('$Email','$Password','$Status')");
                if($insert_data){
                    echo '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong> insert : data insert successfully </strong>
                 </div>';
            
                }
            }
				
			}
			
        public function update_data($Email,$Password,$Status,$edit_id) {
            // $insert_data->bindParam(':sid',$userid);
			if ($Email == "") 
			{
                echo '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> fail to update data </strong>
              </div>' ;
              
            }else{
                $update_data = mysqli_query($this->dbcon, "UPDATE `login_user` SET `email`='$Email',`password`='$Password',`status`='$Status' WHERE `id`='$edit_id'");
                if($update_data){
                    echo '<div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong> insert : data update successfully </strong>
                 </div>';
            
                }
            }
				
			}
			
        }


         

         
    
    

?>