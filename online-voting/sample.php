<html>
<head>
<style>
#marque{position: absolute;top: 0;
  right: 10%;
  left:11%;
  height:100%;
  
    }

#contentandmenu{
	
   margin:8% 0% 0% 0%;

 font-family:Arial, Helvetica, sans-serif;
 font-size:      22px;
 font-weight:    bold;
  width:60%;
  height:65%;
  
   
   text-align: justify;
 
   color: balck; 
}
#content{
	float:center;
	width:62%;
   margin:1% 0% 0% 38%;

 font-family:Arial, Helvetica, sans-serif;
 font-size:      22px;
 font-weight:    bold;
  
   
   text-align: justify;
 height:100%;
   color: balck; 
	
}
#notice{
	position: absolute;
  
  top: 23%;
  right: 2%;
  bottom: 0;
  left: 65%;
  width: 33.5%;
  height: 75%;
   border-size:1px;
border-style:solid;
border-color:black;
 font-family:Arial, Helvetica, sans-serif;
 font-size:      20px;
 font-weight:    bold;
 color:#480500;
  
   
   text-align: justify;
 
   color: balck; 
	
}
#horizontal{
	width:100%;
	height:3px;
	
}
#p1{
	font-size: 30px;
	color:#480500;
}
#p2{
	font-size: 25px;
	color:#480500;
	align:justify;
}
</style>

</head>

<body background="back2.jpg">
<?php
if(isset($_POST['logout'])){
	session_start();
	unset($_SESSION['voter']);
}


?>
<div>
<?php
include "header.php"
?>
</div>
<div id="contentandmenu">

<div><?php include "l.php" ?>  
<div id="content">
<img class="mySlides" src="33.jpg" style="width:100%">
<img class="mySlides" src="22.jpg" style="width:100%">
  <img class="mySlides" src="44.jpg" style="width:100%">
  <img class="mySlides" src="55.jpg" style="width:100%">
  </div>
  
</div>
<div id="notice">
<h3>NOTICE BOARD:<h3>

<marquee id="marqe" height=350 width=500 direction="up">
1.)You can see result of election after login.<br><br>
2.)Im case of any misfunction of website please contact us.
</marquee>
</div>
<br>
<br>
<center id="p1"><strong>About</strong></center>
<hr id="horizontal">
<p id="p2">
The Election Commission of India is an autonomous constitutional authority responsible for administering election processes in India. 
The body administers elections to the Lok Sabha, Rajya Sabha, state legislatures, and the offices of the President and Vice President 
in the country. The Election Commission operates under the authority of Constitution per Article 324, and subsequently enacted 
Representation of the People Act. The Commission has the powers under the Constitution, to act in an appropriate manner when the enacted 
laws make insufficient provisions to deal with a given situation in the conduct of an election.One of the most important features of the democratic polity is elections at regular intervals. Holding periodic free and fair elections are essentials of a democratic system and a part of the basic structure of the Constitution. The Election Commission is regarded as the guardian of elections in the country. In every election, it issues a Model code of Conduct for political parties and candidates to conduct elections in a free and fair manner. The Commission issued the code for the first time in 1971 for the 5th Lok Sabha elections and revised it from time to time. It lays down guidelines for the conduct of political parties and candidates during an election period. However, there have been instances of violation of the code by various political parties with complaints being received for misuse of official machinery by the candidates. The code does not have any specific statutory basis but only a persuasive effect. It contains the rules of electoral morality. However, this lack of statutory backing does not prevent the Commission from enforcing it.
</P>
<p id="p2">
A law regarding the registration process for political parties was enacted in 1989 and a number of parties got registered with the Commission. The registration helps avoid confusion ensures that the political parties are brought under the purview of the commission.

The election commission has the right to allow symbols to the political parties. It gives recognition to the national parties, state parties and regional parties. It set limits on poll expenses. The commission prepare electoral rolls and update the voter's list from time to time. Notifications of dates and schedules of election for filing nominations are issued by the commission. It is noteworthy that Election commission cannot allot same symbol to two regional political parties even if they are not in the same state.[10]

The Commission can issue an order for prohibition of publication and disseminating of results of opinion polls or exit polls to prevent influencing the voting trends in the electorate.
</p>
<p id="p2">
"Leadership is not about the next election, it's about the next generation."</p>
<p id="p2">
"If you hire people just because they can do a job, they'll work for your money. But if you hire people who believe what you believe, they'll work for you with blood, sweat, and tears."</p>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>