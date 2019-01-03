<?php
include "header.php";
include "side_bar.php";
include "connection.php";
error_reporting(0);
if($_POST)
{
	$id=$_GET['update'];
	extract($_POST);
	
	//echo "update `menu` SET `category`='$category' where `id`='$id'";
	mysqli_query($con,"update `menu` SET `category`='$category' where `id`='$id'");
	
	

};
	$sql="select * from `menu` where id='$_GET[update]'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
?>
	<form action="" method="POST">
	<div class="container" style="background-color:white;border-color:black;padding-left:300px">	<br><br><br><br><br><br>
	<h3>Update your category here</h3><br><br>
	<table>
	<table>
	<tr>
	<td>
	<input type="text" name="category"  class="form-control" style="width:200px;height:50px"value="<?php echo $row['category']?>"><br><br>
	<a href="manage_category.php">
	<input type="submit" value="update" class="btn btn-primary" style="width:70px;height:40px" class="btn btn-primary">
	</a>
	</td>
	</tr>
	</table>
		<br><br><br><br><br>

	
	</div>
	
	</form>



















	<!--<table>
	<tr>
	<td><?php echo $count; ?></td>
	<td class="text-right">  <input type="hidden"  value="<?php echo $fetch['category'];?>"> 
	<button>
	<input type="submit" value="update" class="btn btn-primary btn-sm">
	<i class="fa fa-dot-circle-o"></i> 
	</button>
	<a href="edit_category.php?delete=<?php echo $fetch['category'];?>">
	<button>
	<input type="submit" value="delete" class="btn btn-danger btn-sm"></a>
	<i class="fa fa-ban"></i> 
	</button>
	</td>
	</tr>
								   
                                      
     </table>-->
                            
     