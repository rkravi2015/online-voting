<html>
<head>
<style>
.dropbtn {

    background-color: white; 
    border:green;
	border-width:10px;
    padding: 10px 5px;
   text-align: center;
	color:black;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 8px 8px;
cursor: pointer;
width:210px;KH
 height:48px;
 border-radius:40px/24px;
}
.dropdown {
    position: relative;
    display: inline-block;
	 border-radius:40px/24px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:orange;
    border:green;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    background-color:#45bf1e;
    border:green;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: orange;border:grey groove; border-radius:40px/24px;}

.dropdown:hover .dropdown-content {
    display: block;border:grey solid;background:#9f8fff;border:grey solid; 
}

.dropdown:hover .dropbtn {
    background: blue;color:black;font-size: 30px;width:250px;border:grey solid; 
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
    <a href="seat.php">View seats</a>
    <a href="live.php">live election</a>
    <a href="contact.php">contact us</a>
	<a href="pdf.php">Documents</a>
  </div>
</div>
</div>
</body>
</html>