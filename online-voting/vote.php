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
<script type='text/javascript'>
var res,x,flag=0;

function myfun(e){
	
	x=e.target.parentNode.innerText;
	res = x.substring(0, 3);
	//alert(res);
	flag=1;
	

	window.location.href = "vote2.php";
	

}


</script>


<div>
<?php
include "header.php"
?>
</div>
<div id="contentandmenu">
<?php
session_start();
if(isset($_SESSION['voter'])){
	$voter_id=$_SESSION['voter'];
	
}
header("refresh:15;url=logout.php");


	
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
      FROM people_detail';
               
            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
			
			
			
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
				
				if($voter_id==$row['voter_id']){
					if(1==$row['vote']){
						echo "<center><h1>you have already voted!</h1></center>";
						break;
					
				}
				else{
					$sql = 'SELECT *
										FROM candidates';
               
            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
					echo "<table align='center' id='table'  border='1' cellpadding='3' font-size='18px' cellspacing='1'><tr><th>Candidate Id</th><th>Candidate Name</th><th>Party name</th><th>Area</th><th>State</th></tr>";
					echo "<form action='vote2.php' method='POST'>";
					while($row1 = mysql_fetch_array($retval, MYSQL_ASSOC)) {
						echo "<tr><td>" . $row1["candidate_id"]. "</td><td>" . $row1["candidate_name"]. "</td><td> " . $row1["party_name"].
						"</td><td> ".$row1["area_name"] ."</td><td> ".$row1["state"]."</td> <td id='vote' name='vote_button' ><button name='subject' type='submit' value='".$row1["candidate_id"]."'>VOTE</button>". "</td></tr>";
						
					}
					
					 echo "</form></table>";
					
					
					
				}
				}
				
				
				
				
				
				
			}
			
			
			mysql_close($conn);	
            

?>



</div>
</body>
</html>
