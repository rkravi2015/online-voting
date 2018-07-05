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
if(! get_magic_quotes_gpc() ) {
             
			   $first_name = addslashes ($_POST['first_name']);
               $last_name = addslashes ($_POST['last_name']);
			   $dob = addslashes ($_POST['dob']);
			   $fathers_name = addslashes ($_POST['fathers_name']);
			   $mothers_name =addslashes ($_POST['mothers_name']);
			   $aadhar = addslashes ($_POST['aadhar']);
			   $voter_id = addslashes ($_POST['voter_id']);
			   $qualification = addslashes ($_POST['qualification']);
			  
			   
			   $street = addslashes ($_POST['street']);
			   $city = addslashes ($_POST['city']);
			   $state =addslashes ( $_POST['state']);
			   
			   $mobile = addslashes ($_POST['mobile']);
			   $email = addslashes ($_POST['email']);
               
            }else {
               $first_name = $_POST['first_name'];
               $last_name = $_POST['last_name'];
			   $dob = $_POST['dob'];
			   $fathers_name = $_POST['fathers_name'];
			   $mothers_name = $_POST['mothers_name'];
			   $aadhar = $_POST['aadhar'];
			   $voter_id = $_POST['voter_id'];
			   $qualification = $_POST['qualification'];
			   
			   
			   $street = $_POST['street'];
			   $city = $_POST['city'];
			   $state = $_POST['state'];
			   
			   $mobile = $_POST['mobile'];
			   $email = $_POST['email'];
			   
            }
			$income = $_POST['income'];
			   $gas = $_POST['gas'];
			   $pin = $_POST['pin'];
			   
            if (empty($_POST["first_name"])||empty($_POST["last_name"])||empty($_POST["dob"])||empty($_POST['fathers_name'])||empty($_POST['mothers_name'])||
			empty($_POST['aadhar'])||empty($_POST['voter_id']) ||empty($_POST['qualification'])||empty($_POST['qualification'])||empty( $_POST['city'])
			||empty($_POST['state'])||empty($_POST['mobile'])||empty($_POST['email'])||empty($_POST['income'])||empty($_POST['gas'])||empty($_POST['pin']))
			{
               echo "<script type='text/javascript'>alert('Every column must be filled')</script>";
			   header("Refresh:0");
            }
            
            
            $sql = "INSERT INTO people_detail ". "(first_name,last_name,dob,father_name,mother_name,aadhar,voter_id,qualification,income,
               gas,street_no,city,state,pin,mobile,email,vote) ". "VALUES('$first_name','$last_name','$dob','$fathers_name','$mothers_name','$aadhar'
			   ,'$voter_id','$qualification',$income,$gas,'$street','$city','$state',$pin,'$mobile','$email',0)";
               
            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "<script type='text/javascript'>alert('Detail Entered Succesfully!')</script>";
			header("Refresh:0");
            
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
<div id="content">
<form action="<?php $_PHP_SELF ?>" method = "post">
<h3>***Every column is mendatory***
	<table  align="center"  cellspacing="10"   >
         <tr>
            <th >First name:</th>
            <th><input type="text" name="first_name" ></th>
        <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Last name:</th>
            <th><input type="text" name="last_name" ></th>
         </tr>
		 <tr>
            <th >Date of birth:</th>
            <th><input type="date" name="dob" data-date-inline-picker="true" ></th>
        <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Father's name:</th>
            <th><input type="text" name="fathers_name" ></th>
         </tr>
		 <tr>
            <th >Mother's name:</th>
            <th><input type="text" name="mothers_name" ></th>
        <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Aadhar Card number:</th>
            <th><input type="text" name="aadhar" ></th>
         </tr>
		 <tr>
            <th >voter id :</th>
            <th><input type="text" name="voter_id" ></th>
         <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >Password: </th>
            <th><input type="password" name="qualification" ></th>
         </tr>
		 <tr>
            <th >Income(per annum): </th>
            <th><input type="text" name="income" ></th>
         <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >No. of Gas connection: </th>
            <th><input type="text" name="gas" ></th>
         </tr>
		 <tr>
            <th >Street no.:</th>
            <th><input type="text" name="street"></th>
         <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >City/Village:</th>
            <th><input type="text" name="city" ></th>
         </tr>
		 <tr>
            <th >State:</th>
            <th><input type="text" name="state" ></th>
         <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >PIN:</th>
            <th><input type="text" name="pin"></th>
         </tr>
		 <tr>
            <th >Mobile number:</th>
            <th><input type="text" name="mobile" ></th>
        <th> <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;"?> </th>
            <th >PAN card no:</th>
            <th><input type="text" name="email" ></th>
         </tr>
		 
         
         
      </table><br>
  <input id="button" type="submit" value="Submit" name="add" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input id="button" type="submit" value="clear">
  
</form> 

  </div>
  
</div>
</body>
</html>