<?php
include "connection.php";
include "header.php";
include "side_bar.php";
					if(isset($_POST['submit']))
					{
					$num=count($_POST['item']);
					if($num>=1)
					{
					for($i=0;$i<$num;$i++)		
					{		
					$category = $_POST['category'];
					$item=$_POST['item'][$i];
					$unit=$_POST['unit'][$i];
					$price=$_POST['price'][$i];
					$st=mysqli_query($con,"insert into item(`category`,`item`,`unit`,`price`) values('$category','$item','$unit','$price')");
					}
					}
					}
?>
					<form method="post">
					<div class="well"><br><br><br>
					<center><h3>Add more items to your Category</h3></center>
					<br>
					
					<select style="width:300px;height:50px" name="category">
					<option value=""><center>Add items to your Category</center></option><br>
					<?php
						$query=mysqli_query($con,"SELECT * from `menu` where `trash`='null'");
						while($row=mysqli_fetch_array($query))
						{
					?>
					<!--<form method="post">-->
						<option value="<?php echo $row['id'];?>"><?php echo $row['category']?></option>
						
					<?php
					 }
					?>
					</select><br>
						<br><input type="text"  class="form-control" style="width:300px;height:50px" placeholder="Item" name="item[]"><br>
						<input type="text"  class="form-control" style="width:300px;height:50px" placeholder="unit"name="unit[]"><br>
						<input type="text"   class="form-control"style="width:300px;height:50px" placeholder="price" name="price[]"><br>
						
					
			<div class="row">
		<div class="col-sm-8 col-xs-8">
			
				<div class="field_wrapper">                                  

					<div class="form-group">
						
							
					</div> 
				</div>
				<div style="float:right">
					
						<a href="javascript:void(0);" class="add_button btn btn-info" title="Add field" class="text-right"> Add More</a></a>
				</div>
		
		<button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
		<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>

		</div>
	</div>		
					</form>
				
					</div>
					
<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_button'); //Add button selector
var wrapper = $('.field_wrapper'); //Input field wrapper
var fieldHTML = '<div>Add more Items<input type="text" class="form-control"style="width:300px;height:50px" placeholder="Item" name="item[]" required>&nbsp;<input type="text" class="form-control"style="width:300px;height:50px"  placeholder="unit"name="unit"><br><input type="text" class="form-control"placeholder="price"style="width:300px;height:50px" name="price[]"><br><a href="javascript:void(0);" class="remove_button" title="Remove field"><button class="btn btn-danger">Remove</button></a></div>'; //New input field html 
var x = 1; //Initial field counter is 1
$(addButton).click(function(){ //Once add button is clicked
if(x < maxField){ //Check maximum number of input fields
x++; //Increment field counter
$(wrapper).append(fieldHTML); // Add field html
}
});
$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
e.preventDefault();
$(this).parent('div').remove(); //Remove field html
x--; 
});
});
</script>