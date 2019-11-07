<!DOCTYPE html>
<html>
<head>
	<title>bản đồ truy nã tội phạm</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
	<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
	<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
</head>
<body method="POST" action="connect.php">
<div id="mapid" style="width: 190vh; height: 100vh;"></div>
<?php include("connect.php"); ?>
<script type="text/javascript">
	var name= "<?php echo $name; ?>"; 
	var lat=  parseFloat("<?php echo $a; ?>");
	var lng= parseFloat("<?php echo $b; ?>");
	var time = "<?php echo $c; ?>";
	//window.addEventListener('load',name);
	var mymap = L.map('mapid').setView([13.0994,  109.312], 15);
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
    L.marker([13.0994, 109.312]).addTo(mymap)
		.bindPopup("<b>THÔNG BÁO!</b><br />tội phạm truy nã<br>"+name+" "+ time).openPopup();
    L.circle([lat, lng], 100, {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("I am a circle.");
	L.Routing.control({
  		waypoints: [	  
		L.latLng(13.0607, 109.323),
    	L.latLng(lat, lng)
 	 ]
	}).addTo(mymap);
	L.Routing.control({
  		waypoints: [	  
    	L.latLng(13.0871, 109.303),
    	L.latLng(lat, lng)
 	 ]
	}).addTo(mymap);
</script>
</body>