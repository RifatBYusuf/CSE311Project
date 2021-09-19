<?php
$servername   = "localhost";
$database = "phpproject";
$username = "root";
$password = "";
// $username = "rifat";
// $password = "12345";

$conn=mysqli_connect($servername,$username,$password,$database);
//now check the connection
if(!$conn)
{
  die("Connection Failed:" . mysqli_connect_error());

}

   $Name2 = $_POST['Name2'];
   $Email2 = $_POST['Email2'];
   $Phone2 = $_POST['Phone2'];
   $Age2 = $_POST['Age2'];
   $Password22 = $_POST['Password2'];
   $Bank_ID = $_POST['Bank_ID'];
   $Bank_Name = $_POST['Bank_Name'];
   $NID = $_POST['NID'];


   $sql_query = "INSERT INTO agent (Name,Email,Phone,Age,Password,Bank_ID,Bank_Name, NID)
   VALUES ('$Name2','$Email2','$Phone2','$Age2','".md5($Password22)."', '$Bank_ID', '$Bank_Name','NID')";


   if (mysqli_query($conn, $sql_query)) 
   {
    // echo "New Details Entry inserted successfully !";
    header("Location:index.php?resis=successfully Ans submited");
   } 
   else
     {
    echo "Error: " . $sql . "" . mysqli_error($conn);
   }
   mysqli_close($conn);

?>