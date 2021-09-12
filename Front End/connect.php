<?php
$servername   = "localhost";
$database = "dbs";
$username = "rifat";
$password = "12345";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}




	
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email'];
	 $Phone = $_POST['Phone'];
	 $Age = $_POST['Age'];
	 $Password = $_POST['Password'];
	 $Bkash = $_POST['Bkash'];
	 $TRLX = $_POST['TRLX'];
	 $Date_Time = $_POST['Date_Time'];
	

	 $sql = "INSERT INTO user (Name,Email,Phone,Age,Password,Bkash,TRLX,Date_Time)
	 VALUES ('RIfat','rifat@gmail.com','01872232838','23','5437', '01872232838', '12345', '123')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
