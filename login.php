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
    $usernam=$_POST["firstname"];
    $password=$_POST["password"];
    $logged_in=false;
    
    $query="SELECT * FROM employee WHERE username='$usernam'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)===1){
        $rows=mysqli_fetch_array($result);
        if($rows["password"]===$password){
            $logged_in=true;
            $query_result="SELECT * from employee";
            $res=mysqli_query($con,$query_result);
            $row_result=mysqli_fetch_array($res);
            if($rows['User_type']=="moe")
            header("location:Dashboard_MOE.html");
            else if($rows['User_type']=="ea")
                 header("location:Dashboard_EA.html");
			 else if($rows['User_type']=="leader")
                 header("location:Dashboard_leader.html");
        }
		}
    if(!$logged_in){
            echo 'Wrong information';
    }
	
  ?>
