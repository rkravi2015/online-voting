<html>
<body>
<form action="<?php $_PHP_SELF ?>" method="post">
<table onclick="myfun(event)">
<tr>
<td>ravi</td>
<td>kumar</td>
<td>click to vote</td>
</tr>
<tr>
<td>ravi</td>
<td>kumar</td>
<td><input type="radio" id="voter_id"></td>
</tr>
</table>
</form>
<script type='text/javascript'>
var i=0,x=8;

function myfun(e){
	alert(e.target.innerText);
	alert(e.target.parentNode.innerText);
	 //x=e.target.innerText;
	
	alert(e.target.parentNode.innerText);
	i=i+1;
	alert(i);
}


</script>
<?php $xx="<script type='text/javascript'>document.write(x)</script>";
echo $xx;
 
echo $xx;
?>
</body>
</html>
<input type='submit' value='Click To Vote' name='vote_button' id='vote_button' >
