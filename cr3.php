<html>
<head>
<h1><u><center>INFORMATION</center></u></h1>
</head>
<body>
<?php
	$dbh=mysqli_connect('localhost','root','','db');

	if(!$dbh)
	{
		die('Could not Connect My Sql:' .mysqli_error());
	}

	if(isset($_POST['Delete']))
	{
		$Dname=$_POST['Dname'];
		mysqli_query($dbh,"DELETE FROM k1 WHERE id='$Dname'")or die("no match found");
		echo"<h3>Record Deleted Successfully!</h3>";
	}
	if(isset($_POST['update']))
	{
		$Uid=$_POST['Uid'];
		$name=$_POST['name'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $address2=$_POST['address2'];
  $pg=$_POST['pg'];
  $pginst=$_POST['pginst'];
  $pgyear=$_POST['pgyear'];
  $pgres=$_POST['pgres'];
  $ug=$_POST['ug'];
  $uginst=$_POST['uginst'];
  $ugyear=$_POST['ugyear'];
  $ugres=$_POST['ugres'];
  $puc=$_POST['puc'];
  $pucinst=$_POST['pucinst'];
  $pucyear=$_POST['pucyear'];
  $pucres=$_POST['pucres'];
  $sslc=$_POST['sslc'];
  $sslcinst=$_POST['sslcinst'];
  $sslcyear=$_POST['sslcyear'];
  $sslcres=$_POST['sslcres'];
  $pro1=$_POST['pro1'];
  $des1=$_POST['des1'];
  $pro2=$_POST['pro2'];
  $des2=$_POST['des2'];
  $hobbies=$_POST['hobbies'];
  $strengths=$_POST['strengths'];

		mysqli_query($dbh,"UPDATE k1 SET name='$name',contact='$contact',email='$email',address='$address',address2='$address2',pg='$pg',pginst='$pginst',pgyear='$pgyear',pgres='$pgres',ug='$ug',uginst='$uginst',ugyear='$ugyear',ugres='$ugres',puc='$puc',pucinst='$pucinst',pucyear='$pucyear',pucres='$pucres',sslc='$sslc',sslcinst='$sslcinst',sslcyear='$sslcyear',sslcres='$sslcres',pro1='$pro1',des1='$des1',pro2='$pro2',des2='$des2',hobbies='$hobbies',strengths='$strengths' WHERE id='$Uid'")or die("no match found");
		echo "Data updated Successfully";
		header('refresh:0');
	}
?>
<div class="container" align="center">
	<table border="8px">
		<tr>
			<th>Update</th>
			<th>Name</th>
			<th>Contact</th>
			<th>Email</th>
			<th>Address</th>
      <th>Address2</th>
			<th>Delete</th>
			
		</tr>
		
<?php
	$sql=mysqli_query($dbh,"SELECT * FROM k1")or die("no match found");
		while($row=mysqli_fetch_array($sql))
			{
?>
		<tr>
			<td>
				<form method="post" action="cr3.php">
					<input type="hidden" name="Sid" value="<?php echo $row['id'];?>">
					<input type="Submit" class="button1" name="Select" value="Select">
				</form>
			</td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['contact'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['address2'];?></td>
			<td>
				<form method="post" action="cr3.php">
					<input type="hidden" name="Dname" value="<?php echo $row['id'];?>">
					<input type="Submit" name="Delete" class="button1" value="Delete">
				</form>
			</td>
		</tr>
<?php
	}
?>
		</table>
</div>

<?php
if(isset($_POST['Select']))
	{
		$Uid=$_POST['Sid'];
	$sql=mysqli_query($dbh,"SELECT * FROM k1 WHERE id='$Uid'")or die("no match found");
		while($row=mysqli_fetch_array($sql))
			{
?>
<div align="center" class="container">
	<form method="post" action="cr3.php">
<h1 align="center">Please Fill the Form</h1>
	<h2>Personal Details</h2>
	<form action="cr3.php" method="post">
  	Name: <input type="text" id="name" name="name" required="required" value="<?php echo $row['name'] ?>"></br></br>
  	CONTACT: <input type="text" id="contact" name="contact" required="required" value="<?php echo $row['contact'] ?>"></br></br>
  	EMAIL: <input type="text" id="email" name="email" required="required" value="<?php echo $row['email'] ?>"></br></br>
  	Address :<input type="text" id="address" name="address" required="required" value="<?php echo $row['address'] ?>"></br></br>
  	ADDRESS2 :  <input type="text" id="address2" name="address2" required="required" value="<?php echo $row['address2'] ?>"></br></br>

	
	<h2>Educational Details</h2>
	<h4>Post Graduation</h4>
  		Course   :<input type="text" id="pg" name="pg" required="required" value="<?php echo $row['pg'] ?>"></br></br>
  		Institute:<input type="text" id="pginst" name="pginst" required="required" value="<?php echo $row['pginst'] ?>"></br></br>
  		year Of Passing:<input type="text" id="pgyear" name="pgyear" required="required" value="<?php echo $row['pgyear'] ?>"></br></br>
  		Result:<input type="text" id="pgres" name="pgres" required="required" value="<?php echo $row['pgres'] ?>"></br></br>

  		<h4>Under Graduation:-</h4>
  		Course   :<input type="text" id="ug" name="ug" required="required" value="<?php echo $row['ug'] ?>"></br></br>
  		Institute:<input type="text" id="uginst" name="uginst" required="required" value="<?php echo $row['uginst'] ?>"></br></br>
  		year Of Passing:<input type="text" id="ugyear" name="ugyear" required="required" value="<?php echo $row['ugyear'] ?>"></br></br>
  		Result:<input type="text" id="ugres" name="ugres" required="required" value="<?php echo $row['ugres'] ?>"></br></br>

  		<h4>PUC:-</h4>
  		Course   :<input type="text" id="puc" name="puc" required="required" value="<?php echo $row['puc'] ?>"></br></br>
  		Institute:<input type="text" id="pucinst" name="pucinst" required="required" value="<?php echo $row['pucinst'] ?>"></br></br>
  		year Of Passing:<input type="text" id="pucyear" name="pucyear" required="required" value="<?php echo $row['pucyear'] ?>"></br></br>
  		Result:<input type="text" id="pucres" name="pucres" required="required" value="<?php echo $row['pucres'] ?>"></br></br>

		<h4>SSLC:-</h4>
  		Course   :<input type="text" id="sslc" name="sslc" required="required" value="<?php echo $row['sslc'] ?>"></br></br>
  		Institute:<input type="text" id="sslcinst" name="sslcinst" required="required" value="<?php echo $row['sslcinst'] ?>"></br></br>
  		year Of Passing:<input type="text" id="sslcyear" name="sslcyear" required="required" value="<?php echo $row['sslcyear'] ?>"></br></br>
  		Result:<input type="text" id="sslcres" name="sslcres" required="required" value="<?php echo $row['sslcres'] ?>"></br></br>

        <h4>Project Details:-</h4>
  		Project1   :<input type="text" id="pro1" name="pro1" required="required" value="<?php echo $row['pro1'] ?>"></br></br>
  		Description:<input type="text" id="des1" name="des1" required="required" value="<?php echo $row['des1'] ?>"></br></br>

  		Project2   : <input type="text" id="pro2" name="pro2" required="required" value="<?php echo $row['pro2'] ?>"></br></br>
  		 Description:<input type="text" id="des2" name="des2" required="required" value="<?php echo $row['des2'] ?>"></br></br>
  		
  
  	
  		Hobbies:<input type="text" id="hobbies" name="hobbies" required="required" value="<?php echo $row['hobbies'] ?>"></br></br>
  		Strenghths:<input type="text" id="strengths" name="strengths" required="required" value="<?php echo $row['strengths'] ?>"></br></br>

	<input type="hidden" name="Uid" value="<?php echo $row['id'] ?>" >
	<input type="submit"  class="button" name="update" value="Update" >
	
	</form>
	</div>
	<?php
	}
}
?>
<form action="cr1.php" method="post" align="center">
	<input type="submit"  class="button" value="Back" >
</form>

</body>
</html>				