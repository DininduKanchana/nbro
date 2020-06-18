<?php
   include_once('header.php');
?>

    <body>
        <?php
        include_once('adminNavbar.php');
        include_once('./database/AdminOperations.php');
        if(isset($_GET["id"])) {
            deleteStaff($_GET["id"]);
        }
    ?>
            <div class="container">
                <a href="/air/addStaff.php">
                    <button type="button" class="btn btn-outline-primary" style="float:right; margin-top:1%;">Add Staff</button>
                </a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Staff</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php
                    $result = getAllStaff();
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
    
                ?>
                            <tr>
                                <td>
                                    <b><?php  echo $row["name"]?></b>
                                    <br/>
                                    <?php  echo $row["post"]?>
                                    <br/>
                                    <?php  echo $row["telephone"]?>
                                    <br/>
                                    <?php  echo $row["address"]?>
                                </td>
                                <td>
                                    <img width="50%" height="50%" border="0" onerror="this.src='./images/noImage.jpg'" src=<?php  echo $row["image"]?> alt="image">
                                </td>
                                <td>
                                    <a href="adminEditStaff.php?id=<?php echo $row['id' ]?>">
                                        <button type="button" class="btn btn-outline-primary">Edit</button>
                                    </a>
                                    <a href="adminViewStaff.php?id=<?php echo $row['id' ]?>">
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </a>
                                    
                                </td>
                            </tr>
                            <?php }
                    }
                        mysqli_free_result($result);
                        ?>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

    </body>

    </html>