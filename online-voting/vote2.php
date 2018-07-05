<?php 
session_start();
if(isset($_SESSION['voter'])){
	$voter_id=$_SESSION['voter'];
	
}
/*if(isset($_SESSION['candidate'])){
	$candidate_id=$_SESSION['candidate'];
	}*/
	$candidate_id = $_POST['subject'];
	

			$_COOKIE['candidate_id']=$candidate_id;
			//echo "<script type='text/javascript'>window.location.href = 'try2.php';</script>";
	
	
$dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            @$conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
			else{
				
			}
			

                                                            /*$sql="UPDATE people_detail ". "SET vote = 1". 
                                                                     "WHERE voter_id = '$voter_id'" ;*/
			   $sql="UPDATE `people_detail` SET `vote`=1 WHERE `voter_id`='".$voter_id."'";

            mysql_select_db('iwp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data1: ' . mysql_error());
            }
			//to ADD vote first retrive vote
			$sql1 = 'SELECT *
      FROM candidates';
               
            mysql_select_db('iwp');
            $retval1 = mysql_query( $sql1, $conn );
            
            if(! $retval1 ) {
               die('Could not enter data: ' . mysql_error());
            }
			
			while($row1 = mysql_fetch_array($retval1, MYSQL_ASSOC)) {
				if($candidate_id=$row1['candidate_id']){
					$vote=$row1['vote'];
					
					
				}
				}
				$vote=$vote+1;
				
				//now update data
				                                                                    /*$sql2 = "UPDATE candidates ". "SET vote = $vote ". 
                                                                                  "WHERE candidate_id = '$candidate_id'" ;*/
			   $sql2="UPDATE `candidates` SET `vote`='".$vote."' WHERE `candidate_id`='".$candidate_id."'";

            mysql_select_db('iwp');
            $retval2 = mysql_query( $sql2, $conn );
            
            if(! $retval2 ) {
               die('Could not update data2: ' . mysql_error());
            }
           
			echo "<script type='text/javascript'>alert('Voted  Successfully')</script>";
			@session_start();
	unset($_SESSION['candidate']);
	ob_start();
			echo "<script type='text/javascript'>window.location.href = 'afterlogin.php';</script>";
			
			//header("Refresh:0");
			
            
            mysql_close($conn);
            
            


?>