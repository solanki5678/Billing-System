<?php
include "header.php";
include "side_bar.php";
include "connection.php";
ob_start();
error_reporting (0);
if(isset($_GET['delete']))
{
		$x=mysqli_query($con,"update `bill` set `trash`=1 where `id`='$_GET[delete]'");
		

}
?>

				<div class="" style="background-color:white;color:black;padding-left:50px ">	<br><br><br><br>
				<h2><center>Manage & Print your Bill here</center></h2>
				<div class="container">
				<table  class="table"border="1"><br><br>
				<tr>
				<th>Date</th>
				<th>Bill no</th>
				<th>Name</th>
				<th>Contact</th>
				<th>Amount</th>
				<th>Action</th>
				</tr>
				<?php
						$query=mysqli_query($con,"SELECT * from `bill` where `trash`='null'");
						while($row=mysqli_fetch_array($query))
						{
				?>
				<tbody>
				<tr>
				<td>
				<?php echo $row['date'];?>
				</td>
				<td>
				<?php echo $row['bill_no'];?>
				</td>
				<td>
				<?php echo $row['name'];?>
				</td>
				<td>
				<?php echo $row['contact'];?>
				</td>
				<td>
				<?php echo $row['amount'];?>
				</td>
				<div>
				<center>
				<td>
				<div>
				<center>
				<table border="1">
				<tr>
				<td>
				<a href="edit_bill.php?update=<?php echo $row['id'];?>">
				<span class="glyphicon glyphicon-edit" style="color:black"></span>
				</td>
				</a>
				</center>
				<td>
				<center><a href="manage_bill.php?delete=<?php echo $row['id'];?>">
				<span class="glyphicon glyphicon-trash"></span>
				</td>
				</a></center>
				<td>
				<center><a href="print_bill.php?invoice=<?php echo $row['id'];?>">
				<span class="glyphicon glyphicon-print"></span>
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
