<html>
<head>
<style>
#contentandmenu{
	
   margin:8% 0% 0% 0%;

 font-family:Arial, Helvetica, sans-serif;
 font-size:      22px;
 font-weight:    bold;
  width:100%;
  height:100%;
  
   
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

#menu{
	float:left;
	height:100%
	width:40%;
   border-size:1px;
border-style:solid;
border-color:black;
 font-family:Arial, Helvetica, sans-serif;
 font-size:      22px;
 font-weight:    bold;
   margin:1% 0% 0% 1%;
   padding-bottom: 20px; 
   text-align: justify;
  
   color: balck; 
}
#login{
	width:65%;
	border-style: dashed;
	margin:0% 0% 0% 18%;
	 background-color:orange;
}
.button {
    background-color:  white; /* Green */
    border: 1px;
    color: white;
    padding: 10px 5px;
   // text-align: center;
	color:black;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 8px 8px;
cursor: pointer;
width:210px;
height:48px;
}
.button:hover {background: blue;color:white;font-size: 30px;width:250px;}
body{
	
	
	  
    background-size: 100% 100%;
    background-repeat: no-repeat;
   
}
</style>

</head>

<body background="flag.jpg">
<?php

session_start();
if(isset($_SESSION['voter'])){
	$voter_id=$_SESSION['voter'];
	

	
header("refresh:15;url=logout.php");

$dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            @$conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
$sql = "SELECT *
      FROM people_detail  ";
               
            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
			while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
				if($voter_id==$row['voter_id']){
					$first_name=$row['first_name'];
					$last_name=$row['last_name'];
					$dob=$row['dob'];
					$father_name=$row['father_name'];
					$mother_name=$row['mother_name'];
					$aadhar=$row['aadhar'];
					$qualification=$row['qualification'];
					$income=$row['income'];
					$gas=$row['gas'];
					$street_no=$row['street_no'];
					$city=$row['city'];
					$state=$row['state'];
					$pin=$row['pin'];
					$mobile=$row['mobile'];
					$email=$row['email'];
				}
       
        
   } 
            
            
            
            mysql_close($conn);	
}
else{
	ob_start();
	echo "<script type='text/javascript'>alert('Your are not logedin,Please login again!')</script>";
	header('Location:index.php');
	ob_end_flush();
}			
?>
<?php
if(isset($_POST['vote'])){
	
header('Location:vote.php');
}
?>

<div>
<?php
include "header.php"
?>
</div>
<div id="contentandmenu">

<div id="menu"><br>
<form action="<?php $_PHP_SELF ?>" method = "post">
<button class="button button2" name="vote" onClick="document.location.href='vote.php'">Vote</button><br>
<button class="button button3" name="result"  id="b"  >Result</button><br>
<button class="button"  name="logout" >Logout</button>
</form>
<?php
if(isset($_POST['logout'])){
	
	@session_start();
	unset($_SESSION['voter']);
	ob_start();
	echo "<script type='text/javascript'>alert('succesfully logged out!')</script>";
	echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
	
	

	
}


?>
<?php
if(isset($_POST['result'])){
	
	
	echo "<script type='text/javascript'>window.location.href = 'result2.php';</script>";
	
	

	
}


?>

</div>  
<div id="content"><h2>Personal Detail:</h2><hr>
<div id="login" >
<table  align="center"  cellspacing="10"   >
         <tr>
            <th >First name:</th>
            <th><?php echo $first_name; ?></th>
        <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Last name:</th>
            <th><?php echo $last_name; ?></th>
         </tr>
		 <tr>
            <th >Date of birth:</th>
            <th><?php echo $dob; ?></th>
        <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Father's name:</th>
            <th><?php echo $father_name; ?></th>
         </tr>
		 <tr>
            <th >Mother's name:</th>
            <th><?php echo $mother_name; ?></th>
        <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Aadhar Card number:</th>
            <th><?php echo $aadhar; ?></th>
         </tr>
		 <tr>
            <th >voter id :</th>
            <th><?php echo $voter_id; ?></th>
         <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Qualification: </th>
            <th><?php echo $qualification; ?></th>
         </tr>
		 <tr>
            <th >Income(per annum): </th>
            <th><?php echo $income; ?></th>
         <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >No. of Gas connection: </th>
            <th><?php echo $gas; ?></th>
         </tr>
		 <tr>
            <th >Street no.:</th>
            <th><?php echo $street_no; ?></th>
         <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >City/Village:</th>
            <th><?php echo $city; ?></th>
         </tr>
		 <tr>
            <th >State:</th>
            <th><?php echo $state; ?></th>
         <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >PIN:</th>
            <th><?php echo $pin; ?></th>
         </tr>
		 <tr>
            <th >Mobile number:</th>
            <th><?php echo $mobile; ?></th>
        <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Email id:</th>
            <th><?php echo $email; ?></th>
         </tr>
		 
         
         
      </table></div>
</div>
</div>
</body>
</html>