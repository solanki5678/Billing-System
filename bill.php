<?php
include "header.php";
include"side_bar.php";
include"connection.php";
$q = $_GET['q'];
if(isset($_POST['submit']))
{
	extract($_POST);
	for($i=0;$i<count($category);$i++)
	{
	$bill_no=$_POST['bill_no'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$category= $category[$i];
	$item=$item[$i];
	$unit=$unit[$i];
	$amount=$amount[$i];
	$date=$_POST['date'];
	$price=$_POST['price'];
	$waiter=$_POST['waiter'];
	$discount=$_POST['discount'];
	$final_price=$_POST['final_price'];
	// echo "INSERT INTO `bill`(`bill_no`, `name`, `email`, ` contact`, `category`, `item`, `unit`, `amount`,  `date`, `price`) VALUES ('$bill_no','$name','$email','$contact','$category','$item','$unit','$amount','$date','$price')";
	 
	 
	 $st=mysqli_query($con,"INSERT INTO `bill`(`bill_no`, `waiter`, `name`, `address`, `contact`, `category`, `item`, `unit`, `amount`, `price`, `discount`, `final_price`, `date`) VALUES ('$bill_no','$waiter','$name','$address','$contact','$category','$item','$unit','$amount','$price','$discount','$final_price','$date')");
	}
}
?>
<?php 
$count = $_POST['count'];
?>
<html>
<head>
<script src="ajax.js">

</script>
</head>
<body>

<form action="" id="form" method="post" enctype="multipart/form-data">
<div class="well" >	<!--style="background-color:white; color:black;  padding-left:px "--><br>
<h1><center>Fill the entries </center></h1>
 <div class="row">
 <div class="col-sm-6">
	

											

											

											

												<div class="form-group">

													<label class="control-label">


													</label>
														<div class="row">

														<div class="col-md-4">
															<label class="control-label">	Date	</label>
														
															<input type="date" style="width:576px" placeholder="Date" id="" name="date" class="form-control" value="" >

														</div>

												</div>

												</div>

										

											

											

											<div class="form-group">

											<label class="control-label">Bill No </label>

								           <input type="text" class="form-control" id="bill_no" placeholder="Bill Number" name="bill_no" value="" >

										   </div>

	
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="col-sm-4">
	   <div class="form-group">

											<label class="control-label">Customer Name</label>

								           <input type="text" class="form-control" id="c_name"placeholder="Name" name="name" required="" value="">

										   </div>

										   

										   <div class="form-group">

											<label class="control-label">Customer Mobile No. </label>

								           <input type="text" class="form-control" id="mkmk" placeholder="Contact"name="contact"  value="">
<span id="errmsg1" style="color:red"></span>
										   </div>

										   

										   

										   <div class="form-group">

											<label class="control-label">Customer Address </label>

								           <input type="text" class="form-control" id="address"placeholder="Address" name="address" value=""><br>

										   </div>

</div>
	</div>



<div class="row">
<div class="col-md-12">
	<div class="col-md-2">
		<div class="field_wrapper">
			<select  onchange="showUser(this.value)"style="width:200px;height:40px;"  name="category[]">
			<option value=""><center>Select</center></option>
					<?php
						$query=mysqli_query($con,"SELECT * from `menu`");
						while($row=mysqli_fetch_array($query))
						{
					?>
					<!--<form method="post">-->
						
						<option value="<?php echo $row['id']; ?>"><?php echo $row['category'];?></option>
						
					<?php
					 }
					?>

			</select>
			
		</div>	

	</div>
						
					<div id="txtHint">
					</div>			
						<div style="float:right">
						<label for=""></label>
						<a href="javascript:void(0);" class="add_button btn btn-info" title="add field" class="text-right"> Add More</a>
						</div></div>		
						</div>	
						
						<div class="row">
						<div class="col-md-4">
						<label class="control-label">Discount</label>
														
						<input type="text"style="width:400px;height:40px;" id="discount" placeholder="Discount" name="discount" class="form-control" onblur="
						var discount=document.getElementById('discount').value;
						var result=document.getElementById('total').value;
						var res=result - (result * (discount/ 100));
						document.getElementById('totl').value=res;">
						</div>
						<div class="col-md-1"></div>
	
		<div class="col-md-4">
		<label class="control-label">Total</label>
														
		<input type="text" style="width:400px;height:40px"id="totl" class="form-control"  placeholder="Total" name="final_price">
		
		</div>							
			<div class="col-md-10">
                
                                <div class="form-group ">
                                                <label>Taxes Applicable</label><br>
                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">GST @ 5 (5%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">SGST @ 14 (14%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">SGST @ 9 (9%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">SGST @ 2.5 (2.5%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">CGST @ 9 (9%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">CGST @ 6 (6%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">IGST @ 26 (26%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">IGST @ 18 (18%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">IGST @ 5 (5%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">IGST @ 12 (12%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">SGST @ 9 (9%)
                                                                                </div>
                                                                                                                                                <div class="col-md-3">
                                                                                                <input type="checkbox" name="tax[]" value="">IGST @ 12 (12%)
                                                                                </div>
                                                                                                </div><br><br><br>

		
		
		
										
		
										<div class="col-md-6">	
										<div class="form-group">

											<label class="control-label">Waiter </label>

								           <input type="text"  style="width:400px;height:40px"class="form-control" id="firstname"  placeholder="Waiter's Name"name="waiter"  value=""><br><br>

										   </div>
										



					<center><input type="submit" value="submit" name="submit" style="height:40px;font-size:10px" class="btn btn-primary btn-block"></center><br><br><br><br>
					</div>	
					
					</div>
										
					
					
					
					
					
					
					
					</form>

</body>
</div>
<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_button'); //Add button selector
var wrapper = $('.field_wrapper'); //Input field wrapper
var fieldHTML = '<div><br><select  onchange="showUser(this.value)"style="width:200px;height:40px;"  name="category[]"> <option value=""><center>Select</center></option> <?php $query=mysqli_query($con,"SELECT * from `menu`"); while($row=mysqli_fetch_array($query)) { ?> <option value="<?php echo $row['id']; ?>"><?php echo $row['category'];?></option> <?php } ?> </select> <select style="width:200px; height:40px;" name="item[]" onchange="showUser2(this.value)"> <option value=""><center>Select Menu Head First</center></option> <?php $query=mysqli_query($con,"SELECT * from `item` where category='$q'"); while($row=mysqli_fetch_array($query)) { ?> <option value="<?php echo $row['id']; ?>"><?php echo $row['item'];?> </option> <?php } ?> </select> <a href="javascript:void(0);" class="remove_button" title="Remove field"> <button class="btn btn-danger">Remove</button></a></div>'; //New input field html 
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