<?php
///include "header.php";
//include"side_bar.php";
include"connection.php";
$q = $_GET['q'];
?>
<?php
						
	$query=mysqli_query($con,"SELECT * from `item` where `item`='$q'");
						
	while($row=mysqli_fetch_array($query))
	{
		//echo "unit: ".$row['unit'];
		//echo "<br>";
		//echo "price: ".$row['price'];
		?>
		<!--Unit<br><input type="text" value=""><br>-->
		<div class="col-md-1">
		</div>
		<div class="col-md-2"><input type="text" name="price" id="price" style="width:100px; height:40px;"  readonly placeholder="Price" class="form-control" value=" <?php echo $row['price'];?>">
		<?php
		}
		?></div>
		
		<div class="col-md-2"><input type="text" id="unit" name="unit[]" class="form-control" placeholder="Quantity" style="width:100px;height:40px;" onblur="
		var price=document.getElementById('price').value;
		var unit=document.getElementById('unit').value;
		var result=price*unit;
		document.getElementById('total').value=result;"></div>
		<div class="col-md-2">		
		<input type="text" style="width:300px;height:40px;"id="total"   readonly class="form-control" placeholder="Total" name="amount[]"></div>
		
		
		<!--Total after Tax<input type="text" id="t" name="f_p" class="form-control" onblur="
		var tax=parseInt(document.getElementById('checkbox').value);
		var result=parseInt(document.getElementById('total').value);
		var r=result+(result*tax)/100;
		document.getElementById('t').value=r;">
		
		
						
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--Add more file-->
		<!--<div class="row">
		<div class="col-sm-8 col-xs-8">
			
				<div class="field_wrapper">                                  

					<div class="form-group">
						
					</div> 
				</div>
				<div class="form-group change">
					
						<a href="javascript:void(0);" class="add_button btn btn-info" title="Add field" class="text-right"> Add More</a></a>
				</div>
		
		<button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i> Submit</button>
		<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>

		</div>
	</div>
	<!--END OF ADD MORE-->
	<!--STARTING OF JQUERY FILE-->
<!--	<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_button'); //Add button selector
var wrapper = $('.field_wrapper'); //Input field wrapper
var fieldHTML = '<div> Price<input type="text" class="form-control"style="width:300px;height:50px" name="price[]" required><br><br>Unit<input type="text" class="form-control"style="width:300px;height:50px" name="unit[]"><br><br>Amount<input type="text" class="form-control"style="width:300px;height:50px" name="amount[]"><br><a href="javascript:void(0);" class="remove_button" title="Remove field"><button class="btn btn-danger">Remove</button></a></div>'; //New input field html 
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
	
	
	
	
	<!--END OF JQUERY FILE-->