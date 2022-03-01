<?php
require_once("./db-connect.php");
$id=$_GET["id"];
$sql="SELECT * FROM user WHERE id=$id";
$result= $conn -> query($sql);
$row=$result->fetch_assoc();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
        <?php
            // $data=$result->fetch_all(MYSQLI_ASSOC);
        ?>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td><?=$row["id"]?></td>
            </tr>
            <tr>
                <td>ACCOUNT</td>
                <td><?=$row["account"]?></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td><?=$row["gender"]?></td>
            </tr>
            <tr>
                <td>PHONE</td>
                <td><?=$row["phone"]?></td>
            </tr>
        </table>
        <div class="py-2">
            <a href="./user-list.php" class="btn btn-info"> 使用者列表</a>
          </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>