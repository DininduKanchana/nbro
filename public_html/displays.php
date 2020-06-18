<?php
include_once('./userHeader.php');
?>

<body>

<style type="text/css">
.table td{
    border: white solid 1px !important;
}

.table th{
    border: white solid 1px !important;
}
</style>

<script type="text/javascript">

var gCode = '#00e400';
var hCode = '#7e0023';
var mCode = '#f1ea20';
var uCode = '#ff0000';
var usgCode = '#ff7e00';
var vuCode = '#99004c';
var whiteSmoke = '#f5f5f5';

var markersArray = [];
var map;
var infoWindow


drowTable();
setInterval(drowTable, 60000*5);

function downloadUrl(url, callback) {
  var request = window.ActiveXObject ?
    new ActiveXObject("Microsoft.XMLHTTP") :
    new XMLHttpRequest();

  request.onreadystatechange = function() {
    if (request.readyState == 4) {
      request.onreadystatechange = doNothing;
      callback(request, request.status);
    }
  };

  request.open("GET", url, true);
  request.send(null);
}

function doNothing() {}

function drowTable() {
  downloadUrl("./map/map.php", function(data) {
      var xml = data.responseXML;
      var markers = xml.documentElement.getElementsByTagName("marker");

      Array.prototype.forEach.call(markers, function(markerElem) {
          var name = markerElem.getAttribute("name");
          var address = markerElem.getAttribute("address");
          var time = markerElem.getAttribute("time");
          var aqi = markerElem.getAttribute("aqi");
          var value1 = markerElem.getAttribute("value1"); // PM2.5
          var value2 = markerElem.getAttribute("value2"); // PM10
          var value3 = markerElem.getAttribute("value3"); // Tempareture
          var value4 = markerElem.getAttribute("value4"); // CO2

          if (name.toLowerCase() == 'colombo') {
            var outdoorTable = "<table class='table table-bordered'  style='text-align:center;'>"+
                "<thead>"+
                    "<tr>"+
                        "<th style='font-size: 25px' scope='col'>PM2.5</th>"+
                        "<th style='font-size: 25px' scope='col'>PM10</th>"+
                        "<th style='font-size: 25px' scope='col'>CO2</th>"+
                        "<th style='font-size: 25px' scope='col'></th>"+
                        "<th style='font-size: 25px' scope='col'>US AQI Value for PM2.5</th>"+
                    "</tr>"+
                " <tr style='height:130px'>"+
                        "<td style='text-align:center; width: 170px;background-color: rgb(179, 179, 179); font-size: 65px;);align=center' scope='col'>"+ parseInt(+value1) +"</td>"+
                        "<td style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(179, 179, 179)' scope='col'>"+ parseInt(+value2) +"</td>"+
                        "<td style='text-align:center; width: 170px; font-size: 65px;background-color:rgb(179, 179, 179);style= text-align:center;' scope='col'>"+ parseInt(+value4) +"</td>"+
                        "<td style='text-align:center; width: 170px; font-size: 65px;style= text-align:center;' scope='col'></td>"+
                        "<td style='text-align:center; width: 170px; font-size: 65px;background-color:"+ getColor(+aqi) +";style= text-align:center;' scope='col'>"+ parseInt(+aqi) +"</td>"+
                " </tr>"+
                    "<tr>"+
                        "<th style='font-size: 20px' scope='col'>"+
                            "ug/m3"+
                        "</th>"+
                        "<th style='font-size: 20px' scope='col'>"+
                            "ug/m3"+
                        "</th>"+
                        "<th style='font-size: 20px' scope='col'>"+
                            "ppm"+
                    "</th>"+
                "</tr>"+
                "</table>";
                document.getElementById('outdoorTable').innerHTML = outdoorTable;

              

          }

          if (name.toLowerCase() == 'kurunegala') {
            var indoorTable = "<table class='table table-bordered'  style='text-align:center;'>"+
                "<thead>"+
                    "<tr>"+
                        "<th style='font-size: 25px' scope='col'>PM2.5</th>"+
                        "<th style='font-size: 25px' scope='col'>PM10</th>"+
                        "<th style='font-size: 25px' scope='col'>CO2</th>"+
                        "<th style='font-size: 25px' scope='col'></th>"+
                        "<th style='font-size: 25px' scope='col'>US AQI Value for PM2.5</th>"+
                    "</tr>"+
                " <tr style='height:130px'>"+
                        "<td style='text-align:center; width: 170px;background-color: rgb(179, 179, 179); font-size: 65px;);align=center' scope='col'>"+ parseInt(+value1) +"</td>"+
                        "<td style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(179, 179, 179)' scope='col'>"+ parseInt(+value2) +"</td>"+
                        "<td style='text-align:center; width: 170px; font-size: 65px;background-color:rgb(179, 179, 179);style= text-align:center;' scope='col'>"+ parseInt(+value4) +"</td>"+
                        "<td style='text-align:center; width: 170px; font-size: 65px;style= text-align:center;' scope='col'></td>"+
                        "<td style='text-align:center; width: 170px; font-size: 65px;background-color:"+ getColor(+aqi) +";style= text-align:center;' scope='col'>"+ parseInt(+aqi) +"</td>"+
                " </tr>"+
                    "<tr>"+
                        "<th style='font-size: 20px' scope='col'>"+
                            "ug/m3"+
                        "</th>"+
                        "<th style='font-size: 20px' scope='col'>"+
                            "ug/m3"+
                        "</th>"+
                        "<th style='font-size: 20px' scope='col'>"+
                            "ppm"+
                    "</th>"+
                "</tr>"+
                "</table>";
                document.getElementById('indoorTable').innerHTML = indoorTable;
          }
      });
  })
}

