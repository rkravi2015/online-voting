<html>
<head>
<meta charset="UTF-8">
<style>
#button {
    background-color: #352fe0; /* Green */
    border: none;
    color: white;
    padding: 15px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
}
#button:hover {background: blue;color:white;font-size: 18px;width:160px;}
#contentandmenu{
	
   margin:8% 0% 0% 0%;

 font-family:Arial, Helvetica, sans-serif;
 font-size:      22px;
 font-weight:    bold;

}
#content{
	float:center;
	
   margin:0% 0% 0% 30%;

 font-family:Arial, Helvetica, sans-serif;
 font-size:      22px;
 font-weight:    bold;
  
   
   text-align: center;
 height:80%;
   color: balck; 
   background-color: orange; 
	width:50%;
	border-style: dashed;
	
	
}
body{
	
	
	  
    background-size: 100% 100%;
    background-repeat: no-repeat;
   
}
#pdf1{
	margin:0px 0px 0px 20%;
}

</style>

</head>

<body background="flag.jpg">
<div>
<?php
include "header.php"
?>
</div>
<div id="contentandmenu">

 
	<div id="left"><?php include "left.php" ?></div> 
	<h1 id="pdf1">Rules and Regulations:</h1>
<embed src="15BCE0338.pdf" id="pdf1" width="1000" height="400"></embed><br><br><br>
<h1 id="pdf1">Human Rights:</h1>
<embed src="2.pdf" id="pdf1" width="1000" height="400"></embed>
</div>
 
</body>
</html> 
