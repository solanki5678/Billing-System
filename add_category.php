<?php
include "header.php";
include "side_bar.php";
include "connection.php";

if(isset($_POST['submit'])){
$category=$_POST['category'];
$st=mysqli_query($con,"insert into menu(`category`) values('$category')");
if($st)
{
	echo "registered";
}
else
{
	echo"error";
}
};
?>	
	<form method="post">
	<div class="" style="background-color:lightgrey;color:black;padding-left:330px">	<br><br><br>
	Add  your Item<br><input type="text" style="width:300px;height:50px" class="form-control" name="category" placeholder="Enter category eg.Coffe"required>
	<br><br>
	<div class="container" style="height:20px">
	<button type="submit"  name="submit" class="btn btn-danger btn-lg" >Submit</button>
	</div>
	<br><br><br><br>
	</div>
	
</form>	