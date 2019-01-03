<?php
include "header.php";
include "side_bar.php";
include "connection.php";
//error_reporting(0);
if($_POST)
{
	$id=$_GET['update'];
	extract($_POST);
	
	//echo "update `menu` SET `category`='$category' where `id`='$id'";
	mysqli_query($con,"update `bill` SET  `date`='$date',`bill_no`='$bill_no',`name`='$name' ,`contact`='$contact',`amount`='$amount' where `id`='$id'");
	
	

};
	$sql="select * from `bill` where id='$_GET[update]'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
?>
	<form action="" method="POST">
	<div class="container" style="background-color:white;border-color:black;padding-left:100px">	<br><br><br><br><br><br>
	<h2><center>Edit your Bill Info Here</center></h3><br><br>
	<table>
	<table>
	<tr>
	<td>
	Date<input type="text" name="date"  style="width:300px;height:40px;border-radius:5px"class="form-control" value="<?php echo $row['date']?>">
	Bill No<input type="text" name="bill_no"  style="width:300px;height:40px;border-radius:5px"class="form-control"value="<?php echo $row['bill_no']?>">
	Name<input type="text" name="name"  style="width:300px;height:40px;border-radius:5px"class="form-control"value="<?php echo $row['name']?>">
	<!--<input type="text" name="contact"  style="width:200px;height:40px;border-radius:5px"class="form-control"value="<?php echo $row['contact']?>">-->
	Contact<input type="text" name="contact"  style="width:300px;height:40px;border-radius:5px"class="form-control"value="<?php echo $row['contact']?>"><br>

	

	<!--<a href="manage_category.php">0-->
	<input type="submit" value="update"style="width:70px;height:40px" class="btn btn-primary">
	</td>
	</tr>
	</table>
		<br><br><br><br><br>

	
	</div>
	
	</form>


















