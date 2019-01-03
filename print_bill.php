<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Retaurent Bill</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">
		<div id="header">Restaurent Bill</div>
		
		<div id="identity">
		
            <div class="due">Address:<br>
									234,Malviya Nagar<br>
									Jaipur, WI 53719<br>
									Phone: (555) 555-5555</div>

            <div id="logo">

              <img src="food.jpg" style="width:130px;height:90px">
              </div>

             <!-- <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>-->
		
		<div style="clear:both"></div>
		
		
		  		<table class="table table-stripped" id="dataTable" width="100%" cellspacing="0">
		
		  <tr>
			  <th>Date</th>
			  <th>Bill No</th>
		      <th>Item</th>
		      <th>Cost</th>
		      <th>Quantity</th>
		      <th>Total Amount</th>
		  </tr>
		  
		 <?php
		 include "connection.php";
		 $invoice=$_GET['invoice'];
		 $sql="select *from bill where trash='null' and id='$invoice'";
		 $st=mysqli_query($con,$sql);
		 $r=mysqli_num_rows($st);
		 if($r>0)
		 {
			 $row=mysqli_fetch_array($st);
			 ?>
		 
		 
		 
		 <br><br>
		  <tr class="item-row">
		  	  <td><span  class="price"><?php echo $row['date'];?></span></td>
		      <td><span class="price"><?php echo $row['bill_no'];?></span></td>
		      <td> <div class="due"><?php echo $row['item'];?><div class="delete-wpr"></div></td>
		      <td><div class="due"> <?php echo $row['price'];?> </div></td>
		      <td><div class="due"> <?php echo $row['unit'];?>   </div></td>
		      <td><span class="price"><?php echo $row['amount'];?></span></td>
		  </tr>
		<?php
		 }
		 ?>
		  <?php
		 include "connection.php";
		 $invoice=$_GET['invoice'];
		 $sql="select *from bill where trash='null' and id='$invoice'";
		 $st=mysqli_query($con,$sql);
		 $r=mysqli_num_rows($st);
		 if($r>0)
		 {
			 $row=mysqli_fetch_array($st);
			 ?>
		<div id="customer">
		<h1>Customers's Name</h1> 
		<div class="due"><?php echo $row['name'];?></textarea><br><br><br><br>	

            <table id="meta">
                <br><br><br><br>	
                <tr>
                    <td class="meta-head">Total_Amount</td>
                    <td><div class="due"><?php echo $row['amount'];?></div></td>
                </tr>
				<tr>
					<td class="meta-head">Discount</td>
					<td><div class="due"><?php echo $row['discount'];?></div></td>
				</tr>
				<tr>
				<td class="meta-head">Final Amount</td>
					<td><div class="due"><?php echo $row['final_price'];?></div></td>
				</tr>
				<?php
						}
			?>
            </table>
		
		</div>
		  
		  
		
		</table>
		<br><br><br><br><br><br><br><br>
		<div id="terms">
		  <h5>Happy Customer</h5>
		  <div class="due">&copy; 2010-<?php echo date("Y");?></div>
		</div>
	
	</div>
	
</body>

</html>