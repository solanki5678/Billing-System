<?php
include"connection.php";
if(isset($_POST['login']))
$name =$_POST['name'];
$pass=$_POST['password'];
$st=mysqli_query($con,"select * from `form` where name='$name' and password='$pass'");
$result=mysqli_fetch_array($st);
$rs=mysqli_num_rows($st);
if($rs>0)
{
	//$_SESSION['id']=$result['id'];
	header("location:add_menu.php");
}
else
{
	//echo"either name or usernamer is invalid.";
	//echo "<a href='log.php'>Try again</a>";
	header('location:log.php');
	
}
?>

	
	
	
