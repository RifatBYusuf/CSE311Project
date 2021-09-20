<?php
session_start();
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


//    $Name = $_POST['Name'];
   $Email = $_GET['email'];
   $password = md5($_GET['password']);

//    echo $password;
//    $Age = $_POST['Age'];
//    $Password = $_POST['Password'];
//    $Bkash = $_POST['Bkash'];
//    $TRLX = $_POST['TRLX'];
//    $Date_Time = $_POST['Date_Time'];


	

	 $sql_query = "SELECT * FROM user WHERE Email='$Email' && Password='$password'";

    

    $quer = mysqli_query($conn,$sql_query);

    $row= mysqli_num_rows($quer);


	

	while ($row = mysqli_fetch_array($quer)){
       
       if($row>0){


        // $_SESSION['userlogin'] = $row['id'];
        
        header("Location:index.php?user=".$row['Name']);

       }else{
           echo "data not match";
       }

    }
	 mysqli_close($conn);

?>