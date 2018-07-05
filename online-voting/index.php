<html>
<head>
<style>

main {
  background: #EEE;
  width: 100%;
  margin: 20px auto;
  padding: 10px 0;
  box-shadow: 0 3px 5px rgba(0,0,0,0.3);
  font-size: 20px;
}
h2 {
  text-align: center;
}
p {
  font-size: 20px;
}
input {
  display: none;
  visibility: hidden;
}
label {
  display: block;
  padding: 0.5em;
  text-align: center;
  border-bottom: 1px solid #CCC;
  color: #666;
}
label:hover {
  color: #000;
}
label::before {
  font-family: Consolas, monaco, monospace;
  font-weight: bold;
  font-size: 15px;
  content: "+";
  vertical-align: text-top;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-right: 3px;
  background: radial-gradient(ellipse at center, #CCC 50%, transparent 50%);
}
#expand {
	font-size: 20px;
  height: 0px;
  overflow: hidden;
  transition: height 0.5s;
  //background: url(http://placekitten.com/g/600/300);
  color: #FFFF;
}
section {
	font-size: 20px;
  padding: 0 20px;
}
#toggle:checked ~ #expand {
  height: 250px;
}
#toggle:checked ~ label::before {
  content: "-";
}
#expand1 {
  height: 0px;
  overflow: hidden;
  transition: height 0.5s;
  //background: url(http://placekitten.com/g/600/300);
  color: #FFFF;
}

#toggle1:checked ~ #expand1 {
  height: 250px;
}
#toggle1:checked ~ label::before {
  content: "-";
}
#marque{position: absolute;top: 0;
  right: 10%;
  left:11%;
  height:100%;
  border-color:#FFFF;
  
  
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
  height: 70%;
   border-size:1px;
border-style:solid;
border-color:#FFFF;
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
body{
	
	
	  
    background-size: 100% 50%;
    background-repeat: no-repeat;
   
}
</style>

</head>

<body background="flag.jpg">
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

<div><?php include "left.php" ?>  
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
<main>
<h2>Election Commission of india</h2>
  <input id="toggle" type="checkbox" checked>
  <label for="toggle">About us</label>
  <div id="expand">
    <section>
      <p>The Election Commission of India is an autonomous constitutional authority responsible for administering election processes in India. 
The body administers elections to the Lok Sabha, Rajya Sabha, state legislatures, and the offices of the President and Vice President 
in the country. The Election Commission operates under the authority of Constitution per Article 324, and subsequently enacted 
Representation of the People Act. The Commission has the powers under the Constitution, to act in an appropriate manner when the enacted 
laws make insufficient provisions to deal with a given situation in the conduct of an election.One of the most important features of the democratic polity is elections at regular intervals.</p>
    </section>
  </div>
  <section>
    <h3></h3>
	<input id="toggle1" type="checkbox" unchecked>
  <label for="toggle1">Parties</label>
  <div id="expand1">
    <section>
      <p>CONGRESS:<br>...........................................</p>
	  <p>BJP:<br>...........................................</p>
	  
    </section>
  </div>
  
  </section></main>
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