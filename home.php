<?php
include "header.php";
include "side_bar.php";
include "connection.php";
$item=$_POST['item'];
$st=mysqli_query($con,"insert into menu(`item`) values('$item')");
if($st)
{
	echo "registered";
}
else
{
	echo"error";
}
?>	<br><br><br>
	<form method="post">
	<div class="" style="background-color:lightgrey;color:black;padding-left:330px ">	<br><br><br>
	Add Item<br><input type="text" style="width:300px;height:50px" class="form-control" name="item">
	<br><br>
	<div class="container" style="height:20px">
	<button type="submit" class="btn btn-danger btn-lg" >Submit</button>
	</div>
	<br><br><br><br>
	</div>
	
</form>