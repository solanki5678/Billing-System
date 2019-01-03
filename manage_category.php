<?php
include "header.php";
include "side_bar.php";
include "connection.php";
ob_start();
if(isset($_GET['delete']))
{
		$x=mysqli_query($con,"update `menu` set `trash`=1 where `id`='$_GET[delete]'");
		

}
?>

				<div class="" style="background-color:white;color:black;padding-left:100px ">	<br><br><br><br><br>
				<h2>Manage your Category Here</h2>
				<div class="container">
				<table  class="table"border="1"><br><br>
				<tr>
				<th>Categories</th>
				<th>Action</th>
				</tr>
				<?php
						$query=mysqli_query($con,"SELECT * from `menu` where `trash`='null'");
						while($row=mysqli_fetch_array($query))
						{
				?>
				<tbody>
				<tr>
				<td>
				<?php echo $row['category'];?>
				<td>
				<div>
				<center>
				<table border="1">
				<tr>
				<td>
				<a href="edit_category.php?update=<?php echo $row['id'];?>">
				<span class="glyphicon glyphicon-pencil" style="color:black"></span>
				</td>
				</a>
				</center>
				<td>
				<center><a href="manage_category.php?delete=<?php echo $row['id'];?>">
				<span class="glyphicon glyphicon-trash"></span>
				</td>
				</a>
				</tr>
				</table>
				</center>
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
