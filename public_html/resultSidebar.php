<?php 
include_once('./database/AdminOperations.php');
$result = getAllResult();

include_once('./projectReportsSideBar.php');
?>

<div>
     Present Air Quality Data
    <div id="accordion" role="tablist">
        <?php if($result) { 
            while ($row = mysqli_fetch_assoc($result)) { 
            ?>
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <?php echo $row["year"] ?>
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
                        <a href=<?php echo $row[ "link"]?> download>
                            <?php echo $row["title"]?>
                        </a>
                    </i>
                </div>
            </div>
        </div>
        <?php }
    }
    mysqli_free_result($result);
    mysqli_next_result($GLOBALS['db']);
    ?>&nbsp
     <div>
    <table class="table table-hover">
        <thead>
            <tr>News</tr>
        </thead>
        <tbody>
            <?php
                    $result = getLimitedNews();
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>  
                <tr>
                    <td>
                        <?php  
                            echo "<a href=userViewNews.php?id=". $row['id' ] .">". $row['title'] ."</a>"
                            ?>
                    </td>
                    <td>
                        <a href="viewNews.php?id=<?php echo $row['id' ]?>">
                        </a>
                    </td>
                </tr>
                <?php }
                    }
                    mysqli_free_result($result);
                    mysqli_next_result($GLOBALS['db']);
                        ?>
        </tbody>
    </table>
</div>
    </div>
</div>
</div>