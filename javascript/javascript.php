<script type="text/javascript">
$(function() {
    setInterval(function() {
        var getData = $.ajax({
            url: "ajax_data/gdata.php",
            data: "rev=1",
            async: false,
            success: function(getData) {
                $("div#showData").html(getData);
            }
        }).responseText;
    }, 3000);
});
</script>

<!-- ลบข้อมูล data ในไฟล์ delete_data.php -->
<script>
$(document).on('click', '#delete', function(e) {
    var delete_id = $(this).attr('value');
    Swal.fire({
        title: 'ยืนยันการลข้อมูล?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Delete!'
    }).then((result) => {
        if (result.value) {

            $.ajax({
                url: 'ajax_data/delete_data.php',
                type: 'post',
                data: {
                    studentdelete_id: delete_id
                },
                success: function(response) {

                    Swal.fire('ลบรายการสำเร็จ', '', 'success')
                    // .then(function() {
                    //     location.reload();
                    // })

                    fetch();
                    $('#message').html(response);
                }
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire('ยกเลิกรายการได้รับการยกเลิก', '', 'error')
        }



    })

    return false;
});
</script>

<!-- เพิ่มข้อมูล Add data ไฟล์ inser_data.php -->
<script>
$(document).on('click', '#btn_create', function(e) {

    e.preventDefault();

    var Email = $('#txt_Email').val();
    var Password = $('#txt_Password').val();
    var Status = $('#txt_Status').val();
    var btncreate = $('#btn_create').val();


    $.ajax({
        url: 'ajax_data/inser_data.php',
        type: 'post',
        data: {
            Email: Email,
            Password: Password,
            Status: Status,
            btncreate: btncreate
        },
        success: function(response) {
            fetch();
            $('#message_insert').html(response);
        }
    });

    $('#insert_form')[0].reset();

});
</script>

<!--- แสดงข้อมูลการแก้ไข ก่อนทำการ update ไฟล์ select_edit_data.php --->
<script>
$(document).on('click', '#btn_edit', function(e) {
    var update_id = $(this).attr('value');
    e.preventDefault();
    // alert(update_id );
    $.ajax({
        url: 'ajax_data/select_edit_date.php',
        type: 'post',
        data: {
            studentupdate_id: update_id
        },
        success: function(response) {
            $('#update_data').html(response);
        }
    });

});
</script>

<!---- อัพเดตข้อมูล ในไฟล์  update_data.php ---->
<script>
//Update Record

$(document).on('click', '#btn_update', function(e) {

    e.preventDefault();
alert('ok');
    var email = $('#edit_email').val();
    var pass = $('#edit_pass').val();
    var status = $('#edit_status').val();
    var edit_id = $('#edit_id').val();
    var update_btn = $('#btn_update').val();

    $.ajax({
        url: 'ajax_data/update_data.php',
        type: 'post',
        data: {
            update_email: email,
            update_pass: pass,
            update_status: status,
            update_id: edit_id,
            update_button: update_btn
        },
        success: function(response) {
            fetch();
            $('#message').html(response);
        }
    });

});
</script>