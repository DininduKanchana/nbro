<?php
   include_once('header.php');
?>

    <body>
        <?php
            include_once('adminNavbar.php');
            include_once('./database/AdminOperations.php');
            include_once('./functions/functions.php');
            
            if(isset($_POST["submit"])) {
                $status = $_POST["status"];
                $date = $_POST["date"];
                $value = $_POST["value"];
                $name = $_POST["name"];
                $color = $_POST["color"];
                
                $result = addAqData($status, $date, $value, $name, $color);
                if ($result) {
                    echo getNotification("Data added successfully!", "success");
                }else{
                    echo getNotification("Data adding faild!", "danger");;
                }
                
            
        }
    ?>
            <div class="container">
                &nbsp
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required class="form-control" id="name" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        
                        
                        <label for="status">Status</label>
                        <select name="status" style="width:150px;">
                          <option value="good">Good</option>
                          <option value="modarate">Modarate</option>
                          <option value="unhealthy">Unhealthy</option>
                          <option value="very unhealthy">Very Unhealthy</option>
                        </select>
                   
                        
                    </div>
                    <div class="form-group">
                        <label for="value">Value</label>
                        <input type="text" class="form-control" id="value" name="value" placeholder="Enter value">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" required class="form-control" id="date" name="date" placeholder="Enter date"
                        >
                    </div>
                    <div class="form-group">
                        <label for="color">color</label>
                        <select name="color" style="width:150px;">
                
                          <option value="green" style="background-color: rgb(0,153,102); padding: 10px; border: 1px solid green;">
                              Green
                          </option>
                          </div>
                          <option value="yellow" style="background-color: rgb(255,222,51); padding: 10px; border: 1px solid green;">
                              Yellow
                          </option>
                          <option value="red" style="background-color: rgb(204,0,51); padding: 10px; border: 1px solid green;">
                              Red
                          </option>
                           <option value="purple" style="background-color: rgb(204,92,234); padding: 10px; border: 1px solid green;">
                              Purple
                          </option>
                        </select>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                </form>
            </div>

    </body>

    </html>