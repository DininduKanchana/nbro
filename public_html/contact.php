<?php 
    include_once("userHeader.php"); 
?>
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
      //Email information
      $admin_email = "sarath_nbro@yahoo.com";
      $fname = $_REQUEST['fname'];
      $lname = $_REQUEST['lname'];
      $city = $_REQUEST['city'];
      $email = $_REQUEST['email'];
      $subject = "website email";
      $comment = $_REQUEST['message'] . " From: " . $fname . " " . $lname . " City: " . $city;
      //send email
      mail($admin_email, "$subject", $comment, "From:" . $email);
      //Email response
  }
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
					
					
				
		
<h4>Contact Us</h4>
					
<p>
For further inquiries, help or suggestions. You may contact us through the following:
					
</p>
					

						
<img src="./images/icon/3.png" alt="..." class="img-thumbnail">
+94 112588946 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +94112502611<br><br>

	
<img src="./images/icon/2.png" alt="..." class="img-thumbnail">					
sarath_nbro@yahoo.com<br><br>
						
<img src="./images/icon/1.png" alt="..." class="img-thumbnail">
99/1, Jawatta Road  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Colombo 05,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sri Lanka.<br><br>
	

			
			
				
<h4>Send Us A Message</h4>	
					
					
					
					
					
<form method="post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="First name" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" name="lname" class="form-control" id="validationDefault02" placeholder="Last name" value="" required>
    </div></div>
    
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" name="city" class="form-control" id="validationDefault03" placeholder="City" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault04">email</label>
      <input type="text" name="email" class="form-control" id="validationDefault04" placeholder="email" required>
    </div></div>
    <div class="form-row">
    <div class="col-md-7 mb-5">
      <label for="validationDefault05">Message</label>
      <input type="text" name="message" class="form-control" id="validationDefault05" placeholder="Message" required>
    </div>
  </div>
  <div><button class="btn btn-primary" type="submit">send form</button></div>
</form>
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
	
	
	
	