<?php
   include_once('header.php');
?>

    <body>
        <?php
        include_once('adminNavbar.php');
    ?>
            <div class="container">
                &nbsp;
                <table class="table">
                    <thead>

                    </thead>
                    <tbody>
                        
                       <tr>
                            <td>
                                Daily Data
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="/adminAqData.php">
                                    <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px;">View Aq Data</button>
                                </a>
                            </td>
                            <td>
                                <a href="/addonline.php">
                                    <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px;">Add</button>
                                </a>
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                News
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="adminNews.php">
                                    <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px;">View news</button>
                                </a>
                            </td>
                            <td>
                                <a href="/addNews.php">
                                    <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px;">Post news</button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-success" style="width: 120px; height:120px; ">Edit news</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Results
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <a href="adminViewResults.php">
                                <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px; ">View Results</button>
                            </td>
                            <td>
                            <a href="addResults.php">
                                <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px; ">Post Results</button>
                            </td>
                            <td>
                                <a href="#">
                                <button type="button" class="btn btn-outline-success" style="width: 120px; height:120px; ">Delete Result</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Staff
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="adminViewStaff.php">
                                    <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px; ">View Staff</button>
                                </a>
                            </td>
                            <td>
                                <a href="addStaff.php">
                                    <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px; ">Add Staff</button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-success" style="width: 120px; height:120px; ">Edit Staff</button>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                Gallery
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="adminViewGallery.php">
                                    <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px; ">View Gallery</button>
                                </a>
                            </td>
                            <td>
                                <a href="addPhoto.php">
                                    <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px; ">Add to gallery</button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-success" style="width: 120px; height:120px; ">Edit Gallery</button>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                Town Results
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="adminViewTownResult.php">
                                    <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px; ">View</button>
                                </a>
                            </td>
                            <td>
                                <a href="addTownResult.php">
                                    <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px; ">Add</button>
                                </a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                Project Reports
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="adminViewProjectReports.php">
                                    <button type="button" class="btn btn-outline-primary" style="width: 120px; height:120px; ">View</button>
                                </a>
                            </td>
                            <td>
                                <a href="addProjectReports.php">
                                    <button type="button" class="btn btn-outline-secondary" style="width: 120px; height:120px; ">Add</button>
                                </a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
    </body>

    </html>