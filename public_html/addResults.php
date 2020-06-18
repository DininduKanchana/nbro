<?php
   include_once('header.php');
?>

    <body>
        <?php
            include_once('adminNavbar.php');
            include_once('./database/AdminOperations.php');
            include_once('./functions/functions.php');
            
            $target_dir = "uploads/results/";
            if(isset($_POST["submit"])) {
                $title = $_POST["title"];
                $year = $_POST["year"];
                $link = "";
                //checking if file need to be uploaded
                if ($_FILES["fileToUpload"]["name"]) {
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $newFileName = $target_dir . $year . "." . $imageFileType;
                    $link = $newFileName;
                    // Check if image file is a actual image or fake image
                   
                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 1000000) {
                        //echo "Sorry, your file is too large.";
                        echo getNotification("Sorry, your file is too large", "danger");
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if($imageFileType != "pdf") {
                        echo getNotification("Sorry, only PDF files are allowed", "danger");
                        //echo "Sorry, only PDF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $newFileName)) {
                            $uploadSuccess = 1;
                        }
                };
            }
                
                $result = addResult($title, $year, $link);
                if ($result && $uploadSuccess) {
                    echo getNotification("Result posted successfully!", "success");
                }else{
                    echo getNotification("Result posting failed!", "danger");;
                }
        } 
?>
            <div class="container">
                
                <form action="addResults.php" method="post" enctype="multipart/form-data">
                    &nbsp
                    <div>
                        <div class="form-group">
                            <label for="selectmonth">Month</label>
                            <select name="month" id="selectyear" style="width:auto;" class="form-control-inline selectWidth">
                                <?php for ($i = 2015; $i <= 2030; $i++) {?>
                                <option value=<?php echo $i ?>>
                                    <?php echo $i ?>
                                </option>
                                <?php  } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ResultTitle">Title</label>
                        <input required type="text" required class="form-control" id="title" name="title" placeholder="Enter title for the result">
                    </div>
                    &nbsp
                    <div class="form-group">
                        <label for="Upload">Upload file</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" required>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                </form>
            </div>

    </body>

    </html>