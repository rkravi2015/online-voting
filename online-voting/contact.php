<html>
<head>
<style>
#left
{
 font-size:      22px;
 font-weight:    bold;
margin:0% 0% 0% 0%;
}
.button{
background-color: white; 
    border:voilet groove;
    padding: 10px 5px;
   text-align: center;
	color:black;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 8px 8px;
cursor: pointer;
width:100px;
 height:35px;
 position: left;
}
#googleMap{
	margin: 8px 20px 20px 20%;
}
#add{
	margin: 8px 20px 20px 20%;
	background-color: white; 
	font-size:      22px;
 font-weight:    bold;
 border:voilet groove;
    padding: 10px 5px;
   text-align: center;
	color:black;
    text-decoration: none;
    display: inline-block;
 
}
body{
	
	
	  
    background-size: 100% 100%;
    background-repeat: no-repeat;
   
}
</style>
</head>
<body  background="flag.jpg">
<div>
<?php
include "header.php"
?>
</div><br><br><br><br>
<div id="left" align="left"><?php include "left.php" ?></div> 
 <div id="add" style="width:50%; ">
       <strong><u>CENTRAL OFFICE ADDRESS</u></strong>
	   <br>
	   VIT University<br>
Vellore - 632014<br>
Tamil Nadu, India<br>

info@vit.ac.in<br>
	   contact no:8988888888
    </div> 
<div id="googleMap" style="width:50%;height:400px ;"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(12.9739,79.1591),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script //src="https://maps.googleapis.com/maps/api/js?key= AIzaSyDz9piWZXUVYJtfGzzFYn5lu6g1KnD76m4&callback=myMap"
https://maps.googleapis.com/maps/api/js?key= AIzaSyDz9piWZXUVYJtfGzzFYn5lu6g1KnD76m4&callback=initMap
></script>
  
</body>
</html>