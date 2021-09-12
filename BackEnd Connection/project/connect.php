<?php
$servername   = "localhost";
$database = "dbs";
$username = "rifat";
$password = "12345";

$conn=mysqli_connect($servername,$username,$password,$database);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}


   $Name = $_POST['Name'];
   $Email = $_POST['Email'];
   $Phone = $_POST['Phone'];
   $Age = $_POST['Age'];
   $Password = $_POST['Password'];
   $Bkash = $_POST['Bkash'];
   $TRLX = $_POST['TRLX'];
   $Date_Time = $_POST['Date_Time'];


	

	 $sql_query = "INSERT INTO user (Name,Email,Phone,Age,Password,Bkash,TRLX, Date_Time)
	 VALUES ('$Name','$Email','$Phone','$Age','".md5($Password)."', '$Bkash', '$TRLX', '$Date_Time')";

 
	

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);

?>