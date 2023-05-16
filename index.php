
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>test demo ajax</title>
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap');

    body {
        font-family: 'Kanit', sans-serif;
    }
    </style>
</head>

<body>
    <?php

$get = (isset( $_GET["get"]));

switch ($get) {
  case "insert_data":
    include('');
    break;
  case "updart_data":
    include('');
    break;
  case "del_data":
    include('');
    break;
  default:
  include('form_data/select_data.php');
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php include('form_data/modal.php') ?>
    <?php include('javascript/javascript.php') ?>
  

</body>

</html>