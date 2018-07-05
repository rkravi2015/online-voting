<html>
<head>
<style>
#contentandmenu{
	
   margin:8% 0% 0% 0%;
   

 font-family:Arial, Helvetica, sans-serif;
 font-size:      25px;
 font-weight:    bold;
  width:100%;
  height:100%;
  
   
   text-align: justify;
 
   color: balck; 
}
#table{
	font-size:      25px;
	background:white;
}
#vote{
	font-size:      25px;
	background:#fe0101;
	color:black;
	cursor: pointer;
}
body{
	
	
	  
    background-size: 100% 100%;
    background-repeat: no-repeat;
   
}
</style>

</head>
 
<body background="flag.jpg">
<?php
header("Refresh:5");
?>




<div>
<?php
include "header.php"
?>
</div><br><br><br><br>
<div id="left"><?php include "left.php" ?></div> 
<div id="contentandmenu">
<?php



	
	$dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            @$conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
			else{
				
			}
			
$sql = 'SELECT *
										FROM candidates';
               
            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
					echo "<table align='center' id='table'  border='1' cellpadding='3' font-size='18px' cellspacing='1'><tr><th>Candidate Id</th><th>Candidate Name</th><th>Party name</th><th>Area</th><th>State</th><th>Votes</th></tr>";
					while($row1 = mysql_fetch_array($retval, MYSQL_ASSOC)) {
						echo "<tr><td>" . $row1["candidate_id"]. "</td><td>" . $row1["candidate_name"]. "</td><td> " . $row1["party_name"].
						"</td><td> ".$row1["area_name"] ."</td><td> ".$row1["state"]."</td> <td>".$row1['vote']."</td></tr>";
						
					}
					 echo "</table>";
					
					
					
				
				
				
				
				
				
				
			
			
			
			mysql_close($conn);	
            

?>





</div>
</body>
</html>
