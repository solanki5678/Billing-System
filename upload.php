<?php
		if($_POST['item']!='' && ($_POST['cat1']!='' || $_POST['cat2']!='' || $_POST['cat3']!=''))
		{
			$item=$_POST['item'];
			$cat1=$_POST['cat1'];
			$cat2=$_POST['cat2'];
			$cat3=$_POST['cat3'];
			$st1=mysqli_query($con,"insert into `category`(`item`,`category`) values('$item','$cat1')");
			$st2=mysqli_query($con,"insert into `category`(`item`,`category`) values('$item','$cat2')");
			$st3=mysqli_query($con,"insert into `category`(`item`,`category`) values('$item','$cat3')");
			if($st1 && $st2 && $st3)
			{
				echo"done";
			}
			else
			{
				echo"error";
			}
		}
		?>