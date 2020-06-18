<?php include_once("userHeader.php") ?>
<?php
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
					<div class="section">
				        <h4>RMV Project</h4>
				        <?php
                            $result = getAllTownResult();
                            
                        ?>
				            <p>
    				            Presently, Vehicular Emission Testing Program (VET) is the major on-going activity in air quality
                                management in Sri Lanka. As one of the activity identified under the VET programme is Air Quality
                                Monitoring in urban areas to assess the exiting levels and to analysed pollution trends and of
                                the variations and to evaluate the effectiveness of the management activities related to ambient
                                air pollution. The Air Quality Status Monitoring Program under the VET programme was started
                                in 2012 at major cities (Colombo, Gampaha, Horana, Kaluthara, Rathnapura and Galle) in Sri Lanka
                                by using passive air quality monitoring techniques. The program was continued to collect monthly
                                average concentrations of SO2 and NO2 data till end of the year 2014 including the Kandy city
                                in addition to above cities.
                            </p>
                            <p> 
                                The objective of the 2016 program is to obtain continuous ambient air quality database at above
                                selected major urban areas where the monitoring program has been already implemented while data
                                validation by comparing automated air quality sampling technique. Total of 77 sampling points
                                will be covered in the existing monitoring program and additional 7 points will be introduced
                                in year 2016. In the monitoring program the Sulphur Dioxide (SO2) and Nitrogen Dioxide (NO2)
                                levels in ambient air will be monitored monthly,
                            </p>
                            <button class="btn btn-primary btn-lg btn-block"
                                type="button" data-toggle="collapse"
                                data-target="#collapseExample"
                                aria-expanded="false"
                                style="height: 40px"
                                aria-controls="collapseExample">
							Number of monitoring locations
						    </button>
					
					    <div class="collapse" id="collapseExample">
						    <div class="card card-block ">
                            <table class="table ">
                            <thead>
                                <tr>
                                    <th scope="col"  style="width: 25%; ">Urban Area</th>
                                    <th scope="col"  style="width: 25%; ">Location Number</th>
                                    <th scope="col"  style="width: 25%; ">Urban Area</th>
                                    <th scope="col"  style="width: 25%; ">Location Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Colombo</td>
                                    <td>19</td>
                                    <td>Rathnapura</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>Gampaha</td>
                                    <td>11</td>
                                    <td>Kandy</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td>Horana</td>
                                    <td>5</td>
                                    <td>Kurunegala</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>Kaluthara</td>
                                    <td>5</td>
                                    <td>Anuradhapura</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Galle</td>
                                    <td>6</td>
                                    <td>Chilaw</td>
                                    <td>10</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    
				    </div>
				       
				</div>
				&nbsp
				 <button class="btn btn-primary btn-lg btn-block"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapseExample1"
                    aria-expanded="false"
                    aria-controls="collapseExample">
                    Outcomes
                </button>
                <div class="collapse" id="collapseExample1">
                    <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample11"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Colombo
		                </button>
		            </div>
    
                    <div class="collapse" id="collapseExample11">
    		            <div class="card card-block ">
    		                Colombo, the capital city of Western province as well as the commercial capital of Sri Lanka is one of the coastal cities with deteriorated air quality. Several research studies have found that pollution levels in Colombo air is being increased during the last few decades with the increase of vehicle density, industries, domestic and commercial activities in and around the city. <br>

