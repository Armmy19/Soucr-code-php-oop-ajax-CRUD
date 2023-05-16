<!-- form เพิ่มข้อมูล modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="col-lg-12">
                <div id="message_insert"></div>
                <div id="fetch"></div>
            </div>

            <div class="modal-body">
                <form id="insert_form" method="post">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" id="txt_Email">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password:</label>
                        <input type="text" class="form-control" id="txt_Password">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Status:</label>
                        <select class="form-select" aria-label="Default select example" id="txt_Status">
                            <option selected>เลือกสิทธิ์การเข้าใช้งาน</option>
                            <option value="admin">admin</option>
                            <option value="users">users</option>
                        </select>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="btn_create" class="btn btn-primary">Add datd</button>
            </div>
        </div>
    </div>
</div>
<!--- end --->
<!-- form แก้ไขข้อมูล modal -->
<div class="modal fade" id="updateleModal" tabindex="-1" aria-labelledby="updateleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateleModalLabel">Edit data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="message"></div>
            <div class="col-lg-12">
                <div id="message_insert"></div>
                <div id="fetch"></div>
            </div>

            <div class="modal-body">
             <div id="update_data"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="btn_update" class="btn btn-primary">Add update</button>
            </div>
        </div>
    </div>
</div>
<!--- end --->
