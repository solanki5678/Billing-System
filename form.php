<?php
include "connection.php";
$name=$_POST['name'];
$password=$_POST['password'];
$st=mysqli_query($con,"insert into form(`name`,`password`) values('$name','$password')");
if($st)
{
	echo"registered";
}
else
{
	echo "invalid";
}
?>
<form action="form.php" method="post">
Name<input type="text" name="name"><br>
Pass<input type="password" name="password"><br>
<input type="submit" value="submit">
</form>