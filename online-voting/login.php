<html>
<head>
<style>
#button {
    background-color: #352fe0; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
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
  
  
   
   text-align: justify;
 
   color: balck; 
}
#content{
	float:center;
	
   margin:1% 0% 0% 20%;

 font-family:Arial, Helvetica, sans-serif;
 font-size:      22px;
 font-weight:    bold;
  
   
   text-align: center;
 height:100%;
   color: balck; 
	
}
#login{
	background-color: orange; 
	width:50%;
	border-style: dashed;
	margin:3% 0% 0% 13%;
}
body{
	
	
	  
    background-size: 100% 100%;
    background-repeat: no-repeat;
   
}
</style>

</head>

<body background="flag.jpg">
<?php
 if(isset($_POST['add'])) {
	
	$dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            @$conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
			else{
				//echo "<script type='text/javascript'>alert('connected!')</script>";
			}
			if(! get_magic_quotes_gpc() ) {
             
			   $voter_id = addslashes($_POST['voter_id']);
			   
               $password = addslashes($_POST['password']);
}
else{
	$voter_id = $_POST['voter_id'];
	
               $password = $_POST['password'];
}
if (empty($_POST['voter_id'])||empty($_POST['password']))
			{
               echo "<script type='text/javascript'>alert('Every column must be filled')</script>";
			   header("Refresh:0");
            }
else{
$sql = 'SELECT *
      FROM people_detail';
               
            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
			$flag=0;
			session_start();
			$_SESSION['voter']=$voter_id;
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
				if(!strcmp($voter_id,$row['voter_id'] ) && !strcmp($password,$row['qualification'] )){
					$flag=1;
					echo "<script type='text/javascript'>alert('succesfully logedin!')</script>";
					header('Location:afterlogin.php');
				}
				
				
				
				
				
			}
			if($flag==0){
					echo "<script type='text/javascript'>alert('Wrong credentials')</script>";
					
				}
			}
			mysql_close($conn);	
            
}
?>

<div>
<?php
include "header.php"
?>
</div>
<div id="contentandmenu">

<div id="left"><?php include "left.php" ?></div>  
<div id="content" >
 <form action="<?php $_PHP_SELF ?>" method="post">
 <div id="login" background="vote.png">
 <br>
  Voter Id: <br><input type="text"  name="voter_id"><br><br>
  Password: <br><input type="password" name="password"><br><br>
  <input id="button" type="submit" value="Login" name="add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input id="button" type="submit" value="clear"><br><br>
  </div>
  <br>

 
</form> 
</div>
</div>
</body>
</html>