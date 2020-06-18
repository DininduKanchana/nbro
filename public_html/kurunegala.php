<?php
include_once('userHeader.php');
include_once('./database/AdminOperations.php');
?>


<body>
    <style type="text/css">
           .green {
                background-color: rgb(0,153,102);
                
            }
        
            .yellow {
                background-color: rgb(255,222,51);
            }
        
            .red {
                background-color: rgb(204,0,51);
            }
        
            .purple {
                background-color: rgb(204,92,234);
            }
            
             .green-text {
                color: rgb(0,153,102);
            }
        
            .yellow-text {
                color: rgb(255,222,51);
            }
        
            .red-text {
                color: rgb(204,0,51);
            }
        
            .purple-text {
                color: rgb(204,92,234);
            }
        </style>
    
    
	<?php  include_once('navbar.php');?>
	<div class="body">

		<div>
			&nbsp
			<?php  include_once('carousel.html');?> &nbsp
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<?php include_once('newsSidebar.php'); ?>
				</div>
				<div class="col-md-8 col-sm-12">
					<div class="section" >
					    <h2><b>Ambient Air Quality Levels</b></h2><br>
					    
					    
					     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><b>Colombo 07</b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="kurunegala.php"><b>Kurunegala</b><span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0"><b>
      Date : <?php echo date("d/m/Y"); ?></b>
    </form>
  </div>
</nav>
					   
							     
					  <!--  <table class="table table-bordered">
							<thead>
							    
							    
								<tr>
									<th style='font-size: 25px' scope="col"><center> PM2.5</center> </th>
									<th style='font-size: 25px' scope="col"><center> PM10</center> </th>
										<th style='font-size: 25px' scope="col"><center> NO2</center> </th>
										<th style='font-size: 25px' scope="col"><center> SO2</center> </th>
								</tr>
								<tr style='height:130px'>
									<td style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(60,179,113);align="center"' scope="col"><center> 14</center> </td>
									<td style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(60,179,113)' scope="col"><center> 32</center> </td>
										<td style='text-align:center; width: 170px; font-size: 65px;background-color:rgb(60,179,113);style= text-align:center;' scope="col"><center> 24</center> </td>
										<td style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(60,179,113)' scope="col"><center> 20</center> </td>
										
										
										
								</tr>
								<tr style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(60,179,113);align="center"' scope="col"><center>Units : Micrograme per cubicmeter</center> 
								    
								</tr>
								
								</table>
					    
					    
					<br><br>
					
					<table class="table table-bordered">
							<thead>
							    
							    
								<tr>
									<th style='font-size: 25px' scope="col"><center> AQI</center> </th>
									<th style='font-size: 25px' scope="col"><center> Location</center> </th>
										
								</tr>
								<tr style='height:100px'>
										<td style='text-align:center; width: 150px; font-size: 65px;background-color: rgb(60,179,113)' scope="col"><center> 32</center> </td>
									<td style= 'text-align:center;width: 150px;'>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5601.50886137391!2d79.86976214840296!3d6.906753964326013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5cfd73d24a4e89d3!2sMeteorology+Department!5e0!3m2!1sen!2slk!4v1531548345662"  frameborder="0" style="border:0" ></iframe></td>
									</tr>
									</thead>
									</table> -->
										<br>
										<iframe src="https://www.airvisual.com/dashboard/monitor/tv?device_id=2osMM26wHTawBFs7x" height="390px" width="100%"></iframe>
								
										<br><br>
							<div>	<center>		
					    <img src="./images/aqi1.png" alt="..." class="img-thumbnail"><br><br>
					    </center>
					    </div>
                        <?php
                            $result = getAqData();
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "
                                    <div 
                                    style='width:430px;height:150px;background-color: rgb(233, 233, 233)'>
						                <table  style='border:0px solid black;valign:top;padding:0px;margin: 0px;border-spacing: 0px;width:100%;'>
    						                <tbody>
        						                <tr>
        						                ". $row["name"] ."
        						                </tr>   
        						                
    						                </tbody>
						                </table>
						<table  style=padding:0px;padding-top:3px;padding-bottom:8px;margin:0px;border-spacing:0px;border:0px solid black;width:100%;;'>
                        <tbody>
                            <tr>
                                <td style='padding-right:5px;'>
                                    <div id='aqiwgtvalue' class =". $row["color"] ." style= 'text-align:center; width: 133px; font-size: 80px;  1px 0px 1px;' >". $row["value"] ."</div>
                                    
                                </td>
                                <td style= nowrap='true' >
                                        <div style='font-size: 42px;  1px 0px 1px; color: rgb(0,0,0);'> ". $row["status"] ."</div>
                                        <div style='font-size:16px;font-weight:light;;'>Date: ". $row["date"] ."</div>
                                        <div style='font-size:16px;font-weight:light;;'>Updated : ". date("H:i:s",strtotime($row["updated_on"])) ."</div>
                                </td>
                        </tbody>
                        </table>
                        </div>
                        <br/>
                                    
                                    "
                                    ?>
                                    <!-- <tr>
                                        <td>
                                            <?php  echo $row["color"]?>
                                        </td>
                                        <td>
                                            <?php  echo $row["date"]?>
                                        </td>
                                        <td>
                                            <?php  echo $row["value"]?>
                                        </td>
                                        <td>
                                            <?php  echo $row["name"]?>
                                        </td>
                                    
                                    </tr> -->
                                    <?php }
                            }
                                mysqli_free_result($result);
            mysqli_next_result($GLOBALS['db']);
                        ?>
					 <!--   <div class="aqiwidget-table-x" style="width:400px;height:150px;background-color: rgb(233, 233, 233)">
		<table  style="border:0px solid black;valign:top;padding:0px;margin: 0px;border-spacing: 0px;width:100%;"><tbody><tr>PM2.5</tr><tr></tr></tbody></table>
