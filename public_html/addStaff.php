<?php
   include_once('header.php');
?>

    <body>
        <?php
            include_once('adminNavbar.php');
            include_once('./database/AdminOperations.php');
            include_once('./functions/functions.php');
            
            $target_dir = "uploads/staff/";
            if(isset($_POST["submit"])) {
                $name = $_POST["name"];
                $post = $_POST["post"];
                $telephone = $_POST["telephone"];
                $address = $_POST["address"];
                $image = "";

                //checking if file need to be uploaded
                if ($_FILES["fileToUpload"]["name"]) {
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $newFileName = $target_dir . getUniqueString() . "." . $imageFileType;
                    $image = $newFileName;
                    // Check if image file is a actual image or fake image
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        $uploadOk = 1;
                    } else {
                        $uploadOk = 0;
                    }

                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 500000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                        echo "Sorry, only JPG, JPEG & PNG  files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newFileName)) {
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                };
            }
                
                $result = addStaff($name, $post, $address, $image, $telephone);
                if ($result) {
                    echo getNotification("Staff added successfully!", "success");
                }else{
                    echo getNotification("Staff adding faild!", "danger");;
                }
                
            
        }
    ?>
            <div class="container">
                &nbsp
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Full Name">Full Name</label>
                        <input type="text" required class="form-control" id="name" name="name" placeholder="Enter name in full">
                    </div>
                    <div class="form-group">
                        <label for="Post">Post</label>
                        <input type="text" required class="form-control" id="post" name="post" placeholder="Enter designation">
                    </div>
                    <div class="form-group">
                        <label for="Full Name">Telephone Number</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Enter telephone number">
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" required class="form-control" id="address" name="address" placeholder="Enter the address">
                    </div>

                    <div class="form-group">
                        <label for="Upload">Upload image</label>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                </form>
            </div>

    </body>

    </html>