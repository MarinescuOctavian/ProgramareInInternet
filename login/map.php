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
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
        function initMap() {
            var uluru = {
                lat: 45.6523093,
                lng: 25.6102746
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: uluru
            });
            
      <?php
            $conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
            mysqli_select_db($conn, "pai1"); 
            $sql_read = "SELECT * FROM locatii2";
            $result = mysqli_query($conn, $sql_read);
            if(! $result )
            {
            die('Could not read data: ' . mysqli_error());
            }
            while($row = mysqli_fetch_array($result)) 
            {
            $lat = $row['Latitudine'];
            $long = $row['Longitudine'];
      echo "var marker = new google.maps.Marker({position:{lat:$lat,lng:$long},map: map});";
      }
      ?>
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByKEo-eVV5YXXbbpGUsL7_Leuxb8c543U&callback=initMap">
    </script>
</body>

</html>