<?php
//include "header.php";
//include"side_bar.php";
include"connection.php";
$q = $_GET['q'];
?>
<script src="ajax.js">
</script>
<html>
<body>
<div class="col-md-10">
	<div class="col-md-2">
	<div class="field_wrapper">
	<select style="width:200px; height:40px;" name="item[]" onchange="showUser2(this.value)">
		<option value=""><center>Select Menu Head First</center></option>
		<?php
			$query=mysqli_query($con,"SELECT * from `item` where category='$q'");
			while($row=mysqli_fetch_array($query))
			{
		?>
				<option value="<?php echo $row['item']; ?>"><?php echo $row['item'];?></option>

		<?php
			}
		?>
	</select>
	</div>
	</div><div class="col-md-10">
	<div id="txtHint2"></div></div>
	</div>
	
</body>
</html>
	