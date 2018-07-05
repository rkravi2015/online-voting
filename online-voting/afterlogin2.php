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
             
			   $voter_id = addslashes ($_POST['voter_id']);
               $password = addslashes ($_POST['password']);
}
else{
	$voter_id = $_POST['voter_id'];
               $password = $_POST['password'];
}
if (empty($_POST["voter_id"])||empty($_POST["password"])
			)
			{
               echo "<script type='text/javascript'>alert('Every column must be filled')</script>";
			   header("Refresh:0");
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
					
					
					echo "<script type='text/javascript'>alert('logged in succesfully!')</script>";
					header('Location:afterlogin.php');
				}
				else{
					echo "<script type='text/javascript'>alert('Wrong Credentials!')</script>";
					header('Location:login.php');
				}
       
        
   } 
            
            
            
            mysql_close($conn);
}
?>