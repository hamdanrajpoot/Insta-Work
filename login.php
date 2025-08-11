<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './bootstrap.php' ?>
    <title>Instagram login</title>
    <style>

    </style>
</head>

<body>

    <div class="container row mx-auto align-items-center min-vh-100">
        <div class="col-lg-6">
            <img src="https://static.cdninstagram.com/rsrc.php/v4/yE/r/e8VpFK6GuF9.png" class="d-block  mx-auto"
                width="50%" alt="">
        </div>
        <div class="col-lg-3">
            <form action="./log-user.php" method="POST">
                <img class="d-none d-lg-block mx-auto"
                    src="https://tse2.mm.bing.net/th/id/OIP.DexBeSiGPUP4igHscKierwHaCi?pid=Api&P=0&h=220" width="150px"
                    alt="Logo">
                <input name="m_mail" type="text" class="form-control my-2 rounded-2 text-sm"
                    style="background-color:#FAFAFA" placeholder="Phone number,username, or email">
                <input name="password" type="password" class="form-control my-2 rounded-2 text-sm"
                    style="background-color:#FAFAFA" placeholder="Password">
                <button class="btn btn-info rounded-3 btn-sm w-100 text-white">Login</button>
            </form>
            <div class="d-flex gap-2 align-items-center">
                <hr class="w-100">
                <p class="m-0 fw-semibold text-sm">OR</p>
                <hr class="w-100">
            </div>
            <div class="d-flex gap-2 align-items-center justify-content-center my-2">
                <i class="bi bi-facebook text-primary"></i>
                <p class="text-primary text-sm m-0 fw-semibold">Log in with facebook</p>
            </div>
            <?php
if (isset($_SESSION['invalid_credentials'])){
  echo "<p class='text-danger text-sm text-center'>{$_SESSION['invalid_credentials']}</p>";
}
unset($_SESSION['invalid_credentials']);
?>


            <p class="text-sm text-dark fw-semibold text-center my-2">Forgot Password?</p>
            <p class="text-sm text-center my-5">Don't have an account? <a href="./sign-up.php"
                    class="text-primary text-decoration-none text-semibold">Sign Up</a></p>
        </div>
    </div>
</body>

</html>