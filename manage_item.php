<?php
include "header.php";
include "side_bar.php";
include "connection.php";

ob_start();
include "connection.php";
?>

				<div class="" style="background-color:lightgrey;color:black;padding-left:330px ">	<br><br><br>
				<table border="1"><br><br>
				<tr>
				<th>Categories</th>
				</tr>
				<?php
						$query=mysqli_query($con,"SELECT * from `menu`");
						while($row=mysqli_fetch_array($query))
						{
				?>
				<tr>
				<td>
				<?php echo $row['category'];?><br>
				</td>
				</tr>
				<?php
				}
				?>
				</table>
				<br><br><br><br>
				</div>
				</form>	
