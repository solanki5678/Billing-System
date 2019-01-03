<?php
include "connection.php";
include "header.php";
include "side_bar.php";
if($_POST)
{
	extract($_POST);
	//echo "insert into `menu`(`menu_name`) values('$menu_name')";
	for($i=0;$i<count($category);$i++)
		{
			$categorynew = $category[$i];
			$query=mysqli_query($con,"insert into `menu`(`category`) values('$categorynew')");	
	}		
	//$query=mysqli_query($conn,"insert into `menu`(`menu_name`) values('$menu_name')");
	echo "<script> alert('Details are Successfully Registered!!!!!');</script>";	
}
?>
<center><h1>ADD MENU</h1></center>
				<!--div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Add Category Name</div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form" method="POST" action="">
								  <div class="form-group">
								    <!--label for="inputEmail3" class="col-sm-2 control-label">Category Name</label
								    <div class="col-sm-10">
								      <input type="text" class="form-control" id="inputEmail3" name="menu_name" placeholder="e.gCOFFEE">
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Submit</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div-->


<div class="" style="background-color:lightgrey;color:black;padding-left:330px ">	<br><br><br>

<form action="" role="form" id="form" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-8 col-xs-8">
			
				<div class="field_wrapper">                                  

					<div class="form-group">
						
							<div class="input-group">
								<div class="input-group-addon"><i class="ti-user"></i></div>
									<input type="text" class="form-control" name="category[]" required="" id="exampleInputuname" placeholder="Add menu" >
							</div>
					</div> 
				</div>
				<div class="form-group change">
					<label for="">&nbsp;</label><br/>
						<a href="javascript:void(0);" class="add_button btn btn-info" title="Add field" class="text-right">+ Add More</a></a>
				</div>
		
		<button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
		<button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>

		</div>
	</div>
		</form>
		</div>

<!--./row-->
<!--.row-->
<!-- /.right-sidebar -->
<!-- /.container-fluid -->

<!-- /#page-wrapper -->

<!-- /#wrapper -->
<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_button'); //Add button selector
var wrapper = $('.field_wrapper'); //Input field wrapper
var fieldHTML = '<div> <input type="text" class="form-control" name="category[]" required="" id="exampleInputuname" placeholder="add more category"><a href="javascript:void(0);" class="remove_button" title="Remove field"><button class="btn btn-danger">Remove</button></a></div>'; //New input field html 
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