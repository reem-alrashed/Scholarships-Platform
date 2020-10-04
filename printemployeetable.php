<html>
<head>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: solid;
  border: solid;
  width: 80%;
  margin:auto;
}
h1{
font-size: 40px;
color:black;
text-align: center;
}
td, th {
  border: solid;
  text-align: center;
  padding: 10px;
  font-size: 32px;
  color: cornflowerblue
}

</style>



</head>
<body>
	<form method="post">
	    <table>
		<tr>
		<th>الاسم</th>
		<th>كلمة المرور</th>
		<th>قسم الموظف</th>
		<th>السجل المدني للموظف</th>
		</tr>
		<?php
    $host = "127.0.0.1"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "scholarship"; /* Database name */
    
    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
	$stmt = $con->prepare("select * from employee");
    $stmt->execute();
	
	$result = $stmt->get_result();
	while($row=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['User_type']."</td>";
		echo "<td>".$row['user_ID']."</td>";
		echo "</tr>" ;
	}
?>	
	</table>	
	</form>
</body>
</html>