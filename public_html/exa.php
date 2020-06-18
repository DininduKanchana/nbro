<?php
include_once('userHeader.php');
include_once('./database/AdminOperations.php');
?>

<body>
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
					<div class="section">
					    
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
					

					



		<!--
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
			</div>
			<?php include_once("footer.php") ?>
		</div>
	</div>
</body>

</html>