<div class="p_form">
    <span class=" h3 text-start text-success text-uppercase p-2 pt-3" >uPDATE PROFILE </span><br><br>

    <div class="form2">
        <form action="profile.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <!-- <p> Upload a clear picture (selfies are not allowed)</p> -->
            </div>
        </div>

        <div class="row">
            <div class="col"> 
                <label for="profile_img" class="form-label">UPLOAD PROFILE IMAGE: </label>
                <input type="file" name="ufile" id="profile_img" class="form-control" required><br><br>
            </div>
        </div>

        <div class="row">
            
            <div class="col-sm ">
                    <?php
                    // if($_SERVER('REQUEST_METHOD')=="POST")
                    // {
                    
                        if(isset($_POST['submit'])){
                            // $submit=$_POST['submit'];
                    $id= $_SESSION['id'];
                    // $id=8;
                    $target_dir = "user_files/";
                    $target_file = $target_dir.basename($_FILES["ufile"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["ufile"]["tmp_name"]);
                    if($check !== false) {
                        // echo "<b style='color:green;'>File is an image - " . $check["mime"] . ".</b><br>";
                        $uploadOk = 1;
                    } else {
                        echo "<b style='color:red;'>File is not an image.</b><br>";
                        $uploadOk = 0;
                    }
                    }

                    // Check if file already exists
                    if (file_exists($target_file)) {
                    $target_file=$target_file.time().".".$imageFileType;
                    $uploadOk = 1;
                    }

                    // Check file size
                    if ($_FILES["ufile"]["size"] > 2000000) {
                    echo "<b style='color:red;'> Your file is too large.</b><br>";
                    $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    echo "<b style='color:red;'> Only JPG, JPEG, PNG & GIF files are allowed.</b><br>";
                    $uploadOk = 0;
                    }

                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                    echo "<b style='color:red;'>Your file was not uploaded.</b><br>";
                    // if everything is ok, try to upload file
                    } else {
                    // unlink($_SESSION['profile_img']);
                    if (move_uploaded_file($_FILES["ufile"]["tmp_name"], $target_file)) {

                        include('connect.php');
                        $sql="UPDATE student Set profile_pic='$target_file' Where id='$id'";
                        if(mysqli_query($conn,$sql))
                        {
                        echo "<b style='color:green;'>The file ". htmlspecialchars( basename( $_FILES["ufile"]["name"])). " has been uploaded .</b><br>";
                        // $_SESSION['profile_pic']=$target_file;
                        // header('Location:admin.php');
                    }
                    } else {
                        echo "<b style='color:red;'> Sorry, there was an error uploading your file.</b>";
                        echo mysqli_error($conn);
                    }
                    }
                }
                    // }
                ?>
                    </div>

                        <div class="col-sm text-end ">
                            <input type="submit" value="Update" id="b" name="submit" class="btn btn-lg btn-primary">
                        </div>
                </div>
                
        </div>



        
        </form>

    </div>
</div>