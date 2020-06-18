<?php include_once("userHeader.php"); 
include('resources/UberGallery.php');
?>

<body>

    
    
    <?php  include_once('navbar.php');?>
    &nbsp
	<div class="body">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<?php include_once('newsSidebar.php'); ?>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="section">
					    <?php 
                         // Initialize the UberGallery object
                            $gallery = new UberGallery();
                        
                            // Initialize the gallery array
                            $galleryArray = $gallery->readImageDirectory('gallery-images');
                        
                            // Define theme path
                            if (!defined('THEMEPATH')) {
                                define('THEMEPATH', $gallery->getThemePath());
                            }
                        
                            // Set path to theme index
                            $themeIndex = $gallery->getThemePath(true) . '/index.php';
                        
                            // Initialize the theme
                            if (file_exists($themeIndex)) {
                                include($themeIndex);
                            } else {
                                die('ERROR: Failed to initialize theme');
                            } 
                        ?>

					</div>

				</div>
				<div class="col-md-2 col-sm-12">
					<?php include_once('resultSidebar.php'); ?>
				</div>
			</div>
		</div>

		<div class="home">
		</div>
    </div>
    <div>
        <?php include_once('footer.php'); ?>
    </div>

</body>

</html>