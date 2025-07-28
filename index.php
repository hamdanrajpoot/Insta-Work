<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include './bootstrap.php' ?>
    <title>Instagram</title>
</head>
<?php
if(!isset($_SESSION['ticket'])){
  header("Location:http://localhost:3000/sign-up.php");
}

?>
<body>


  <!-- sidebar-fotter -->
<?php include './sidebar-footer.php'?>
<?php include './post-modal.php'?>
<?php 
if(isset($_SESSION['welcome'])){
include './welcome.php';
}
unset($_SESSION['welcome'])
 ?>

   <!-- closed -->
<!-- overlay -->
 
<div style="height:100vh; width:100vw;background:rgba(0,0,0,0.7)" class="position-fixed overlay d-none justify-content-center align-items-center d-flex top-0 z-3">
    <i class="bi bi-x-lg close-overlay text-white position-fixed  " style="top:10px; right:10px; cursor:pointer;"></i>
<div class="col-xl-7 col-lg-8 my-overlay-content col-md-10 col-11 mx-auto" style="height:70vh;">
    <div class="row h-100">
        <div class="col-sm-7 p-0">
            <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202505/asim-munir-025754823-16x9_0.jpg?VersionId=8eJyERjM9hj8VFtddkKZXToJFUXKv_jf" width="100%" height="100%" class="object-fit-cover rounded-start-2" alt="">
        </div>
        <div class="col-sm-5 rounded-end-2 bg-white p-1">
              <div class="d-flex p-2 justify-content-between align-items-center">
    <div class="d-flex gap-1 align-items-center">
      <div
        class="rounded-circle border border-warning d-flex justify-content-center align-items-center"
        style="height: 40px; width: 40px; background: linear-gradient(45deg, orange, pink, red);"
      >
        <img
          src="https://imgeng.jagran.com/images/2025/04/17/article/image/asim-munir-1744865125235_v.webp"
          class="object-fit-cover rounded-circle"
          style="width: 93%; height: 93%;"
          alt=""
        />
      </div>
      <h6 class="m-0" style="font-size:0.7rem;">Meri Jind Meri Jan Asim Munir</h6>
      <i class="bi bi-dot"></i>
      <p style="font-size:0.6rem;" class="text-secondary m-0">3d</p>
    </div>
    <i class="bi bi-three-dots"></i>
  </div>
  <!-- Imran Khan comment -->

   <div class="d-flex p-3 justify-content-between">
    <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex gap-1 align-items-center">
      <div
        class="rounded-circle border border-warning d-flex justify-content-center align-items-center"
        style="height: 30px; width: 30px; background: linear-gradient(45deg, orange, pink, red);"
      >
        <img
          src="data:image/jpeg;base64,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"
          class="object-fit-cover rounded-circle"
          style="width: 93%; height: 93%;"
          alt=""
        />
      </div>
      <div class="">
        <div class=" d-flex gap-2">
            <h6 class="m-0" style="font-size:0.7rem;">Khan Sahab💕</h6>
      <p style="font-size:0.6rem;" class="text-secondary m-0">I'm Alone Enough...!</p>
        </div>
        <div class="d-flex gap-2">
            <p class="m-0 text-xxsm">5d</p>
            <p class="m-0 text-xxsm">10 Likes</p>
            <p class="m-0 text-xxsm">Reply</p>
        </div>
      </div>

    </div>
<i class="bi bi-heart text-xsm"></i>
    </div>
   </div>
   <!-- closed -->
   <!--  Ali Muhammmad Khan Comment -->
<div class="d-flex p-3 justify-content-between">
    <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex gap-1 align-items-center">
      <div
        class="rounded-circle border border-warning d-flex justify-content-center align-items-center"
        style="height: 30px; width: 30px; background: linear-gradient(45deg, orange, pink, red);"
      >
        <img
          src="https://arynews.tv/wp-content/uploads/2019/10/Ali-Muhammad-Khan.jpg"
          class="object-fit-cover rounded-circle"
          style="width: 93%; height: 93%;"
          alt=""
        />
      </div>
      <div class="">
        <div class=" d-flex gap-2">
            <h6 class="m-0" style="font-size:0.7rem;">Ali Muhammad Khan💯</h6>
      <p style="font-size:0.6rem;" class="text-secondary m-0">Alwyz with U Khan Sahab!</p>
        </div>
        <div class="d-flex gap-2">
            <p class="m-0 text-xxsm">5d</p>
            <p class="m-0 text-xxsm">2 Likes</p>
            <p class="m-0 text-xxsm">Reply</p>
        </div>
      </div>

    </div>
<i class="bi bi-heart text-xsm"></i>
    </div>
   </div>
    <!-- closed -->
     <!-- Sher Afzal Murawat comment -->