<!--						<table  style="text-align:left;padding:0px;padding-top:3px;padding-bottom:8px;margin:0px;border-spacing:0px;border:0px solid black;width:100%;;">-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td class="aqiwgt-table-aqicell" style="padding-right:5px;">-->
<!--                                    <div class="aqivalue" id="aqiwgtvalue" style="font-size: 80px; background-color: rgb(255, 222, 51); color: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 1px 0px 1px;" title="Moderate">65</div>-->
<!--                                </td>-->
<!--                                <td style="width:50%;" nowrap="true" class="aqiwgt-table-aqiinfo">-->
<!--                                        <div style="font-size: 42px; text-shadow: rgb(0, 0, 0) 1px 0px 1px; color: rgb(255, 222, 51);">Moderate</div>-->
<!--                                        <div style="font-size:16px;font-weight:light;;">date</div>-->
<!--                                        <div style="font-size: 12px; padding-top: 5px; display: block;">Updated on Saturday 7:00: </div></td></tr></tbody></table> -->
                                        
                                    
<!--                        </div>-->
<!--                        <br>-->
					    
					    
<!--				<div class="aqiwidget-table-x" style="width:400px;height:150px;background-color: rgb(233, 233, 233)">-->
						
					
						    
<!--						<table style="border:0px solid black;valign:top;padding:0px;margin: 0px;border-spacing: 0px;width:100%;"><tbody><tr>PM10:</tr><tr></tr></tbody></table>-->
						
						
						
<!--						<table class="api" style="text-align:left;padding:0px;padding-top:3px;padding-bottom:8px;margin:0px;border-spacing:0px;border:0px solid black;width:100%;;">-->
<!--        <tbody>-->
<!--            <tr>-->
<!--                <td class="aqiwgt-table-aqicell" style="padding-right:5px;">-->
<!--                    <div class="aqivalue" id="aqiwgtvalue" style="font-size: 80px; background-color: rgb(204, 0, 51); color: rgb(255, 255, 255); text-shadow: rgb(255, 255, 255) 1px 0px 1px;" title="Moderate">65</div>-->
<!--                    </td>-->
<!--                    <td style="width:50%;" nowrap="true" class="aqiwgt-table-aqiinfo">-->
<!--                        <div style="font-size: 42px; text-shadow: rgb(0, 0, 0) 1px 0px 1px; color: rgb(255, 222, 51);">Unhealthy</div>-->
<!--                        <div style="font-size:16px;font-weight:light;;">date</div>-->
<!--                        <div style="font-size: 12px; padding-top: 5px; display: block;">Updated on Saturday 7:00 </div></td></tr></tbody></table> -->
                        
					
<!--</div>		<br>    -->
					    
					    
<!--					<div class="aqiwidget-table-x" style="width:400px;height:150px;background-color: rgb(233, 233, 233)">-->
						
					
						    
<!--						<table style="border:0px solid black;valign:top;padding:0px;margin: 0px;border-spacing: 0px;width:100%;"><tbody><tr>NO2</tr><tr></tr></tbody></table>-->
						
						
						
