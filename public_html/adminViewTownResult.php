<?php
   include_once('header.php');
?>

    <body>
        <?php
        include_once('adminNavbar.php');
        include_once('./database/AdminOperations.php');
        if(isset($_GET["id"])) {
            deleteTownResult($_GET["id"]);
        }
    ?>
            <div class="container">
                <a href="/addTownResult.php">
                    <button type="button" class="btn btn-outline-primary" style="float:right; margin-top:1%;">Add Town Result</button>
                </a>
                <table class="table table-hover">
                    <thead>
                    </thead>
                    <tbody>
                        <?php
                    $result = getAllTownResult();
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
                                    <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
                                        <a href=<?php echo $row["link"]?> download><?php echo $row["title"]?></a>
                                    </i>
                                </td>
                                <td>
                                    <a href="adminViewTownResult.php?id=<?php echo $row['id']?>">
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