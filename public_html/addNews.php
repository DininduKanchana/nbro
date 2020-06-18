<?php
   include_once('header.php');
?>

    <body>
        <?php
            include_once('adminNavbar.php');
            include_once('./database/AdminOperations.php');
            include_once('./functions/functions.php');
            
            $target_dir = "uploads/";
            if(isset($_POST["submit"])) {
                $title = $_POST["title"];
                $newsText = $_POST["newsText"];
                $link = "";
                //checking if file need to be uploaded
                if ($_FILES["fileToUpload"]["name"]) {
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $newFileName = $target_dir . getUniqueString() . "." . $imageFileType;
                    $link = $newFileName;
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
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newFileName)) {
                            echo "<script type=\"text/javascript\">
                                $.notify({
                                    // options
                                    message: 'The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.' 
                                },{
                                    // settings
                                    type: 'success',
                                    allow_dismiss: true,
                                    placement: {
                                        from: 'bottom',
                                        align: 'right'
                                    },
                                    z_index: 1031,
                                    delay: 5000,
                                    timer: 1000,
                                    mouse_over: null,
                                    animate: {
                                        enter: 'animated fadeInDown',
                                        exit: 'animated fadeOutUp'
                                    },
                                });
                            </script>";
                           
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                };
            }
                
                $result = addNews($title, $newsText, $link);
                if ($result) {
                    echo getNotification("News posted successfully!", "success");
                }else{
                    echo getNotification("News posting failed!", "danger");;
                }
                
            
        }
    ?>
            <div class="container">
                &nbsp
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="NewsTitle">Title</label>
                        <input type="text" required class="form-control" id="title" name="title" placeholder="Enter title for the news">
                    </div>
                    <div class="form-group">
                        <label for="NewsText">Text</label>
                        <textarea class="form-control" required id="newsText" rows="3" name="newsText" placeholder="Enter the news"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Upload">Upload file</label>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"> Post now
                        </label>
                    </div>
                    <button name ="submit" type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                </form>
            </div>

    </body>

    </html>