Air quality exposure levels with respect to NO2 and SO2 in Colombo Urban area was started in 2001 by National Building Research Organisation at 16 Location within the Colombo Municipal Council and surrounding areas. The monitoring program was then extended to 19 locations with the financial assistant of VET found in 2012 to measure monthly average NO2 and SO2 level. The measuring results show that pollutant levels are comparatively high in high traffic congested areas than in surrounding areas. The annual average pollutant levels have exceeded the recommended WHO guideline values for SO2 and NO2 within the city. Although, monitoring data from 2012 to 2014 has shown a drop in air pollution level, the trend appeared to reverse and increase slightly in 2015. <br><br>

    		                <h4>Monthly results of colombo</h4>Monthly average NO2 and SO2 exposure levels at each measuring location within Colombo urban area is summarized below. However some of data were missing due to the missing of passive sampler due to unavoidable situations such as personal or urban council activities, attacking of animals or birds and some climatic conditions such as rain and flood etc.<br><br>
    		                <?php
    		                if ($result) {
    		                   
                                while ($row = mysqli_fetch_assoc($result)) {
                                     if($row["town"] == "1") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			         <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample12"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Gampaha
		                </button>
		            </div>
    
                    <div class="collapse" id="collapseExample12">
    		            <div class="card card-block ">
    		                Gampaha is a major city in Gampaha District, Western Province, Sri Lanka. It is situated to the north-east of the capital Colombo. It is the sixth largest urban area in Western Province after Colombo, Negombo, Kalutara, Panadura and Avissawella. Gampaha is also the second largest urban centre in Gampaha district, after Negombo. According to the facts of central index prepared by urban development authority (UDA), Gampaha develops around 95% although the population is less than in Negombo. Gampaha has a land area of 25.8 hectares and is home to the offices of 75 government institutions.<br>

Air quality exposure levels with respect to NO2 and SO2 in Gampaha Urban area was started in 2012 at 11 Locations within the Gampaha Municipal Council and surrounding areas with the financial assistant of VET found. <br><table class="table">
  
  <thead>
    <tr>
      <th scope="col"  style="width: 25%;">Urban Area</th>
      <th scope="col"  style="width: 25%;">Location Number</th>
      <th scope="col"  style="width: 25%;">Urban Area</th>
      <th scope="col"  style="width: 25%;">Location Number</th>
      </tr>
  </thead>
</tr>
<tr>
<td> Kirindiwita </td>
<td> GM 1</td>
<td> Pahalagama </td>
<td> GM 2</td>
</tr>
<tr>
<td> Asgiriya </td>
<td> GM 3</td>
<td> Oruthota Road </td>
<td> GM 4</td>
</tr>
<tr>
<td> Oruthota </td>
<td> GM 5</td>
<td>Gampaha Railway </td>
<td> GM 6</td>
</tr>
<tr><td>

Gampaha Police St.
 </td>
<td> GM 7</td>
<td> Vilabada Road
 </td>
<td> GM 8</td></tr>
<tr>
<td> Gampaha Hospital
 </td>
<td> GM 9</td>
<td> Miriswaththa
</td>
<td> GM 10</td></tr>
<tr>


<td> Aluthgama </td>
<td>GM 11</td>
<td> </td>
<td></td></tr>
<tr>



</tbody>
</table><br>



    		                <h4>Monthly results of Gampaha</h4>
    		                Monthly average NO2 and SO2 exposure levels at each measuring location within Gampaha urban area are summarised below respectively. However some of data were missing due to the missing of passive sampler due to unavoidable situations such as personal or urban council activities, attacking of animals or birds and some climatic conditions such as rain and flood etc.<br>
    		                
    		                <br>
    		                <?php
    		                if ($result) {
    		                    
    		                   
    		                    mysqli_data_seek($result, 0);
    		              
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if($row["town"] == "2") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			         <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample13"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Kalutara
		                </button>
		            </div>
    
                    <div class="collapse " id="collapseExample13">
    		            <div class="card card-block ">
    		                Kalutara is a largest city in Kalutara District, Western Province, Sri Lanka. It is also the administrative capital of Kalutara District. It is located approximately 40 km (25 mi) south of the capital Colombo.<br>

Air quality exposure levels with respect to NO2 and SO2 in Kalutara Urban area was started in 2012 at 5 Locations within the Kalutara Municipal Council and surrounding areas with the financial assistant of VET found. 
<br>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col"  style="width: 25%;">Urban Area</th>
      <th scope="col"  style="width: 25%;">Location Number</th>
      <th scope="col"  style="width: 25%;">Urban Area</th>
      <th scope="col"  style="width: 25%;">Location Number</th>
      </tr>
  </thead>
</tr>
<tr>
<td>Kaluthara bodiya Car Park
</td>
<td> KL 1</td>
<td> Palathota Junction
</td>
<td> KL 2</td>
</tr>
<tr>
<td> Nagoda Junction
</td>
<td> KL 3</td>
<td> Katukurunda Junction
</td>
<td> KL 4</td>
</tr>
<tr>
<td> Kaluthara urban council </td>
<td> KL 5</td>
<td> </td>
<td> </td>
</tr>
<tr>




</tbody>
</table>


<br>


    		                <h4>Monthly results of kalutara</h4>
    		                Monthly average NO2 and SO2 exposure levels at each measuring location within Kalutara urban area are summarized below respectively.<br> <br>
    		                <?php
    		                if ($result) {
    		                   
    		                    mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    
                                     if($row["town"] == "3") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			         <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample14"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Horana
		                </button>
		            </div>
    
                    <div class="collapse" id="collapseExample14">
    		            <div class="card card-block ">
    		                Horana is a town in Kalutara District, in the Western Province of Sri Lanka. It is on the road from panadura to Rathnapura. It is located in 42 km away from Colombo and 18 km away from Panadura. <br>
Air quality exposure levels with respect to NO2 and SO2 in Horana Urban area was started in 2012 at 5 Locations within the Horana Urban area and surrounding areas with the financial assistant of VET found. <br>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col"  style="width: 25%;">Urban Area</th>
      <th scope="col"  style="width: 25%;">Location Number</th>
      <th scope="col"  style="width: 25%;">Urban Area</th>
      <th scope="col"  style="width: 25%;">Location Number</th>
      </tr>
  </thead>
</tr>
<tr>
<td>Horana Town
</td>
<td> HR 1</td>
<td> Rathnapura Road

</td>
<td> HR 2</td>
</tr>
<tr>
<td> Horana Urban Council

</td>
<td> HR 3</td>
<td> Sri Somananda Road

</td>
<td> HR 4</td>
</tr>
<tr>
<td> Sri Devananda Road
 </td>
<td> HR 5</td>
<td> </td>
<td> </td>
</tr>
<tr>




</tbody>
</table>

<br>


    		                <h4>Monthly results of Horana</h4>
    		                Monthly average NO2 and SO2 exposure levels at each measuring location within Horana urban area 2016 is summarised in below. <br><br>

    		                
    		                <?php
    		                if ($result) {
    		                   
    		                    mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                     if($row["town"] == "4") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			        <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample15"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Galle
		                </button>
		            </div>
    
                    <div class="collapse" id="collapseExample15">
    		            <div class="card card-block ">
    		                The Galle city is the capital city of Southern Province located in costal belt of Sri Lanka. The city has a World Heritage Site to its name because there are several historical, archaeological and architectural heritage monuments located within the city and those are predominantly responsible for its popularity with tourists. The city area is limited to about 18.7 Km2 and relatively high amount of vehicles operate in the city. The continuous air quality monitoring in the city show that the pollutant levels are relatively high within the city area.
<br>

Air quality exposure levels with respect to NO2 and SO2 in Galle Urban area was started in 2012 at 6 Locations within the Galle Urban area and surrounding areas with the financial assistant of VET found. 
<br>
<table class="table">
  
  <thead>
    <tr>
      <th scope="col"  style="width: 25%;">Urban Area</th>
      <th scope="col"  style="width: 25%;">Location Number</th>
      <th scope="col"  style="width: 25%;">Urban Area</th>
      <th scope="col"  style="width: 25%;">Location Number</th>
      </tr>
  </thead>
</tr>
<tr>
<td> Richmend Hill Road
</td>
<td> GL 1</td>
<td> Havlock Place
</td>
<td> GL 2</td>
</tr>
<tr>
<td> Galle Bus Stand
</td>
<td> GL 3</td>
<td> Galle Fort
</td>
<td> GL 4</td>
</tr>
<tr>
<td> Talbort Town
</td>
<td> GL 5</td>
<td> Bandaranayaka Pedesa </td>
<td> GL 6</td>
</tr>


</tbody>
</table><br>





    		                <h4>Monthly results of Galle</h4>
    		                
    		                Monthly average NO2 and SO2 exposure levels at each measuring location within Galle urban area is summarised below. However some of data were missing due to the missing of passive sampler due to unavoidable situations such as personal or urban council activities, attacking of animals or birds and some climatic conditions such as rain and flood etc. <br><br>
    		                <?php
    		                if ($result) {
    		                   
    		                    mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                     if($row["town"] == "5") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			         <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample16"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Rathnapura
		                </button>
		            </div>
    
                    <div class="collapse " id="collapseExample16">
    		            <div class="card card-block ">
    		                Data about rathnapura
    		                <h4>Monthly results of rathnapura</h4>
    		                <?php
    		                if ($result) {
    		                   
    		                    mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                     if($row["town"] == "6") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			         <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample17"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Kandy
		                </button>
		            </div>
    
                    <div class="collapse" id="collapseExample17">
    		            <div class="card card-block ">
    		                Data about kandy
    		                <h4>Monthly results of kandy</h4>
    		                <?php
    		                if ($result) {
    		                   
    		                    mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                     if($row["town"] == "7") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			          <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample18"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Kurunegala
		                </button>
		            </div>
    
                    <div class="collapse" id="collapseExample18">
    		            <div class="card card-block ">
    		                Data about kurunegala
    		                <h4>Monthly results of kurunegala</h4>
    		                <?php
    		                if ($result) {
    		                   
    		                    mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                     if($row["town"] == "8") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			         <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample19"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Anuradhapura
		                </button>
		            </div>
    
                    <div class="collapse" id="collapseExample19">
    		            <div class="card card-block ">
    		                Data about Anuradhapura
    		                <h4>Monthly results of Anuradhapura</h4>
    		                .<?php
    		                if ($result) {
    		                   
    		                    mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                     if($row["town"] == "9") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			        
			        <div class="card card-block">
                        <button class="btn btn-secondary btn-lg btn-block"
                        type="button" data-toggle="collapse"
                        data-target="#collapseExample20"
                        aria-expanded="false"
		                aria-controls="collapseExample">
			                Puttalam
		                </button>
		            </div>
    
                    <div class="collapse" id="collapseExample19">
    		            <div class="card card-block ">
    		                Data about puttalam
    		                <h4>Monthly results of Puttalam</h4>
    		                <?php
    		                if ($result) {
    		                   
    		                    mysqli_data_seek($result, 0);
                                while ($row = mysqli_fetch_assoc($result)) {
                                     if($row["town"] == "10") {
                                        
                                        ?> 
                                        <i class="fa fa-file-pdf-o" style="font-size:18px;color:red">
							                <a href=<?php echo $row["link"] ?> download><?php echo $row["title"] ?></a>
						                </i>&nbsp 
                                         
                                        <?php
                                     }
                                };
                            }
    		                ?>
    		            </div>
			        </div>
			    </div>
		    </div>
                
                <?php
                    mysqli_next_result($GLOBALS['db']);
                ?>
				<div class="col-md-2 col-sm-12 ">
					<?php include_once('resultSidebar.php'); ?>
				</div>
		</div>
    </div>
    <div>
        <?php include_once('footer.php'); ?>
    </div>

</body>

</html>