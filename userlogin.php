<?php
    
    $host = "localhost"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "scholarship"; /* Database name */
    
    $con = mysqli_connect($host, $user, $password,$dbname);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id=$_POST["id"];
    $password=$_POST["password"];
    
    $query="SELECT * FROM teacher WHERE id='$id'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)===1){
        $rows=mysqli_fetch_array($result);
        if($rows["password"]===$password){
			 header("location:indexlogin.html");
        }
		}else{
            echo 'Wrong information';
    }
	
  ?>