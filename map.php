<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h2><b><?php echo $_GET['name'] ?></b> Clinic is at:</h2>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: <?php echo $_GET['lat'] ?>, lng: <?php echo $_GET['lng'] ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAR-tue1Ql7oaIOx00jslDCXGDLV8J1ks&callback=initMap">
    </script>
	<br><br>
	<h2>Adress: <b><?php echo $_GET['address'] ?></b></h2>
  </body>
</html>