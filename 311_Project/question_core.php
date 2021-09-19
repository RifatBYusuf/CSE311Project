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

   $user = $_GET['user_name'];
   $ques = $_GET['question'];
   $sts = "User";
//    $Phone2 = $_POST['Phone2'];



   $sql_query = "INSERT INTO ques_and (user_name,question,status)
   VALUES ('$user','$ques','$sts')";


   if (mysqli_query($conn, $sql_query)) 
   {
   //  echo "New Details Entry inserted successfully !";
   header("Location:index.php?ques=successfully Question submited");
   } 
   else
     {
    echo "Error: " . $sql . "" . mysqli_error($conn);
   }
   mysqli_close($conn);

?>