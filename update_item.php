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
	mysqli_query($con,"update `item` SET `item`='$item',`unit`='$unit',`price`='$price' where `id`='$id'");
	
	

};
	$sql="select * from `item` where id='$_GET[update]'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
?>
	<form action="" method="POST">
	<div class="well">	<br><br><br><br>
	<h3><center>Update your Items Here</h3><br><br><br>
	<div class="container">
	Update Items
	<input type="text" name="item"  style="width:300px;height:50px"  class="form-control"value="<?php echo $row['item']?>"><br>
	<input type="text" name="unit"   style="width:300px;height:50px"  class="form-control"value="<?php echo $row['unit']?>"><br>
	<input type="text" name="price"  style="width:300px;height:50px" class="form-control"	 value="<?php echo $row['price']?>"><br>
	<input type="submit" value="update" class="btn btn-primary">
	<div>
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
                            
     