<!--						<table class="api" style="text-align:left;padding:0px;padding-top:3px;padding-bottom:8px;margin:0px;border-spacing:0px;border:0px solid black;width:100%;;">-->
<!--        <tbody>-->
<!--            <tr>-->
<!--                <td class="aqiwgt-table-aqicell" style="padding-right:5px;">-->
<!--                    <div class="aqivalue" id="aqiwgtvalue" style="font-size: 80px; background-color: rgb(0, 153, 102); color: rgb(255, 255, 255); text-shadow: rgb(255, 255, 255) 1px 0px 1px;" title="Moderate">65</div>-->
<!--                    </td>-->
<!--                    <td style="width:50%;" nowrap="true" class="aqiwgt-table-aqiinfo">-->
<!--                        <div style="font-size: 42px; text-shadow: rgb(0, 0, 0) 1px 0px 1px; color: rgb(255, 222, 51);">Good</div>-->
<!--                        <div style="font-size:16px;font-weight:light;;">date</div>-->
<!--                        <div style="font-size: 12px; padding-top: 5px; display: block;">Updated on Saturday 7:00 </div></td></tr></tbody></table> -->
                        
					
<!--</div>	    -->
<!--				<br>		<br>    -->
					    
					    
					   
					    
				</div></div>	

					



		<!--
		
			<h4>Ambient AQ Data Colombo 07</h4>
						
						<div class="aqiwidget-table-x" style="width:400px;height:150px">
						
					
						    
						<table style="border:0px solid black;valign:top;padding:0px;margin: 0px;border-spacing: 0px;width:100%;"><tbody><tr>High volume sampler:</tr><tr>PM10</tr></tbody></table>
						
						
						
						<table class="api" style="text-align:left;padding:0px;padding-top:3px;padding-bottom:8px;margin:0px;border-spacing:0px;border:0px solid black;width:100%;;">
        <tbody>
            <tr>
                <td class="aqiwgt-table-aqicell" style="padding-right:5px;">
                    <div class="aqivalue" id="aqiwgtvalue" style="font-size: 80px; background-color: rgb(255, 222, 51); color: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 1px 0px 1px;" title="Moderate">65</div>
                    </td>
                    <td style="width:50%;" nowrap="true" class="aqiwgt-table-aqiinfo">
                        <div style="font-size: 42px; text-shadow: rgb(0, 0, 0) 1px 0px 1px; color: rgb(255, 222, 51);">Moderate</div>
                        <div style="font-size:16px;font-weight:light;;">Updated on Saturday 7:00</div>
                        <div style="font-size: 12px; padding-top: 5px; display: block;">Temp.: </div></td></tr></tbody></table> 
                        
					
</div>
			
<div class="aqiwidget-table-x" style="width:400px;height:150px">
						
					
						    
						<table style="border:0px solid black;valign:top;padding:0px;margin: 0px;border-spacing: 0px;width:100%;"><tbody><tr>Sensor:</tr><tr>PM2.5</tr></tbody></table>
						
						
						
						<table class="api" style="text-align:left;padding:0px;padding-top:3px;padding-bottom:8px;margin:0px;border-spacing:0px;border:0px solid black;width:100%;;">
        <tbody>
            <tr>
                <td class="aqiwgt-table-aqicell" style="padding-right:5px;">
                    <div class="aqivalue" id="aqiwgtvalue" style="font-size: 80px; background-color: rgb(255, 222, 51); color: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 1px 0px 1px;" title="Moderate">65</div>
                    </td>
                    <td style="width:50%;" nowrap="true" class="aqiwgt-table-aqiinfo">
                        <div style="font-size: 42px; text-shadow: rgb(0, 0, 0) 1px 0px 1px; color: rgb(255, 222, 51);">Moderate</div>
                        <div style="font-size:16px;font-weight:light;;">Updated on Saturday 7:00</div>
                        <div style="font-size: 12px; padding-top: 5px; display: block;">Temp.: </div></td></tr></tbody></table> <br>
                       </div>
                        <div class="aqiwidget-table-x" style="width:400px;height:150px">
						
					
						    
						<table style="border:0px solid black;valign:top;padding:0px;margin: 0px;border-spacing: 0px;width:100%;"><tbody><tr>Sensor:</tr><tr>PM10</tr></tbody></table>
						
						
						
						<table class="api" style="text-align:left;padding:0px;padding-top:3px;padding-bottom:8px;margin:0px;border-spacing:0px;border:0px solid black;width:100%;;">
        <tbody>
            <tr>
                <td class="aqiwgt-table-aqicell" style="padding-right:5px;">
                    <div class="aqivalue" id="aqiwgtvalue" style="font-size: 80px; background-color: rgb(255, 222, 51); color: rgb(0, 0, 0); text-shadow: rgb(255, 255, 255) 1px 0px 1px;" title="Moderate">65</div>
                    </td>
                    <td style="width:50%;" nowrap="true" class="aqiwgt-table-aqiinfo">
                        <div style="font-size: 42px; text-shadow: rgb(0, 0, 0) 1px 0px 1px; color: rgb(255, 222, 51);">Moderate</div>
                        <div style="font-size:16px;font-weight:light;;">Updated on Saturday 7:00</div>
                        <div style="font-size: 12px; padding-top: 5px; display: block;">Temp.: </div></td></tr></tbody
