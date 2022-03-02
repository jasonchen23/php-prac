<?php
require_once("./db-connect.php");
$id=$_GET["id"];

$sql="SELECT * FROM user WHERE id=$id";
$result= $conn -> query($sql);
$row=$result->fetch_assoc();
$phonesArr=explode(', ',$row["phone"]);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>userinfo</title>
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
        <div class="py-2">
            <a href="./user-list.php" class="btn btn-info"> 使用者列表</a>
        </div>
        <form action="./doUpdate.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row["id"]?>">    
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td><?=$row["id"]?></td>
            </tr>
            <tr>
                <td>ACCOUNT</td>
                <td>
                    <input type="text" name="account" class="form-control" Required value="<?=$row["account"]?>">
                </td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>                
                    <select name="gender" id="" class="form-select">
                        <option value="">Select Gender</option>
                        <option value="1"
                        <?php
                        if($row["gender"]== 1) echo "selected";
                        ?>>
                        Male</option>
                        <option value="2"
                        <?php
                        if($row["gender"]== 2) echo "selected";
                        ?>>
                        Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>PHONE</td>
                <td>
                <div class="row">
                    <div class="col">
                        <input type="text" name="phone[]" class="form-control" Required value="<?php if(isset($phonesArr[0])) echo $phonesArr[0]?>">
                    </div>
                    <div class="col">
                        <input type="text" name="phone[]" class="form-control" Required value="<?php if(isset($phonesArr[1])) echo $phonesArr[1]?>">
                    </div>
                    <div class="col">
                        <input type="text" name="phone[]" class="form-control" Required value="<?php if(isset($phonesArr[2])) echo $phonesArr[1]?>">
                    </div>
                </div>
                </td>
            </tr>
        </table>
        <div class="py-2">
            <div class="d-flex justify-content-between">
                <div>
                    <button type="submit" class="btn btn-info">送出</button>
                </div>
                <div>
                    <a href="./doDelete.php?id=<?=$row["id"]?>" class="btn btn-danger">刪除</a>
                    <a href="./user-info.php?id=<?=$row["id"]?>" class="btn btn-info"> 取消</a>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>