<?php
   include_once('header.php');
?>

    <body>
        <?php
            include_once('adminNavbar.php');
            include_once('./database/AdminOperations.php');
            include_once('./functions/functions.php');
            
            $target_dir = "./uploads/townResult/";
            if(isset($_POST["submit"])) {
                $townName = $_POST["townName"];
                $pdfName = $_POST["name"];
             
                $link = "";
                //checking if file need to be uploaded
                if ($_FILES["fileToUpload"]["name"]) {
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $newFileName = $target_dir . uniqid() . "." . $imageFileType;
                    $link = $newFileName;
                    // Check if image file is a actual image or fake image
                   
                    // Check file size
                    if ($_FILES["fileToUpload"]["size"] > 100000000) {
                        //echo "Sorry, your file is too large.";
                        echo getNotification("Sorry, your file is too large", "danger");
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if($imageFileType != "pdf") {
                        echo getNotification("Sorry, only pdf files are allowed", "danger");
                        echo "Sorry, only pdf files are allowed.";
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
                
                $result = addTownResult($townName, $link, $pdfName);
                if ($result && $uploadSuccess) {
                    echo getNotification("Result posted successfully!", "success");
                }else{
                    echo getNotification("Result posting failed!", "danger");;
                }
        } 
?>
            <div class="container">
                &nbsp
                <form action="addTownResult.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required class="form-control" id="name" name="name" placeholder="Enter pdf name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Town</label>
                        <select class="form-control" id="townName" name="townName">
                        <option value = "1">Colombo</option>
                          <option value = "2">Gampaha</option>
                          <option value = "3">Kalutara</option>
                          <option value = "4">Horana</option>
                          <option value = "5">Galle</option>
                          <option value = "6">Rathnapura</option>
                          <option value = "7">Kandy</option>
                          <option value = "8" >Kurunegala</option>
                          <option value = "9">Rathnapura</option>
                           <option value = "10">Puttalam</option>
                        </select>
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