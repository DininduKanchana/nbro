<?php
   include_once('header.php');
?>

    <body>
        <?php
        include_once('adminNavbar.php');
        include_once('./database/AdminOperations.php');
        if(isset($_GET["id"])) {
            deletePhoto($_GET["id"]);
        }
    ?>
            <div class="container">
                <a href="/addPhoto.php">
                    <button type="button" class="btn btn-outline-primary" style="float:right; margin-top:1%;">Add Photo</button>
                </a>
                <table class="table table-hover">
                    <tbody>
                        <?php
                    $result = getAllPhotos();
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td>
                                    <b>
                                        <?php  echo $row["title"]?>
                                    </b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                     <img width="100%" height="100%" border="0" onerror="this.src='./images/noImage.jpg'" src=<?php  echo $row["link"] ?> alt="image">
                                </td>
                                <td>
                                    <a href="adminViewGallery.php?id=<?php echo $row['id']?>">
                                        <button type="button" class="btn btn-outline-danger">Delete</button>
                                    </a>
                                </td>

                            </tr>
                            <?php }
                    }
                        mysqli_free_result($result);
                        ?>
                    </tbody>
                </table>
            </div>

    </body>

    </html>