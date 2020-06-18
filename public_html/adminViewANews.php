<?php
   include_once('header.php');
?>
<body >
    <?php
        include_once('adminNavbar.php');
        include_once('./database/AdminOperations.php');
    ?>
    <div class="container">
    <?php 
        $result = getANews($_GET["id"]);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
        }
        $title = $row["title"];
        $text = $row["text"];
        $link = $row["link"];
        $date = $row["date"];
        mysqli_free_result($result);
    ?>
    <table class="table table-responsive-md  table-hover">
        <thead class="thead-light">
        </thead>
        <tbody>
            <tr>
            <th scope="row">Title</th>
            <td><?php echo $title ?></td>
            </tr>
            <tr>
            <th scope="row">Text</th>
            <td><?php echo $text ?></td>
            </tr>
            <tr>
            <th scope="row">Image</th>
            <td>
                <img width="100%" height="100%" border="0" onerror="this.src='./images/noImage.jpg'" src=<?php echo $link?> alt="image">
            </td>
            </tr>
            <tr>
            <th scope="row">Posted date</th>
            <td><?php echo $date ?></td>
            </tr>
        </tbody>
        </table>
    </div>  
  
</body>
</html>