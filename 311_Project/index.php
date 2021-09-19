<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../Website Practice/style.css">
    <link rel="stylesheet" href="Banks.html">
    <title>Home - DBS</title>
</head>
<style>
    body {
    
    background-color: #a7abce;   
        background-size: cover;
        background-repeat: no-repeat;
        min-width: 100%;
        height: auto;
        position: relative;
    
    }
    
    * {
    
    margin: 0;
    padding: 5;
    }
    
    nav {
    
    width: 100%;
    height: 50px;
    background-color: black;
    }
    
    ul {
    
    
    }
    
    ul li {
    
    list-style: none;
    
    display: inline-block;
    
    line-height: 43px;
    }
    
    ul li a {
    
    text-decoration:  none;
    display:  block;
    
    color: goldenrod;
    font-size: 25px;
    font-family: sans-serif;
    padding: 0 25px;
    }
    
    ul li a:hover {
    
    color: green;
    }
    
    h1 {
    
    font-family: sans-serif;
     
    
    color: black;
    font-size: 30px;
    line-height: 50px;
    width: 100%;
        text-align: center;
    
    }
    
    body page2{
    
    background-color: darkred;
    }
    
    table {
    
    background-color: darkred;
    }
    .pagehead{
        color:#000;
        padding-top: 50px;
    }
    
    
     
    
    
        p {outline-color: green;}
    
        p.solid {outline-style: solid;}
    
        .p2 { font-family: Arial, Helvetica, sans-serif; }
    
        .p3 {font-family: "Lucida Console", "Courier New", monospace;}
      .maindiv1{
        width: 100%;
        padding: 60px;
        max-width: 1200px;
        margin: 0 auto;
      }
      .leftside1{
    width:100%;
    clear: both;
    position: relative;
        padding: 30px 0 0 0;
      }
      .askbox1{
        width: 97.2%;
        height: 126px;
        position: relative;
        border-radius: 5px;
        border: 1px solid #daa520;
        padding: 15px 0 0 15px;
      }
      .submitall{ border: 1px solid #daa520;
        padding: 7px 25px;
        position: absolute;
        color: #daa520;
        background: #000;
        border-radius: 5px;
        right: 0;
        bottom: 4px;}
        .ques11{
            padding: 15px;
        background: #fff;
        border: 1px solid #daa520;
        border-radius: 5px;
        margin: 15px 0 0 0;
        }
        .ques11 h5{
            margin-bottom: 10px;
        }
    
        .ques11 p{
            margin-bottom: 10px;
        }
        .ques11 p.datep{
            text-align: right;
            margin-bottom: 0px;
        }
        .ansbox1{
            width: 50%;
        float: right;
        height: 80px;
        }
        .ansbtn1{
            bottom: -149px;
        }
        .ansview11{
            width: 80%;
        float: right;
        margin-top: 15px;
        clear: both;
        }
        .quesansall{
            margin-top: 30px;
            position: relative;
        }
      .mainleft{
         width:43%;
    box-shadow: 0px 0px 22px 2px rgb(0 0 0 / 65%);
        padding: 20px 30px;
        overflow: auto;
        height: 900px;
        float:left;
        border-radius: 5px;
        margin-right:4%; 
      }
    
      .mainright{
         width: 43%;
         position: relative;
         float: right;
    
      }
      .rightbox{
           width: 100%;
    box-shadow: 0px 0px 22px 2px rgb(0 0 0 / 65%);
        padding: 20px 30px;
        height: auto;
        border-radius: 5px;
        margin-bottom: 30px;
      }
      .inforightbox1{
    
        height: 300px;
    
      }
      .imgad{
            margin: 0 auto;
        width: 100%;
        margin-bottom: 30px;
      }

      .ques12{
        background: #695d5d;
    color: white;
    padding: 20px;
    width: 346px;
    margin-left: 125px;
      }
</style>


<body>


