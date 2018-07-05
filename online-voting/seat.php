<html>
<head>
<style>
#list{
	background-color:orange;
	margin:10% 10% 10% 10%;
	width:50%;
	
	border-size:2px;
border-style:solid;
border-color:black;
}

#table{
	font-size:      25px;
	background:white;
	margin:3% 3% 3% 3%;
}
#vote{
	font-size:      25px;
	background:#fe0101;
	color:black;
	cursor: pointer;
}

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
body{
	
	
	  
    background-size: 100% 100%;
    background-repeat: no-repeat;
   
}
 </style>

</head>
<body background="flag.jpg">
<div>
<?php
include "header.php"
?>
</div>
<br><br><br><br>
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
			$sql = 'SELECT DISTINCT state
      FROM seat';
               
            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
			}
      $i=0;
	  $state=array();
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
				$state[$i]=$row['state'];
				$i=$i+1;
				
				
					
				}
				$no_of_seats=0;
		foreach ($state as $value) {
			$sql = "SELECT *
      FROM seat where state='$value'";
               
            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
			}
			
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
						
						$no_of_seats=$row["seat"];
					}
					$retval1 = mysql_query( $sql, $conn );
            
            if(! $retval1 ) {
               die('Could not enter data: ' . mysql_error());
			}
			echo "<center><div id='list' >";
			
			echo "<br><center><div id='title'><p id='para'>".$value." (Total seats=".$no_of_seats.")</div></center>"."<hr width='40%'><br></p>";
      
			echo "<center><table align='center' id='table'  border='1' cellpadding='3' font-size='18px' cellspacing='1'><tr><th>candidate name</th><th>Area</th></tr>";
					
					while($row1 = mysql_fetch_array($retval1, MYSQL_ASSOC)) {
						echo "<tr><td>" . $row1["candidate"]. "</td><td>" . $row1["area"]. "</td></tr>";
						
					}
					
					 echo "</table></cenetr>";
					 echo "</div></center>";
	}
?>
</div> 
</body>
</html>