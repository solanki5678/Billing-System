<?php
include "connection.php";
include "header.php";
include "side_bar.php";
$item=$_GET['q'];
?>
<div class="" style="background-color:lightgrey;color:black;padding-left:330px ">	<br><br><br>
				<select onchange="item(this.value)">
				<option>Click here</option>
					<?php
						$query=mysqli_query($con,"SELECT * from `category` where `item`='$item'");
						while($row=mysqli_fetch_array($query))
						{
					?>
					<!--<form method="post">-->
						<option value="<?php echo $row['category'];?>"><?php echo $row['category']?></option>

					<?php
					 }
					?>
					</select>