<?php include 'include.php'  ?>
 
    <h1 class="pagehead"> Dynamic Banking Solution - Home </h1>
    <div class="maindiv1">
        <div class="mainleft">

            <div class="leftside1">

            <?php if(isset($_GET['user']) OR isset($_GET['ques'])){ ?>
                <form action="question_core.php" method="GET">
                    <input type="hidden" value="<?php echo $_GET['user']?>" name="user_name">
                    <textarea class="askbox1" placeholder="Ask Anything" name="question"></textarea>
                    <button type="submit" class="submitall">Submit</button>
                </form>

          <?php  } ?>

                


            </div>

            <div class="quesansall">
                <div class="leftside1">

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

//    $Phone2 = $_POST['Phone2'];



//    $sql_query = "INSERT INTO ques_and (user_name,ans,status)
//    VALUES ('$user','$ANS','$stua')";


   $sql_query = "SELECT * FROM ques_and  where status='User'";


   $QUERY = mysqli_query($conn, $sql_query);
   if ($QUERY) 
   {

    while($row = mysqli_fetch_assoc($QUERY)){  ?>

 
 
     

    <?php $_SESSION['user_id'] = $row['id']; ?>
              
 
              <div class="ques11">
                        <h5><?php echo $row['user_name']?> <?php echo $row['status']?></h5>
                        <p><?php echo $row['question']?></p>
                        <p class="datep"><?php echo $row['date']?></p>
             </div>



                    <?php 
                       
                       $sql_queryone = "SELECT * FROM ques_and  where current='$row[id]' AND status='Agent'";

                       $Newcont = mysqli_query($conn, $sql_queryone);

                       while($rowone = mysqli_fetch_assoc($Newcont)){ ?>
<div class="leftside1">
                      <div class="ques12">
                        <h5><?php echo $rowone['user_name']?> <?php echo $rowone['status']?></h5>
                        <p><?php echo $rowone['ans']?></p>
                        <p class="datep"><?php echo $rowone['date']?></p>
                    </div>
                    </div>

                     <?php  }

                      

                    ?>



                    
                  <!-- admin ans section -->
                  <div class="" style="overflow: auto;">
                        <?php if(isset($_GET['admin']) OR isset($_GET['ans'])){ ?>

                        
                        <form action="ans_core.php" method="GET">

                                    <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" name="comment">

                                    <input type="hidden" value="<?php echo $_GET['admin']?>" name="user_name">
                                        <textarea class="askbox1 ansbox1" name="ans" placeholder="Answer this question"></textarea>
                                        <button style="float: right;margin-top: 104px;margin-left: 11px;background: red;color: white;border: none;font-weight: bold;padding: 12px;
    border-radius: 5px;" class="">Submit</button>
                                    </form>
                        
                        <?php  } ?>

                        </div>

                        <!-- admin ans section -->



        <?php } 
   }
  

   else
     {
    echo "Error: " . $sql . "" . mysqli_error($conn);
   }
   mysqli_close($conn);

?>


                  <br>
                  <br>

                       
                   

                </div>


<!-- 
                <div class="leftside1">
                    <div class="ques11 ansview11">
                        <h5>Rifat</h5>
                        <p>What is up guys? You all good? Which bank is better?</p>
                        <p class="datep">22/08/2021</p>
                    </div>
                    <div class="ques11 ansview11">
                        <h5>Rifat</h5>
                        <p>What is up guys? You all good? Which bank is better?</p>
                        <p class="datep">22/08/2021</p>
                    </div>
                    <div class="ques11 ansview11">
                        <h5>Rifat</h5>
                        <p>What is up guys? You all good? Which bank is better?</p>
                        <p class="datep">22/08/2021</p>
                    </div>
                </div> -->
            </div>




        </div>
        <div class="mainright">
            <div class="rightbox inforightbox1">
            <a href="https://www.grameenphone.com" target="_blank">
                <img width="100%;" src="img/img4.png">
            </a>
            </div>
            <div class="rightbox">
                <img class="imgad" src="img/bank_ad.jpeg">
            </div>
        </div>
    </div>
    </div>
</body>

</html>