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
		<div id="header">Mariot Restaurent Bill</div>
		
		<div id="identity">
		
            <textarea id="address">Address:
									234 Magic Colony
									Appleville, WI 53719

									Phone: (555) 555-5555</textarea>

            <div id="logo">

              <img src="food.jpg">
              </div>

             <!-- <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" />
            </div>
		
		</div>-->
		
		<div style="clear:both"></div>
		<?php
		 include "connection.php";
		 $invoice=$_GET['invoice'];
		 $sql="select *from bill where trash='null' and id='$invoice'";
		 $st=mysqli_query($connect,$sql);
		 $r=mysqli_num_rows($st);
		 if($r>0)
		 {
			 $row=mysqli_fetch_array($st);
			 ?>
		<div id="customer">
		 
		<textarea id="customer-title"><?php echo $row['name'];?></textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">BillNo</td>
                    <td><textarea><?php echo $row['billNo'];?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date"> <?php echo $row['date'];?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Total_Amount</td>
                    <td><div class="due"><?php echo $row['total'];?></div></td>
                </tr>
				<?php
						}
			?>
            </table>
		
		</div>
		
		  		<table class="table table-stripped" id="dataTable" width="100%" cellspacing="0">
		
		  <tr>
		      <th>Item</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		 <?php
		 include "conn.php";
		 $invoice=$_GET['invoice'];
		 $sql="select *from bill where trash='null' and id='$invoice'";
		 $st=mysqli_query($connect,$sql);
		 $r=mysqli_num_rows($st);
		 if($r>0)
		 {
			 $row=mysqli_fetch_array($st);
			 ?>
		 
		 
		 
		 
		  <tr class="item-row">
		      <td class="item-name"><?php echo $row['item_name'];?><div class="delete-wpr"><textarea>   </textarea></div></td>
		      <td><textarea class="cost"> <?php echo $row['per_price'];?> </textarea></td>
		      <td><textarea class="qty"> <?php echo $row['quantity'];?>   </textarea></td>
		      <td><span class="price"><?php echo $row['total'];?></span></td>
		  </tr>
		<?php
		 }
		 ?>
		  
		  
		  <!--<tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>-->
		
		</table>
		
		<div id="terms">
		  <h5>Jai Mahakal</h5>
		  <textarea>Thanks for your visit</textarea>
		</div>
	
	</div>
	
</body>

</html>