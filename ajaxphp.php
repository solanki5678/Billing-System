 <html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$con = mysqli_connect("localhost","root","","db")or die("error");
$sql="SELECT * FROM ajax WHERE id = '$q'";
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Id</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
