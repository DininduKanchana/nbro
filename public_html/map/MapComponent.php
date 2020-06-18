<div>
    
<div class="card">
  <div class="card-body">
      <h5 class="card-title">Dynamic Air Quality Map</h5>
       <div>
        <small>Last updated at: <span id='lastUpdated'></span>
        </small>
      </div>
      <div id="map" style="clear:both; height:48rem;"></div> 
      <div id="data-table"></div>
  </div>
</div>
  <style>
    #data-table {
      position: absolute;
      top: 12%;  /* adjust value accordingly */
      left: 73%;  /* adjust value accordingly */
    }

    .popup td {
      width: 100px;
      height: 100px
    }

    .flex-container {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: white;
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
    var infoWindow;
    var lastUpdated;


    drowTable();
    setInterval(drowTable, 60000 * 3);

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(7.85125, 80.654221),
        zoom: 8
      });

      infoWindow = new google.maps.InfoWindow();

      drowMarkers();
      setInterval(drowMarkers, 60000 * 3);
    }

    function drowMarkers() {
      downloadUrl("./map/map.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");

        deleteMarkers();

        Array.prototype.forEach.call(markers, function(markerElem) {
          var id = markerElem.getAttribute("id");
          var name = markerElem.getAttribute("name");
          var address = markerElem.getAttribute("address");
          var time = markerElem.getAttribute("time");
          var aqi = markerElem.getAttribute("aqi");
          var value1 = markerElem.getAttribute("value1"); // PM2.5
          var value2 = markerElem.getAttribute("value2"); // PM10
          var value3 = markerElem.getAttribute("value3"); // Tempareture
          
          // met department time

          if (address == 'MET Department') {
            lastUpdated = time    
          }
          
          var point = new google.maps.LatLng(
            parseFloat(markerElem.getAttribute("lat")),
            parseFloat(markerElem.getAttribute("lng"))
          );

          var infowincontent = document.createElement("div");
          var strong = document.createElement("strong");
          strong.textContent = name;
          infowincontent.appendChild(strong);
          infowincontent.appendChild(document.createElement("br"));

          var text = document.createElement("text");
          text.textContent = address;
          infowincontent.appendChild(text);

          var content =   '<table class="table table-borderless">'+
                            '<tbody>'+
                                '<tr style="font-size:15px; font-weight:bold" align="right">'+
                                    '<td>PM2.5</td>'+
                                    '<td>PM10</td>'+
                                    //'<td>CO2</td>'+
                                    '<td>TEMP</td>'+
                                '</tr>'+
                                '<tr style="font-size:30px; font-weight:bold" align="right">'+
                                    '<td>'+ parseInt(+value1) +'</td>'+
                                    '<td>'+ parseInt(+value2) +'</td>'+
                                    //'<td>'+ 200 + '</td>'+
                                    '<td>'+ parseInt(+value3) +'</td>'+
                                '</tr>'+
                                '<tr style="font-size:12px" align="right">'+
                                    '<td>μg/m3</td>'+
                                    '<td>μg/m3</td>'+
                                    //'<td>ppm</td>'+
                                    '<td>&#8451;</td>'+
                                '</tr>'+
                            '</tbody>'+
                        '</table>'
                        
                        

          var markerUrl = "./map/icon1/";

          if (+aqi < 50) {
              markerUrl += "one(0-50).png";
          } else if (+aqi < 100) {
              markerUrl += "two(51-100).png";
          } else if (+aqi < 150) {
              markerUrl += "three(101-150).png";
          } else if (+aqi < 200) {
              markerUrl += "four(151-200).png";
          } else if (+aqi < 300) {
              markerUrl += "five(201-300).png";
          }  else if (+aqi < 500) {
              markerUrl += "six(301-500).png";
          } else {
              markerUrl += "one(0-50).png";
          }

          // var icon = customLabel[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            label: {
              text: (+aqi).toFixed(1),
              color: 'black',
              fontSize: '20px'
            },
            title: markerElem.getAttribute("value"),
            icon: {
              url: markerUrl,
              scaledSize: new google.maps.Size(60, 60), // scaled size

            }
          });

          marker.addListener("click", function() {
            infoWindow.setContent(content);
            infoWindow.open(map, marker);
          });

          markersArray.push(marker);
        });
         document.getElementById('lastUpdated').innerHTML = lastUpdated;
      });
    }

    function deleteMarkers() {
      for (var i = 0; i < markersArray.length; i++) {
        markersArray[i].setMap(null);
      }
      markersArray.length = 0;
    }

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

          var table = "<table class='table table-borderless table-hover table-sm aqi-table'>"
                              +"<tbody>"
                              +"<tr style='background: #f5f5f5'><th scope='col'>City</th>"
                              +"<th scope='col'>AQI</th></tr>";
          
          Array.prototype.forEach.call(markers, function(markerElem) {
              var name = markerElem.getAttribute("name");
              var aqi = markerElem.getAttribute("aqi"); 
              table += '<tr style="text-align: center; background: '+ getColor(aqi) +'"><td>'+ name +'</td>';
              table += '<td>'+ parseInt(+aqi) +'</td></tr>';
          });
          table +=  "</tbody></table>";

          document.getElementById('data-table').innerHTML = table;
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANWTwLUDlCxMqpwnhaDM1JzSxuPTnKuJE&callback=initMap"></script>
  
</div>