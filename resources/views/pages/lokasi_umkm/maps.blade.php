<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map with Pins and Names</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>

<body>
    <div id="map" style="width: 100%; height: 700px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script>
        // Initialize the Leaflet map
        var map = L.map('map').setView([-2.9744, 119.8767], 9); // Update coordinates here

        // Add a tile layer (you can use different map providers)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Define an array of marker coordinates along with their names
        var markersData = '{!! $kordinat !!}';
        markers = JSON.parse(markersData);
        console.log(markers);

        // Loop through the marker coordinates and create markers for each
        for (var i = 0; i < markers.length; i++) {
            var markerInfo = markers[i];
            var coord = markerInfo.coordinates;

            // Create a marker with a name
            var marker = L.marker(coord).addTo(map);
            marker.bindPopup(markerInfo.name).openPopup();
        }
    </script>
</body>

</html>