function getColor(aqi) {
    let color = '';

    if (+aqi < 50) {
        color = gCode;
    } else if (+aqi < 100) {
        color = mCode;
    } else if (+aqi < 150) {
        color = usgCode;
    } else if (+aqi < 200) {
        color = uCode;
    } else if (+aqi < 300) {
        color = vuCode;
    }  else if (+aqi < 500) {
        color = hCode;
    } else {
        color = gCode;
    }

    return color
}
</script>
    <br><br><br>
    <div class="container">

    <!-- indoor -->
        <div class="row">
            <div class="col-md-1"></div>        
            <div class="col-md-10">
                <h1 style="text-align:center">Indoor Air Quality Levels (Conference Hall)</h1>
                <div id="indoorTable"></div>
            </div>        
            <div class="col-md-1"></div>        
        </div>

    <!-- outdoor -->
        <div class="row">
            <div class="col-md-1"></div>        
            <div class="col-md-10">
                <h1 style="text-align:center">Outdoor Air Quality Levels (Conference Premises)</h1>
                <div id="outdoorTable"></div>
            </div>        
            <div class="col-md-1"></div>        
        </div>

    </div>
    <!-- <h1>
        <strong>
            <center>Indoor Air Quality Levels (Conference Hall)</center>
        </strong>
    </h1>





    <center>
        <table class="table table-bordered">
            <thead>


                <tr>
                    <th style='font-size: 25px' scope='col'>
                        <center> PM2.5</center>
                    </th>
                    <th style='font-size: 25px' scope='col'>
                        <center> PM10</center>
                    </th>
                    <th style='font-size: 25px' scope='col'>
                        <center> CO2</center>
                    </th>
                    <th style='font-size: 25px' scope='col'>
                        <center> </center>
                    </th>
                    <th style='font-size: 25px' scope='col'>
                        <center> US AQI Value for PM2.5</center>
                    </th>
                </tr>
                <tr style='height:130px'>
                    <td style='text-align:center; width: 170px;background-color: rgb(179, 179, 179); font-size: 65px;);align="center"' scope='col'>
                        <center> 25</center>
                    </td>
                    <td style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(179, 179, 179)' scope='col'>
                        <center> 49</center>
                    </td>
                    <td style='text-align:center; width: 170px; font-size: 65px;background-color:rgb(179, 179, 179);style= text-align:center;' scope='col'>
                        <center>1750</center>
                    </td>
                    <td style='text-align:center; width: 170px; font-size: 65px;style= text-align:center;' scope='col'>
                        <center></center>
                    </td>
                    <td style='text-align:center; width: 170px; font-size: 65px;background-color:rgb(60,179,113);style= text-align:center;' scope='col'>
                        <center>24</center>
                    </td>




                </tr>
                <tr>
                    <th style='font-size: 20px' scope='col'>
                        <center> ug/m3</center>
                    </th>
                    <th style='font-size: 20px' scope='col'>
                        <center> ug/m3</center>
                    </th>
                    <th style='font-size: 20px' scope='col'>
                        <center> ppm</center>
                    </th>

                </tr>
        </table><br><br>
    </center>

    <h1>
        <b>
            <center>Outdoor Air Quality Levels (Conference Premises)</center>
        </b>
    </h1>





    <center>
        <table class="table table-bordered">
            <thead>


                <tr>
                    <th style='font-size: 25px' scope='col'>
                        <center> PM2.5</center>
                    </th>
                    <th style='font-size: 25px' scope='col'>
                        <center> PM10</center>
                    </th>
                    <th style='font-size: 25px' scope='col'>
                        <center> CO2</center>
                    </th>
                    <th style='font-size: 25px' scope='col'>
                        <center> </center>
                    </th>
                    <th style='font-size: 25px' scope='col'>
                        <center> US AQI Value for PM2.5</center>
                    </th>
                </tr>
                <tr style='height:130px'>
                    <td style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(179, 179, 179);align="center"' scope='col'>
                        <center> 15</center>
                    </td>
                    <td style='text-align:center; width: 170px; font-size: 65px;background-color: rgb(179, 179, 179)' scope='col'>
                        <center> 33</center>
                    </td>
                    <td style='text-align:center; width: 170px; font-size: 65px;background-color:rgb(179, 179, 179);style= text-align:center;' scope='col'>
                        <center>460</center>
                    </td>
                    <td style='text-align:center; width: 170px; font-size: 65px;style= text-align:center;' scope='col'>
                        <center></center>
                    </td>
                    <td style='text-align:center; width: 170px; font-size: 65px;background-color:rgb(60,179,113);style= text-align:center;' scope='col'>
                        <center>24</center>
                    </td>



                </tr>
                <tr>
                    <th style='font-size: 20px' scope='col'>
                        <center> ug/m3</center>
                    </th>
                    <th style='font-size: 20px' scope='col'>
                        <center> ug/m3</center>
                    </th>
                    <th style='font-size: 20px' scope='col'>
                        <center> ppm</center>
                    </th>

                </tr>
    </center> -->

</body>
