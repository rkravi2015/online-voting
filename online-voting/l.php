<html>
<head>
<style>
#menu{
	float:left;
	
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
.dropbtn {

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
width:210px;KH
 height:48px;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background: blue;color:white;font-size: 30px;width:250px;;
}
</style>
</head>
<body>
<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="index.php">Home</a>
    <a href="signup.php">signup</a>
    <a href="login.php">login</a>
    <a href="seat.php">live election</a>
    <a href="live.php">live election</a>
    <a href="contact.php">contact us</a>
  </div>
</div>
</div>
</body>
</html>