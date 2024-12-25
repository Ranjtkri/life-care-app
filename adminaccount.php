<?php

include("dbconnection.php");
include("header.php");
?>
<style>
.submit-des
{
	border-radius:20px;
	height:30px;
	background-color:blue;
	color:white;
}
table
{
	border:none;
}
td
{
	border:none;
}
h1
{
	color:blue;
}
</style>
<div class="wrapper col2">
  <div id="breadcrumb">

<div class="dropdown">
<strong>Admin Dashboard</strong>
</div>


  </div>
</div>
<div class="wrapper col4">
  <div id="container">
  <p><table><tr><td><form method="get" action=""><strong>Date -</strong> <input type="date" name="date" value="<?php echo $_GET[date]; ?>" ></td><td><button class="submit-des" name="submit" value="Submit">SEARCH</button></form></td></tr></table></p>
    <table>
	<tr><td><h1>Number of Appointment Records :     </td><td>
    <?php
	$sql = "SELECT * FROM appointment WHERE status='Active'";
	if(isset($_GET[date]))
	{
		$sql = $sql . " AND appointmentdate ='$_GET[date]'";
	}
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1></td>
<tr>
<tr>
<td>	
    <h1>Number of Billing Reports : </td>
	<td>
    <?php
	$sql = "SELECT * FROM billing WHERE billingid !='0'";
	if(isset($_GET[date]))
	{
		$sql = $sql . " AND billingdate ='$_GET[date]'";
	}
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
	</td>
	</tr>
  <tr><td> 
    <h1>Number of Patient Records : </td>
	<td>
    <?php
	$sql = "SELECT * FROM patient WHERE status='Active'";
	if(isset($_GET[date]))
	{
		$sql = $sql . " AND admissiondate ='$_GET[date]'";
	}
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
	</td>
	</tr>
    </h1>  
<tr>	
   <td> <h1>Number of Treatment Records : </td>
  <td>  <?php
	$sql = "SELECT * FROM treatment_records WHERE status='Active'";
	if(isset($_GET[date]))
	{
		$sql = $sql . " AND treatment_date  ='$_GET[date]'";
	}
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
    </td>
	</tr>
<tr>
    <td><h1>Number of Prescription  :  </td>
<td> <?php
	$sql = "SELECT * FROM prescription WHERE status='Active'";
	if(isset($_GET[date]))
	{
		$sql = $sql . " AND prescriptiondate   ='$_GET[date]'";
	}
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
</td>
</tr>
    <br>
<hr>
   <tr>
<td>   
    <h1 style="color:rgba(0,4,70,1.00)"> &nbsp; Database Records</h1>
   
   </td><tr>
  <tr><td>
    <h1>Number of Prescription Records : </td>
   <td> <?php
	$sql = "SELECT * FROM prescription_records WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
	</td>
	</tr>
<tr><td>
    <h1>Number of Treatment Types : </td>
    <td><?php
	$sql = "SELECT * FROM treatment WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
    
  </td>
  </tr>
  
  <tr>
  <td>
    <h1>Number of Admin records :  
    <?php
	$sql = "SELECT * FROM admin WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
	</td>
	</tr>
<tr>
<td>
    <h1>Number of Department Records : </td>
<td>
    <?php
	$sql = "SELECT * FROM department WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
</td>
</tr>
<tr><td>
     <h1>Number of Doctor Records : </td>
	 <td>
    <?php
	$sql = "SELECT * FROM doctor WHERE status='Active' ";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
	</td>
	</tr>
<tr><td>
 <h1>Number of Doctor Timings Records : </td>
 <td>
    <?php
	$sql = "SELECT * FROM doctor_timings WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
	</td>
</tr>
<tr><td>
    <h1>Number of Billing Records : </td>
	<td>
    <?php
	$sql = "SELECT * FROM billing_records WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
    </h1>
	</td>
	</tr>
	</table>
  </div>
</div>

    <div class="clear"></div>
  </div>
</div>
<?php
include("footer.php");
?>