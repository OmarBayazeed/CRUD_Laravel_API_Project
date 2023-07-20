<?php 

include "assets/include/header.php";

 ?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card rounded-0 mt-3 border-primary">
                <div class="card-header border-primary">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="#profile" class="nav-link active font-weight-bold" data-toggle="tab">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#editProfile" class="nav-link font-weight-bold" data-toggle="tab">Edit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#changePass" class="nav-link font-weight-bold" data-toggle="tab">Change Password</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">

                        <!-- profile tab content -->
                        <div class="tab-pane active container" id="profile">
                            <div class="card-deck">
                                <div class="card border-primary">
                                    <div class="card-header bg-primary text-light text-center lead">
                                        User Id : <?= $cid ?>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Name :</b><?= $cname ?></p>

                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Email :</b><?= $current_email ?></p>

                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Gender :</b><?= $cgender ?></p>

                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Date Of Birth :</b><?= $cdob ?></p>

                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Phone :</b><?= $cphone ?></p>

                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Registered on :</b><?= $created ?></p>

                                        <p class="card-text p-2 m-1 rounded" style="border: 1px solid #0275d8;"><b>Verified :</b><?= $verified ?>

                                        <?php if ($verified == 'Not Verified!'): ?>

                                            <a href="#" id="veify-email" class="float-right">Verify Now</a>

                                        <?php endif ?>    

                                        </p>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="card border-primary align-self-center">
                                    <?php if (!$cphoto): ?>
                                        <img src="assets/img/avatar.jpg" class="img-thumbnail img-fluid" width="408px">
                                    <?php else: ?> 

                                        <img class="img-fluid img-thumbnail" width="408px" src="<?= 'assets/php/'.$cphoto.''  ?>"> 
                                    <?php endif ?>       
                                </div>
                            </div>
                        </div>

                        <!-- end profile tab content -->




                        <!-- edit profile tab content -->

                        <div class="tab-pane container" id="editProfile">
                            <div class="card-deck">
                                <div class="card border-danger align-self-center">
                                    <?php if (!$cphoto): ?>
                                        <img src="assets/img/avatar.jpg" class="img-thumbnail img-fluid" width="408px">
                                    <?php else: ?> 

                                        <img class="img-fluid img-thumbnail" width="408px" src="<?= 'assets/php/'.$cphoto.''  ?>"> 
                                    <?php endif ?> 
                                </div>
                                <div class="card border-danger">
                                    <form action="" method="post" class="px-3 mt-2" enctype="multipart/form-data" id="edit-profile-form">
                                        <input type="hidden" name="oldimage" value="<?= $cphoto ?>">
                                        <div class="form-group m-0">
                                            <label for="profilePhoto" class="m-1">Upload Profile Image
                                            </label>
                                            <input type="file" name="image" id="profilePhoto">
                                        </div>
                                        <div class="form-group m-0">
                                            <label for="name" class="m-1">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="<?= $cname; ?>">
                                        </div>
                                        <div class="form-group m-0">
                                            <label for="gender" class="m-1">Gender</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="" disabled <?php if ($cgender == null) {echo "selected";} ?>>select</option>
                                                <option value="Male" <?php if ($cgender == 'male') {echo "selected";} ?>>Male</option>
                                                <option value="Female" <?php if ($cgender == 'female') {echo "selected";} ?>>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group m-0">
                                            <label for="dob" class="m-1">Date Of Birth</label>
                                            <input type="date" name="dob" id="dob" class="form-control" value="<?= $cdob; ?>">
                                        </div>
                                        <div class="form-group m-0">
                                            <label for="phone" class="m-1">Phone</label>
                                            <input type="tel" name="phone" id="phone" class="form-control" value="<?= $cphone; ?>" placeholder="phone">
                                        </div>
                                        <div class="form-group m-2">
                                            <input type="submit" name="profile_update" class="btn btn-danger btn-block" id="profileUpdateBtn" value="Update Profile">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>            
                        <!-- end edit profile tab content -->

                        <!-- Change Password tab content -->

                        <div class="tab-pane container fade" id="changePass">
                            <div class="card-deck">
                                <div class="card border-success">
                                    <div class="card-header bg-success text-white text-center lead">
                                        Change Password
                                    </div>
                                    <form action="" method="post" class="px-3 mt-2" id="change-pass-form">
                                        <div class="form-group">
                                            <label for="curpass">Enter Your Current Password</label>
                                            <input type="password" name="curpass" id="curpass" placeholder="Current Password" class="form-control form-control-lg">
                                        </div>
                                        <div class="form-group">
                                            <label for="newpass">Enter Your New Password</label>
                                            <input type="password" name="newpass" id="newpass" placeholder="New Password" class="form-control form-control-lg">
                                        </div>
                                        <div class="form-group">
                                            <label for="cnewpass">Confirm Your New Password</label>
                                            <input type="password" name="cnewpass" id="cnewpass" placeholder="Confirm Password" class="form-control form-control-lg">
                                        </div>
                                        <div class="form-group m-2">
                                            <input type="submit" name="changepass" class="btn btn-success btn-block btn-lg" id="changePassBtn" value="Change Password">
                                        </div>
                                    </form>
                                </div>
                                <div class="card border-success align-self-center">
                                    <img src="assets/img/password.webp" class="img-thumbnail img-fluid" width="408px">
                                </div>
                            </div>
                        </div>

                        <!-- end Change Password tab content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php 

include "assets/include/footer.php";

 ?>

 <script>
    
    $(document).ready(function () {
        


        // profile update ajax request

        $('#edit-profile-form').submit(function(e) {
           e.preventDefault();

           $.ajax({
            url: 'assets/php/process.php',
            method: 'post',
            processData: false,
            contentType: false,
            cache: false,
            data: new FormData(this),
            success:function(response){
                location.reload();
            }
           }); 
        });



        // profile change pass ajax request

        $("#changePassBtn").click(function(e){
            if($("#change-pass-form")[0].checkValidity()){
                e.preventDefault();
                
            }
        })





    });



 </script>

 </body>
</html>