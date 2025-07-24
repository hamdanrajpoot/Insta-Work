<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Sign Up</title>
    
<?php include './bootstrap.php'?>
    <style>
        .card {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
            padding: 15px;
            text-align: center;
            box-shadow: none;
        }
        .btn-instagram {
            background-color: #405de6;
            color: white;
            border: none;
        }
        .btn-instagram:hover {
            background-color: #324ab2;
        }
        .form-group label {
            text-align: left;
            display: block;
        }
        @media (min-width: 576px) {
            .card {
                max-width: 350px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }
        }
        @media (max-width: 576px) {
            h1 {
                font-size: 1.8rem;
            }
            .form-control {
                font-size: 0.9rem;
                padding: 0.5rem;
            }
            .btn {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }
            p, small {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<?php
if(isset($_SESSION['ticket'])){
    header("Location:http://localhost:3000/index.php");
}
?>

<body>
    <div class="card mt-3">
        <h1 class="mb-3" style="font family:san-serif">Instagram</h1>
        <p class="mb-3">Sign up to see photos and videos from your friends.</p>
        <button class="btn btn-instagram btn-block mb-3">
            <i class="fab fa-facebook-f"></i> Log in with Facebook
        </button>
          <div class="d-flex gap-2 align-items-center">
            <hr class="w-100">
            <p class="m-0 fw-semibold text-sm">OR</p>
            <hr class="w-100">
        </div>
        <form action="./register-user.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control mb-2 text-sm" name="m_mail" placeholder="Mobile Number or Email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control  text-sm" name="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control  text-sm" name="fullname" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control text-sm" name="username" placeholder="Username">
            </div>
            <small class="text-muted mb-2 d-block text-xsm">People who use our service may have uploaded your contact information to Instagram. <a href="#">Learn More</a></small>
            <p class="text-muted mb-2 text-xsm">By signing up, you agree to our <a href="#">Terms</a>, <a href="#">Privacy Policy</a> and <a href="#">Cookies Policy</a>.</p>
            <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
       
    </div>
     <!-- Have Account -->
        <div class="text-center mt-1  mx-auto text-sm mb-5 " style="max-width:350px;">
            <div class="text-center mt-3">
                <p class="text-muted fw-bold">Have an account? <a href="#">Log in</a></p>
        </div>
<p class="text muted fw-bold">Get the app.</p>
    </div>
</body>
</html>