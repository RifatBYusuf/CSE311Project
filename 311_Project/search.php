<!DOCTYPE html>
<html>
<head>
<title>Bank Search</title>
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
                bottom: -97px;
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
            height: auto;
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
        .maindiv11{
        
        
        }
        .maindiv11 label{
            font-family: sans-serif;
            width: 100%;
        }
        .maindiv11 input{
            width: 100%;
            height: 35px;
            border-radius: 5px;
            border: none;
            margin-top: 10px;
        }
        .maindiv11 .rendered-form div{
                padding: 10px 0;
        }
        .maindiv11 .rendered-form button{
                padding: 10px 30px;
            margin: 0 auto;
            width: 100%;
            background: #daa520;
            border: navajowhite;
            color: #fff;
            font-size: 19px;
            cursor: pointer;
        }
</style>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 16px;

text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr{
    height:30px;
}
tr:nth-child(even) {background-color: #f2f2f2}
tr:nth-child(odd) {background-color: #ccc}
.formsearch{
    height: 35px;
    width: 220px;
    border-radius: 5px;
    border: none;
    margin-left: 15px;
    padding: 0 15px;
    transition: all 0.5s ease-out;
    margin-right: 15px;
}

.formsearch:hover,.formsearch:focus{
    box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 70%);

}

.formclass{
    margin-bottom:30px;
}
.searchbtn{
    height: 35px;
    border-radius: 5px;
    border: none;
    margin-left: 15px;
    padding-left:15px;
    padding-right:15px;
    cursor:pointer;
    transition: all 0.5s ease-out;
    margin-right: 15px;
}
.searchbtn:hover{
    box-shadow: 0px 0px 10px 2px rgb(0 0 0 / 70%);

}

</style>
</head>
<body>
<?php include 'include.php'  ?>
<div class="maindiv1">
<form action="#" method="post" class="formclass">
Search Bank<input type="text" class="formsearch" name="search" placeholder="Enter Bank Name"> 
<button class="searchbtn" type="submit">Search</button>
</form>

<table>
<tr>
<th>Bank Name</th>
<th>Bank Email</th>
<th>Agent Name</th>
<th>Agent Email</th>
<th>Agent Phone</th>
<th>Agent Age</th>
</tr>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpproject";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

$search = isset($_POST['search']) ? $_POST['search'] : '';



$sql = "SELECT * FROM banks, agent WHERE bName LIKE '%$search%' AND banks.ID = agent.Bank_ID GROUP BY Age HAVING Age > 20";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) 
{
echo "<tr>
<td>".$row["bName"]."</td>
<td>".$row["Contact"]."</td>
<td>".$row["Name"]."</td>
<td>".$row["Email"]."</td>
<td>".$row["Phone"]."</td>
<td>".$row["Age"]."</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</div>
</body>
</html>