</table></div>
<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5601.50886137391!2d79.86976214840296!3d6.906753964326013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5cfd73d24a4e89d3!2sMeteorology+Department!5e0!3m2!1sen!2slk!4v1531548345662" width="200" height="250" frameborder="0" style="border:0" ></iframe>
</div>
		
		
		
	</div>
					
		
		
		
		
		
		
		
		
		
						<div>		
                <table class="table table-bordered table-danger">
                    <thead>
                        <tr>
                           <th scope="col" table-danger  >Parameter</th>
									<th scope="col">Date</th>
									<th scope="col">Value</th>
									<th scope="col">Index</th>
                        </tr></thead>
                        
                        <?php
                    $result = getAqData();
                    if ($result) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $i++; 
    
                ?>
                            <tr>
                                <td>
                                    <?php  echo $row["parameter"]?>
                                </td>
                                <td>
                                    <?php  echo $row["date"]?>
                                </td>
                                <td>
                                    <?php  echo $row["value"]?>
                                </td>
                                <td>
                                    <?php  echo $row["aq_index"]?>
                                </td>
                              
                            </tr>
                            <?php }
                    }
                        mysqli_free_result($result);
    mysqli_next_result($GLOBALS['db']);
                        ?>
                    
                
                    </thead>
                </table></div> 
                

</div>
								
						<div>	
							<h4>Welcome</h4>
							<p>Quality of air we breathe is very important to us because air pollution is a worldwide environment concern with its profound effects on human health and environment. Major impacts of air pollution include global warming, ozone layer depletion and acid deposition. Air pollution causes damage to buildings and structures, agricultural crops, vegetation, forests and also results in reduced visibility etc. In addition, high air pollutant concentrations are sometimes stratified in a particular location for considerably long time duration and lead to disastrous situations that can cause widespread loss of human life and property damage. <br>

After recognizing its importance Environmental Division of NBRO started carrying out air quality monitoring and management programmes in Sri Lanka since 1989. The Division now possesses the expertise in air quality management and NBRO has grown to become one of the premier air quality research and consultancy institutions in the country. Results of our past studies are presented in publications on air quality
</p>
						</div>
						<div>
							<h2>Our services</h2><div>
						
						    <a href="SLaboratory testing service.php">Laboratory Testing Services</a><br>
							<a href="SUndergraduate Reaserch Program.php">Undergraduate Reaserch Program</a><br>
							<a href="SPostgraduate Reaserch Program.php">Postgraduate Reaserch Program</a><br>
							<a href="SBaseline Services.php">Baseline Services</a><br>
							<a href="SIndoor Air Quality Testing.php">Indoor Air Quality Testing</a><br>
							<a href="STechnical Guidence For Pollution Control.php">Technical Guidence For Pollution Control </a><br>-->
						

				
				<div class="col-md-2 col-sm-12">
				    
				   
					<?php include_once('resultSidebar.php'); ?>
				</div>
			</div></div>
</body>
			 <div class="footer">
			     
			     
			     	<div>	<h2><b>News</b></h2>
						<table class="table table-hover">
						   
						        
						        
						        
						        
									<tr>
									    
									    <th>
									        <h6><strong>An awareness and attitude building Programme </strong></h6>
									<a href="An awareness and attitude building Programme.php" >Read More</a><br>
						
									       <img src="images/nwe1.png" alt="">
									       
									    </th>
								
										<th>
										  
											
						
									<h6><strong>Strengthen the Air Quality Monitoring Capacity of NBRO</strong></h6>
								
									<a href="Strengthen the Air Quality Monitoring Capacity.php" >Read More</a><br>
									 <img src="images/nwe2.png" alt="">
								</th>
								<th>
									<h6><strong>Digital Air Quality Display Unit at Colombo 07</strong></h6>
							
									<a href="display.php">Read More</a><br>
									 <img src="images/nwe3.png" alt="">    
								    
								</th>
									</tr>
									    
									    
									        
									        
									  
									
						
						</table>
</div>		    
			
			<?php include_once("footer.php") ?>
		</div>
	

</html>