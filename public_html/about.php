<?php
include_once('userHeader.php');
include_once('./database/AdminOperations.php');
?>

<body>
	<?php  include_once('navbar.php');?> &nbsp
	<div class="body">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<?php include_once('newsSidebar.php'); ?>
				</div>
				<div class="col-md-8 col-sm-12">
					<div><hr/>
						<h2>About us</h2>
						<p>Air Quality Studies Unit of The  Environmental Division of NBRO was established in January 1985, has grown to become one of the leading air quality research, consultancy and training services in the country. A team of experts specialized in various disciplines in the sector, involves in research, consultancy and in providing technical advice in the areas of air quality monitoring, assessment, planning, management. The unit is further strengthened to address the issues related to disaster risk Reduction, mitigation and responsibilities. The Key disciplines are Engineers, Chemists, Biologists, Geologists, GIS experts etc. The unit is supported with fully equipped laboratory to undertake analysis of wide range of air quality and environmental parameters in accordance with the national and international standards and guidelines. Our services are offered in the sector for testing services of baseline air quality & compliances, , modeling, consultancy & management services, training services and technical services for air pollution control. 
 <a href="about1.php"
	>
                                        Read more
                                    </a>
</p>
						<hr/>
					</div>
					
					<div>
						<h2>Our staff</h2>
						<table class="table table-hover">
							<thead>
								<tr>
									<th scope="col">Staff</th>
									<th scope="col">Image</th>
								</tr>
								<?php
                    $result = getAllStaff();
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
    
                ?>
									<tr>
										<td>
											<b>
											<?php  echo $row["name"]?>
											</b>
											<br/>
											<?php  echo $row["post"]?>
											<br/>
											<?php  echo $row["telephone"]?>
											<br/>
											<?php  echo $row["address"]?>
										</td>
										<td>
											<img width="65%" height="100%" border="0" onerror="this.src='./images/noImage.jpg'" src=<?php echo $row[ "image"]?> alt="image">
										</td>

									</tr>
									<?php }
                    }
						mysqli_free_result($result);
						mysqli_next_result($GLOBALS['db']);
                        ?>
							</thead>
							<tbody>
							</tbody>
						</table>

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