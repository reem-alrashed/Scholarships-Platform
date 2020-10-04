



<?php
    
    $host = "127.0.0.1"; /* Host name */
    $user = "root"; /* User */
    $password = ""; /* Password */
    $dbname = "scholarship"; /* Database name */
    
    $con = mysqli_connect($host,$user, $password,$dbname);
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
	  if (empty($_POST["fname"])) {
         $site = "name is required";
         } else {
         $fname= $_POST["fname"];
         }
		 
		 if (empty($_POST["fname"])) {
         $site = "name is required";
         } else {
         $lname= $_POST["lname"];
         }
		 
		 if (empty($_POST["id"])) {
         $site = "id is required";
         } else {
         $id= $_POST["id"];
         } 
		 
		 if (empty($_POST["password"])) {
         $site = "password is required";
         } else {
         $password= $_POST["password"];
         } 
		 
		 if (empty($_POST["email"])) {
         $site = "email is required";
         } else {
         $email= $_POST["email"];
         } 
		 
		 if (empty($_POST["phone"])) {
         $site = "phone is required";
         } else {
         $phone= $_POST["phone"];
         } 
		 
		 if (empty($_POST["date"])) {
         $site = "date is required";
         } else {
 	     $date= $_POST["date"]; 
         } 
		 
		 if (empty($_POST["gender"])) {
         $site = "gender is required";
         } else {
         $gender= $_POST["gender"];
         }
		 
	$stmt="insert into teacher values('$fname','$lname','$id','$password','$email','$phone','$date','$gender')";
	if(mysqli_query($con,$stmt)){
		  header("location:indexlogin.html");
	}else{
		print "error";
	}
	
?>
