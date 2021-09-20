<!DOCTYPE html>
<!------------------------------------------------------
    -------------------------  RAFAT --------------------
    ------------------------------------------------------>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../Website Practice/style.css">
    <link rel="stylesheet" href="Banks.html">
    <title>Login - DBS</title>
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

<body>
<?php include 'include.php'  ?>
    <h1 class="pagehead"> Dynamic Banking Solution - Login </h1>
    <div class="maindiv1">
        <div class="mainleft maindiv11">
            <h1 class=""> Login as User</h1>

            <form action="user_login.php" method="get">

            <div class="regform">
                <div class="rendered-form">
                    <div class=" form-group field-text-f2">
                        <label for="text-f2" class="-label">Email</label>
                        <input type="text" class="form-control" name="email" access="false" id="text-f2">
                    </div>
                    <div class=" form-group field-text-f41">
                        <label for="text-f41" class="-label">Password</label>
                        <input type="password" class="form-control" name="password" access="false" maxlength="300" id="text-f41">
                    </div>
                    <div class="form-button">
                        <button type="submit">Login</button>
                    </div>
                </div>
            </div>

            </form>
        </div>
        <div class="mainright maindiv11">
            <div class="rightbox">
                <h1 class=""> Login as Agent</h1>


                <form action="agent_login.php" method="POST">

                <div class="regform">
                    <div class="rendered-form">
                        <div class=" form-group field-text-f2">
                            <label for="text-f2" class="-label">Email</label>
                            <input type="text" class="form-control" name="Email2" >
                        </div>
                        <div class=" form-group field-text-f41">
                            <label for="text-f41" class="-label">Password</label>
                            <input type="password" class="form-control" name="Password2" >
                        </div>
                        <div class="form-button">
                            <button type="submit">Login</button>
                        </div>
                    </div>
                </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>