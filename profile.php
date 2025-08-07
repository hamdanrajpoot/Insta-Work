<?php
session_start();
if(!isset($_SESSION['ticket'])){
  header("Location:http://localhost:3000/sign-up.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Profile</title>
    <?php include './bootstrap.php'; ?>
    <style>
        .profile-avatar {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ddd;
            cursor: pointer;
        }
        .profile-section {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            padding: 2rem 1rem;
            margin-top: 2rem;
        }
        .profile-username {
            font-size: 1.3rem;
            font-weight: 600;
        }
        .profile-actions .btn {
            font-size: 0.95rem;
        }
        .profile-stats {
            font-size: 1rem;
        }
        .profile-bio {
            font-size: 1rem;
            color: #555;
        }
        @media (max-width: 768px) {
            .profile-section {
                padding: 1rem 0.5rem;
                margin-top: 1rem;
            }
            .profile-avatar {
                width: 80px;
                height: 80px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0">
                <?php include './sidebar.php'; ?>
            </div>
            <!-- Profile Section -->
            <div class="col-md-10 col-12 pt-5">
                <div class="d-flex justify-content-center">
                    <div class="profile-section w-100 w-md-75 w-lg-50 mx-auto">
                        <div class="d-flex flex-column flex-md-row align-items-center gap-4">
                            <?php 
                                include './config.php';
                                $user_id = $_SESSION['user_id'];
                                $user_image = "SELECT profile_image FROM users WHERE id = $user_id";
                                $result = mysqli_query($connection,$user_image);
                                foreach ($result as $value) {
                                    if($value['profile_image'] == NULL){
                                        echo "<img src='https://cdn-icons-png.flaticon.com/256/3177/3177440.png' alt='Profile' class='profile-avatar mb-3 mb-md-0' id='profileImage' data-bs-toggle='modal' data-bs-target='#profileImgModal'>";
                                    }else{
                                        echo "<img src='./profile_images/{$value['profile_image']}' alt='Profile' class='profile-avatar mb-3 mb-md-0' id='profileImage' data-bs-toggle='modal' data-bs-target='#profileImgModal'>";
                                    }
                                }
                            ?>
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-3 mb-2">
                                    <span class="profile-username"><?php echo htmlspecialchars($_SESSION['ticket']); ?></span>
                                    <a href="#" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#editProfileModal">Edit Profile</a>
                                    <a href="#" class="btn btn-outline-secondary btn-sm">View Archive</a>
                                </div>
                                <div class="profile-stats d-flex gap-4 mb-2">
                                    <span><strong>0</strong> posts</span>
                                    <span><strong>777</strong> follower</span>
                                    <span><strong>90</strong> following</span>
                                </div>
                                <div class="profile-bio mb-2">
                                    <strong><?php echo htmlspecialchars($_SESSION['fullname']); ?></strong>
                                    <div class="text-muted">@<?php echo htmlspecialchars($_SESSION['ticket']); ?></div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center py-4">
                            <i class="bi bi-camera" style="font-size:2rem;"></i>
                            <h5 class="mt-2">Share photos</h5>
                            <p>When you share photos, they will appear on your profile.</p>
                            <a href="#" class="btn btn-primary btn-sm">Share your first photo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Image Modal -->
    <div class="modal fade" id="profileImgModal" tabindex="-1" aria-labelledby="profileImgModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form class="modal-content" method="post" enctype="multipart/form-data" action='./update-image.php'>
          <div class="modal-header">
            <h5 class="modal-title" id="profileImgModalLabel">Change Profile Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3 text-center">
              <?php 
                                include './config.php';
                                $user_id = $_SESSION['user_id'];
                                $user_image = "SELECT profile_image FROM users WHERE id = $user_id";
                                $result = mysqli_query($connection,$user_image);
                                foreach ($result as $value) {
                                    if($value['profile_image'] == NULL){
                                        echo "<img src='https://cdn-icons-png.flaticon.com/256/3177/3177440.png' alt='Profile' class='profile-avatar mb-3 mb-md-0' id='profileImage' data-bs-toggle='modal' data-bs-target='#profileImgModal'>";
                                    }else{
                                        echo "<img src='./profile_images/{$value['profile_image']}' alt='Profile' class='profile-avatar mb-3 mb-md-0' id='profileImage' data-bs-toggle='modal' data-bs-target='#profileImgModal'>";
                                    }
                                }
                            ?>
            </div>
            <div class="mb-3">
              <input class="form-control" type="file" name="image" id="profileImageInput" accept="image/*" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form class="modal-content" method="post" enctype="multipart/form-data" action="update-image.php">
          <div class="modal-header">
            <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3 text-center">
              <img id="editPreviewImg" src="https://cdn-icons-png.flaticon.com/256/3177/3177440.png" alt="Preview" class="rounded-circle" style="width:100px;height:100px;object-fit:cover;">
            </div>
            <div class="mb-3">
              <label for="editProfileImage" class="form-label">Profile Image</label>
              <input class="form-control" type="file" name="profile_image" id="editProfileImage" accept="image/*">
            </div>
            <div class="mb-3">
              <label for="editFullname" class="form-label">Full Name</label>
              <input type="text" class="form-control" name="fullname" id="editFullname" value="<?php echo htmlspecialchars($_SESSION['fullname']); ?>" required>
            </div>
            <div class="mb-3">
              <label for="editUsername" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" id="editUsername" value="<?php echo htmlspecialchars($_SESSION['ticket']); ?>" required>
            </div>
            <div class="mb-3">
              <label for="editPassword" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="editPassword" placeholder="Enter new password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
    <script>
      // Preview selected image for profile image modal
      document.getElementById('profileImageInput').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
          document.getElementById('previewImg').src = URL.createObjectURL(file);
        }
      });

      // Preview selected image for edit profile modal
      document.getElementById('editProfileImage').addEventListener('change', function(event) {
        const [file] = event.target.files;
        if (file) {
          document.getElementById('editPreviewImg').src = URL.createObjectURL(file);
        }
      });
    </script>
</body>
</html>