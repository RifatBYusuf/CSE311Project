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

//    $Name2 = $_POST['Name2'];
   $Email2 = $_POST['Email2'];
//    $Phone2 = $_POST['Phone2'];
//    $Age2 = $_POST['Age2'];
   $Password22 = md5($_POST['Password2']);
//    $Bank_ID = $_POST['Bank_ID'];
//    $Bank_Name = $_POST['Bank_Name'];
//    $NID = $_POST['NID'];


$sql_query= "SELECT * FROM agent WHERE Email='$Email2' OR Password='$Password22'";


$query = mysqli_query($conn,$sql_query);

   if ($query) 
   {

  
    
    while($row = mysqli_fetch_assoc($query)){
 
        header("Location:index.php?admin=".$row['Name']);

    }
    
   } 
   else
     {
    echo "Error: " . $sql . "" . mysqli_error($conn);
   }
   mysqli_close($conn);

?>