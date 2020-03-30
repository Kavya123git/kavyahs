<html>

<head><h1><center>Personal Details</h1></center>
<style>
  body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

body {
  background-color:#329da8 ;
}

h1 {
  color: white;
  text-align: center;
}




</style>
</head>
<body>
  <h2>Please fill the details</h2>
  <form action="cr1.php" method="post">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Personal Information')">Personal Information</button>
  <button class="tablinks" onclick="openCity(event, 'Education & Projects')">Education & Projects</button>
  <button class="tablinks" onclick="openCity(event, 'Strengths & Hobbies')">Strengths & Hobbies</button>
</div>

<div id="Personal Information" class="tabcontent">
  <h3>Personal Info</h3>
  <table>
      <tr>
        <td>Name: </td>
        <td><input type="text" id="name" name="name" required="required"></br></br></td>
      </tr>
      <tr>
      <td>CONTACT: </td>
      <td>  <input type="text" id="contact" name="contact" required="required"></br></br></td>
    </tr>
    <tr>
      <td>EMAIL: </td>
      <td> <input type="text" id="email" name="email" required="required"></br></br></td>
      </tr>
      <tr>
      <td>Address :</td>
      <td><input type="text" id="address" name="address" required="required"></br></br></td>
    </tr>
    <tr>
      <td>ADDRESS2 : </td>
      <td> <input type="text" id="address2" name="address2" required="required"></br></br></td>
    </tr>
    </table>

</div>

<div id="Education & Projects" class="tabcontent">
  <table>
  <h1>Educational Details</h1>
    <h4>Post Graduation:-</h4>
      <tr>
      <td>Course   :</td>
      <td><input type="text" id="pg" name="pg" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Institute:</td>
      <td><input type="text" id="pginst" name="pginst" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Year Of Passing:</td>
      <td><input type="text" id="pgyear" name="pgyear" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Result:</td>
      <td><input type="text" id="pgres" name="pgres" required="required"></br></br></td>
    </tr>
  </table>

    
     <table>
      <h4>Under Graduation:-</h4>
      <tr>
        <td>Course   :</td>
        <td><input type="text" id="ug" name="ug" required="required"></br></br></td>
      </tr>
      <tr>
      <td>Institute:</td>
      <td><input type="text" id="uginst" name="uginst" required="required"></br></br></td>
    </tr>
    <tr>
      <td>year Of Passing:</td>
      <td><input type="text" id="ugyear" name="ugyear" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Result:</td>
      <td><input type="text" id="ugres" name="ugres" required="required"></br></br></td>
    </tr>
     </table>

     <table> 
      <h4>PUC:-</h4>
      <tr>
        <td>Course   :</td>
        <td><input type="text" id="puc" name="puc" required="required"></br></br></td>
      </tr>
      <tr>
      <td>Institute:</td>
      <td><input type="text" id="pucinst" name="pucinst" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Year Of Passing:</td>
      <td><input type="text" id="pucyear" name="pucyear" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Result:</td>
      <td><input type="text" id="pucres" name="pucres" required="required"></br></br></td>
    </tr>
</table>

<table>
    <h4>SSLC:-</h4>
    <tr>
      <td>Course   :</td>
      <td><input type="text" id="sslc" name="sslc" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Institute:</td>
      <td><input type="text" id="sslcinst" name="sslcinst" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Year Of Passing:</td>
      <td><input type="text" id="sslcyear" name="sslcyear" required="required"></br></br></td>
    </tr>
    <tr>
      <td>Result:</td>
      <td><input type="text" id="sslcres" name="sslcres" required="required"></br></br></td>
    </tr>
  </table>

  <table>
    <h4>Project Details:-</h4>
     <tr>
        <td>Project1   :</td>
        <td><input type="text" id="pro1" name="pro1" required="required"></br></br></td>
      </tr>
      <tr>
       <td>Description:</td>
       <td><input type="text" id="des1" name="des1" required="required"></br></br></td>
     </tr>
     <tr>
    

      <td>Project2   :</td>
       <td><input type="text" id="pro2" name="pro2" required="required"></br></br></td>
       </tr>
       <tr>
       <td>Description:</td>
       <td><input type="text" id="des2" name="des2" required="required"></br></br></td>
     </tr>
      </table>
      </br> 
</div>

<div id="Strengths & Hobbies" class="tabcontent">
  <table>
    <tr>
  <td>Hobbies:</td>
  <td><input type="text" id="hobbies" name="hobbies" required="required"></br></br></td>
</tr>
<tr>
    <td>Strenghths:</td>
    <td><input type="text" id="strengths" name="strengths" required="required"></br></br>  </td>
  </tr>
</table>
    <input type="submit" class="button" value="Submit">
</div>

  </div>
  
</form>
<form action="cr2.php" method="post" align="center">
  <input type="submit"  class="button" value="Next" >
</form>

<?php
$dbh=mysqli_connect('localhost','root','','db');

if(!$dbh)
{
  die('Could not Connect My Sql:' .mysql_error());
}
if(isset($_POST['name']))
{ 
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
  
  if($name!="")
  { 
  $query="INSERT INTO k1(name,contact,email,address,address2,pg,pginst,pgyear,pgres,ug,uginst,ugyear,ugres,puc,pucinst,pucyear,pucres,sslc,sslcinst,sslcyear,sslcres,pro1,des1,pro2,des2,hobbies,strengths) VALUES('$name','$contact','$email','$address','$address2','$pg','$pginst','$pgyear','$pgres','$ug','$uginst','$ugyear','$ugres','$puc','$pucinst','$pucyear','$pucres','$sslc','$sslcinst','$sslcyear','$sslcres','$pro1','$des1','$pro2','$des2','$hobbies','$strengths')";
  $result=mysqli_query($dbh,$query);
  echo "Information Stored Successfully";
  }
  else
    echo "Invalid Details";
}
?>

  <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   


</body>
</html>