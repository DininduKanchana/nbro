<?php
   include_once('header.php');
?>

    <body>
        <?php
        include_once('adminNavbar.php');
        include_once('./database/AdminOperations.php');
        if(isset($_GET["id"])) {
            deleteAqData($_GET["id"]);
        }

    ?>
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Value</th>
                            <th scope="col">Date</th>
                            <th scope="col">Color</th>
                            <th scope="col">Updated on</th>
                            <th scope="col">Action</th>
                        </tr>
                        <?php
                    $result = getAqData();
                    if ($result) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $i++; 
    
                ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $i ?>
                                </th>
                                <td>
                                    <?php  echo $row["name"]?>
                                </td>
                                <td>
                                    <?php  echo $row["status"]?>
                                </td>
                                <td>
                                    <?php  echo $row["value"]?>
                                </td>
                                <td>
                                    <?php  echo $row["date"]?>
                                </td>
                                <td>
                                    <?php  echo $row["color"]?>
                                </td>
                                <td>
                                    <?php  echo $row["updated_on"]?>
                                </td>
                                <td>
                                     <a href="adminAqData.php?id=<?php echo $row['id']?>">
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