<?php
include "header.php";
include "side_bar.php";
include "connection.php";

ob_start();
?>

				<div class="" style="background-color:lightgrey;color:black;padding-left:330px ">	<br><br><br>
				<form method="post" action="upload.php">
				<select name="item">
				<option>Click here</option>
				<?php
						$query=mysqli_query($con,"SELECT * from `menu`");
						while($row=mysqli_fetch_array($query))
						{
				?>
	<!--<form method="post">-->
	<option value="<?php echo $row['item'];?>"><?php echo $row['item']?></option>

	<?php
	 }
	?>
	</select>
	<br>
	<input type="text" name="cat1">
	<input type="text" name="cat2">
	<input type="text" name="cat3">
	<input type="submit" value="submit">	
	</form>
	
	<br><br><br><br>
	</div>
	<div id="1">
	</div>
	
		
	
			
	
	
	
	
	
	