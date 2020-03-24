<html>
<head>
<h1><center>Personal Details</center></h1>
<style>
table {
   width:100%;
 }
table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
 }
th, td {
 padding:15px;
 text-align: left;
 }
table#01 tr:nth-child(even) {
  background-color: #eee;
}
table#01 tr:nth-child(odd) {
  background-color: #fff;
}

table#t01 th {
  background-color: black;
 color: white;

}
body
{
	background-color:#329da8 ;
}
</style>
</head>
	<body>
	<a href="cr1.php"></a>
	<div  align="left">
	<form action="cr2.php" method="POST">
     <label for="name">Name   :   </label>
  		<input type="text" id="name" name="name" required="required"></br></br>
	<input type="submit" class="button" value="OK"></br><br></br>
</div>
</form>
<form action="cr3.php" method="post" align="center">
  <input type="submit"  class="button" value="Next" >
</form>

<?php
	$dbh=mysqli_connect('localhost','root','','db');

	if(!$dbh)
	{
		die('Could not Connect My Sql:' .mysqli_error());
	}
	if(isset($_POST['name']))
	{
		$n=$_POST['name'];
		if($n=="")
			echo "enter a name";
		else
		{
			$sql=mysqli_query($dbh,"SELECT * FROM k1 WHERE name='$n'")or die("no match found");
			while ($row = mysqli_fetch_array($sql))
		{
?>

	
	<h2 align="left"><B><u>Personal Details</u></B></h2>
	
		<h3> Name : <?php echo $row['name'];?> </h3>
		<h3> Dob : <?php echo $row['contact'];?></h3>
		<h3> Phone No : <?php echo $row['email'];?></h3>
		<h3> address : <?php echo $row['address'];?></h3>
		<h3> E-mail : <?php echo $row['address2'];?></h3>	
	
	<h2 align="left"><b><u>Educational Details</u></b></h2>
			<table >
			<tr>
			<th>COURSE</th>
			<th>INSTITUTION</th>
			<th>YEAR OF PASSING</th>
			<th>RESULT</th>
			</tr>
			<tr>
			<td><?php echo $row['pg'];?></td>
			<td><?php echo $row['pginst'];?></td>
			<td><?php echo $row['pgyear'];?></td>
			<td><?php echo $row['pgres'];?></td>
			</tr>
			<tr>
			<td><?php echo $row['ug'];?></td>
			<td><?php echo $row['uginst'];?></td>
			<td><?php echo $row['ugyear'];?></td>
			<td><?php echo $row['ugres'];?></td>
			</tr>
			<tr>
			<td><?php echo $row['puc'];?></td>
			<td><?php echo $row['pucinst'];?></td>
			<td><?php echo $row['pucyear'];?></td>
			<td><?php echo $row['pucres'];?></td>
			</tr>
			<tr>
			<td><?php echo $row['sslc'];?></td>
			<td><?php echo $row['sslcinst'];?></td>
			<td><?php echo $row['sslcyear'];?></td>
			<td><?php echo $row['sslcres'];?></td>
			</tr>
		</table>

	<br>
	<h2 align="left"><b><u>Project Details</u></b></h2>
	
			
			PROJECT:<br> 
		<?php echo $row['pro1'];?><br>
		DESCRIPTION:<br>
		<?php echo $row['des1'];?><br><br>
	
		PROJECT2:<br>
		<?php echo $row['pro2'];?><br>
		DESCRIPTION2:<br>
		<?php echo $row['des2'];?>
        
     <br>

     <br>
	
	</table>
	<h2 align="left">Hobbies</h2>
	<h5><?php echo $row['hobbies'];?></h5>
	<br>

	<h2 align="left">Strengths</h2>
	<h5><?php echo $row['strengths'];?></h5>
	<br><br>
</form>

	
<?php
		}
	}
	}	
?>	

</body>
</html>			