<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: #ccc;
        }
        .login-panel{
            width: 300px;
        }
    </style>
  </head>
  <body>
      <div class="vh-100 d-flex justify-content-center align-items-center">
          <div class="login-panel card p-3">
            <?php
            if(isset($_SESSION["error"])&& $_SESSION["error"]["times"]>=5):
            ?>
            <h1>您已輸入錯誤超過次數</h1>
            <?php else: ?>
            <form action="./doLogin.php" method="post">
                <h3>Welcome Back</h3>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="account"placeholder="name@example.com">
                    <label for="floatingInput">Account</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <?php if(isset($_SESSION["error"])): ?>
                <div class="mb-2 text-danger">
                <?php
                    echo $_SESSION["error"]["message"]. " 共錯誤: ". $_SESSION["error"]["times"];
                ?>
                </div>
                <?php endif; ?>
                <div class="d-flex justify-content-between py-2">
                    <button type="submit" class="btn btn-info">Sign in</button>
                    <a href="./create-user.php" class="btn btn-info">Sign up</a>
                </div>
            </div>
          </form>
          <?php endif; ?>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>