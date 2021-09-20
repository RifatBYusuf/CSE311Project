<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../Website Practice/style.css">
    <link rel="stylesheet" href="Banks.html">
    <title>Register - DBS</title>
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
    
    <form = action="connect.php" method="post"> 
    <?php include 'include.php'  ?>
    <h1 class="pagehead"> Dynamic Banking Solution - Register</h1>
    <div class="maindiv1">
        <div class="mainleft maindiv11">
            <h1 class=""> Sign up as User</h1>
            <div class="regform">
                <div class="rendered-form">
                    
                    <div class=" form-group field-text-f1">
                        <label for="text-f1" class="-label">Name</label>
                        <input type="text" class="form-control" name="Name" access="false" id="Name">
                    </div>
                    <div class=" form-group field-text-f2">
                        <label for="text-f2" class="-label">Email</label>
                        <input type="text" class="form-control" name="Email" access="false" id="Email">
                    </div>
            
                    <div class=" form-group field-text-f3">
                        <label for="text-f3" class="-label">Phone </label>
                        <input type="number" class="form-control" name="Phone" access="false" maxlength="11" id="Phone">
                    </div>
                    <div class=" form-group field-text-f4">
                        <label for="text-f4" class="-label">Age</label>
                        <input type="text" class="form-control" name="Age" access="false" maxlength="3" id="Age">
                    </div>
                    <div class=" form-group field-text-f41">
                        <label for="text-f41" class="-label">Password</label>
                        <input type="password" class="form-control" name="Password" access="false" maxlength="300" id="Password">
                    </div>
                    <div class="subs">
                        <lavel for="subscheck">Subscribe for 100BDT per month?</lavel>
                        <input type="checkbox" id="subcheckbox" name="subscheck" onclick="subfnc()">
                        <div id="subbox" style="display:none">
                            <div class=" form-group field-text-f311">
                                <label for="text-f311" class="-label">Bkash </label>
                                <input type="text" class="form-control" name="Bkash" access="false" maxlength="1000" id="Bkash">
                            </div>
                            <div class=" form-group field-text-f31">
                                <label for="text-f31" class="-label">TRLX</label>
                                <input type="text" class="form-control" name="TRLX" access="false" maxlength="1000" id="TRLX">
                            </div>
                            <div class=" form-group field-text-f311">
                                <label for="text-f311" class="-label">Date</label>
                                <input type="text" class="form-control" name="Date_Time" access="false" maxlength="1000" id="Date_Time">
                                 
                            </div>
                        </div>
                    </div>
                    <div class="form-button">
                        <button type="submit">Signup</button>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mainright maindiv11">
            <div class="rightbox">
                <h1 class=""> Sign up as Agent</h1>
                <div class="regform">
                    <form = action="check.php" method="post"> 
                    <div class="rendered-form">
                        <div class=" form-group field-text-f1">
                            <label for="text-f1" class="-label">Name</label>
                            <input type="text" class="form-control" name="Name2" access="false" id="Name2">
                        </div>
                        <div class=" form-group field-text-f2">
                            <label for="text-f2" class="-label">Email</label>
                            <input type="text" class="form-control" name="Email2" access="false" id="Email2">
                        </div>
                        
                        <div class=" form-group field-text-f3">
                            <label for="text-f3" class="-label">Phone </label>
                            <input type="number" class="form-control" name="Phone2" access="false" maxlength="11" id="Phone2>
                        </div>
                        <div class=" form-group field-text-f4">
                            <label for="text-f4" class="-label">Age</label>
                            <input type="number" class="form-control" name="Age2" access="false" maxlength="3" id="Age2">
                        </div>
                        <div class=" form-group field-text-f41">
                            <label for="text-f41" class="-label">Password</label>
                            <input type="password" class="form-control" name="Password2" access="false" maxlength="300" id="Password2">
                        </div>
                        
                        <div class=" form-group field-text-f21">
                            <label for="text-f21" class="-label">Bank ID</label>
                            <input type="number" class="form-control" name="Bank_ID" access="false" id="Bank_ID">
                        </div>
                        <div class=" form-group field-text-f211">
                            <label for="text-f211" class="-label">Bank Name</label>
                            <input type="text" class="form-control" name="Bank_Name" access="false" id="Bank_Name">
                        </div>
                        <div class=" form-group field-text-f2111">
                            <label for="text-f2111" class="-label">NID</label>
                            <input type="number" class="form-control" name="NID" access="false" id="NID">
                             
                        </div>
                        <div class="form-button">
                            <button type="submit">Signup</button>
        
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function subfnc(){
                    var checkBox =  document.getElementById("subcheckbox");
                    var text = document.getElementById("subbox");
                    if (checkBox.checked == true ){
                        text.style.display = "block";
                    } else{
                        text.style.display ="none";
                    }
                }
    </script>
  
</body> 
</form>
</html>