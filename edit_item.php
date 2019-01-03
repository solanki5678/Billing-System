<?php
include "header.php";
include "side_bar.php";
include "connection.php";
ob_start();
if(isset($_GET['delete']))
{
		$x=mysqli_query($con,"update `item` set `trash`=1 where `id`='$_GET[delete]'");
		

}
?>

				<div><br><br><br><br>
				<h3><center>Manage your Item Here</center></h3><br>
				<div class="container">
				<table  class="table"border="1"><br><br>
				<tr>
				<th>Item</th>
				<th>Unit</th>
				<th>Price</th>
				<th>Action</th>
				</tr>
				<?php
						$query=mysqli_query($con,"SELECT * from `item` where `trash`='null'");
						while($row=mysqli_fetch_array($query))
						{
				?>
				<tbody>
				<tr>
				<td>
				<?php echo $row['item'];?>
				</td>
				<td>
				<?php echo $row['unit'];?>
				</td>
				<td>
				<?php echo $row['price'];?>
				</td>

				<td>
				<div>
				<center>
				<table border="1">
				<tr>
				<td>
				<a href="update_item.php?update=<?php echo $row['id'];?>">
				<span class="glyphicon glyphicon-pencil" style="color:black"></span>
				</td>
				</a>
				</center>
				<td>
				<center><a href="edit_item.php?delete=<?php echo $row['id'];?>">
				<span class="glyphicon glyphicon-trash"></span>
				</td>
				</a>
				</table></center>
				</div>
				</td>
				</td>
				</tr>
				</tbody>
				<?php
				}
				?>
				</table>
				</div>
				<br><br><br><br>
				</div>
				</form>	