<div class="d-flex p-3 justify-content-between">
    <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex gap-1 align-items-center">
      <div
        class="rounded-circle border border-warning d-flex justify-content-center align-items-center"
        style="height: 30px; width: 30px; background: linear-gradient(45deg, orange, pink, red);"
      >
        <img
          src="https://arynews.tv/wp-content/uploads/2024/04/Sher-afzal-marwat.jpg"
          class="object-fit-cover rounded-circle"
          style="width: 93%; height: 93%;"
          alt=""
        />
      </div>
      <div class="">
        <div class=" d-flex gap-2">
            <h6 class="m-0" style="font-size:0.7rem;">Sher Afzal Murawat💥</h6>
      <p style="font-size:0.6rem;" class="text-secondary m-0">Ek Khan Sab pr Bharii!</p>
        </div>
        <div class="d-flex gap-2">
            <p class="m-0 text-xxsm">5d</p>
            <p class="m-0 text-xxsm">2 Likes</p>
            <p class="m-0 text-xxsm">Reply</p>
        </div>
      </div>

    </div>
<i class="bi bi-heart text-xsm"></i>
    </div>
   </div>

      <!-- closed -->
       <!--Murad Saeed Comment  -->
       <div class="d-flex p-3 justify-content-between">
    <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex gap-1 align-items-center">
      <div
        class="rounded-circle border border-warning d-flex justify-content-center align-items-center"
        style="height: 30px; width: 30px; background: linear-gradient(45deg, orange, pink, red);"
      >
        <img
          src="https://www.samaa.tv/images/image-for-web-2023-12-29t150418-625.jpg"
          class="object-fit-cover rounded-circle"
          style="width: 93%; height: 93%;"
          alt=""
        />
      </div>
      <div class="">
        <div class=" d-flex gap-2">
            <h6 class="m-0" style="font-size:0.7rem;">Murad Saeed💥</h6>
      <p style="font-size:0.6rem;" class="text-secondary m-0">Raulay ky tayar hn khan sahab!</p>
        </div>
        <div class="d-flex gap-2">
            <p class="m-0 text-xxsm">5d</p>
            <p class="m-0 text-xxsm">2 Likes</p>
            <p class="m-0 text-xxsm">Reply</p>
        </div>
      </div>

    </div>
<i class="bi bi-heart text-xsm"></i>
    </div>
   </div>
       <!-- closed -->
        <!-- Ali Amin Gandapur -->
       
           <div class="d-flex p-3 justify-content-between">
    <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex gap-1 align-items-center">
      <div
        class="rounded-circle border border-warning d-flex justify-content-center align-items-center"
        style="height: 30px; width: 30px; background: linear-gradient(45deg, orange, pink, red);"
      >
<img src="https://i.tribune.com.pk/media/images/gandapur1710944105-0/gandapur1710944105-0.jpg"
 class="object-fit-cover rounded-circle"
 style="width: 93%; height: 93%;"
 alt=""
/>
</div>
      <div class="">
        <div class=" d-flex gap-2">
            <h6 class="m-0" style="font-size:0.7rem;">Ali Amin Gandapur⚔</h6>
      <p style="font-size:0.6rem;" class="text-secondary m-0">Hukm kryn Khan Sahab!</p>
        </div>
        <div class="d-flex gap-2">
            <p class="m-0 text-xxsm">5d</p>
            <p class="m-0 text-xxsm">2 Likes</p>
            <p class="m-0 text-xxsm">Reply</p>
        </div>
      </div>

    </div>
<i class="bi bi-heart text-xsm"></i>
    </div>
   </div>
         <!-- closed -->
        </div>
    </div>
</div>
</div>
<div class="container-fluid ps-0">
    <div class="row">
    <!-- sidebar -->

     <div class="col-2">
        <?php include './sidebar.php'?>
</div>
<!-- main content -->
 <div style="height:97vh;overflow-y:scroll"
                class="col-xl-7 col-md-10 p-5 d-flex flex-column align-items-center">
                <?php include './main-content.php' ?>
            </div>
            <!-- user section -->
            <div class="col-xl-3 py-5">
                <div class="d-flex">
                    <div class="d-flex align-items-center gap-3">
                        <img width="60px" height="60px" class="rounded-circle object-fit-cover"
                            src="https://i.postimg.cc/mD7129yF/Screenshot-20240802-114112-Gallery.jpg"
                            alt="">
                        <div class="">
                            <h6 class="m-0">

                                <?php
                                echo $_SESSION['ticket']
                                ?>
                            </h6>
                            <p class="text-secondary m-0 text-sm">

                                <?php
                                echo $_SESSION['fullname']
                                ?>
                            </p>
                        </div>

                    </div>

                </div>
                <div class="d-flex justify-content-between col-6 my-3">
                    <h6 class="text-secondary text-sm">
                        Suggested for you
                    </h6>
                    <h6 class="text-dark text-sm">
                        See All
                    </h6>
                </div>
            </div>
            <!-- message is fixed -->
        </div>
    </div>
</body>
</html>