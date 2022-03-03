<?php
session_start();
if(isset($_SESSION["user"])){
    header("location: ./dashboard-api.php");
}
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
            <div>
                <h3>Welcome Back</h3>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="account" name="account"placeholder="name@example.com">
                    <label for="floatingInput">Account</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="mb-2 text-danger" id="error"></div>
                <div class="d-flex justify-content-between py-2">
                    <button type="button" class="btn btn-info" id="login">Sign in</button>
                    <a href="./create-user.php" class="btn btn-info">Sign up</a>
                </div>
            </div>
            </div>
          <?php endif; ?>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <script>
        $("#login").click(function(){
            let account=$("#account").val(), password=$("#password").val();
            // console.log(account, password);
            let formData=new FormData();
            formData.append('account',account);
            formData.append('password',password);

            axios({
                method: "post",
                url: "./doLogin-api.php",
                data: formData,
                headers: {
                    'Content-Type':
                    "multipart/form-data"
                }
            }).
            then(function(res){
                let data= res.data;
                console.log('success');
                if(data.status===1){
                    location.href="./dashboard-api.php";
                }else{
                    let message=`${data.error.message},"共錯誤" ${data.error.time}`;
                    $("#error").text(message);
                   
                };
            }).
            catch(function(res){
                console.log(res);
            })
        });

    </script>
  </body>
</html>