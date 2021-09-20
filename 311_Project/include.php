


<nav>
        <ul>
           
            <?php if(isset($_GET['user']) OR isset($_GET['admin']) OR isset($_GET['ans']) OR isset($_GET['ques'])){?>  
      

            <?php }else{ ?> 
                
                <li> <a href="index.php"> Home </a> 
            </li>
            <li> <a href="banks.html" target="_blank" > Banks </a> 
            </li>
            <li> <a href="offers.html"> Offers </a> 
            </li>
                <li> <a href="register.php"> Register </a> 
            </li>
            <li> <a href="search.php"> Search </a> 
            </li>



            <li> <a href="login.php"> Login </a> 
            </li>

                <?php } ?>

            <li>
                
<?php 



if(isset($_GET['user']) OR isset($_GET['admin']) OR isset($_GET['ans']) OR isset($_GET['ques']) ){ ?>

<!-- <nav> -->



    <ul>

    <li><h3 style="color:white; background: red;
    padding: 4px;
    border-radius: 6px;
    color: wheat;
    padding-right: 13px;
    font-weight: bold;">Dashborad</h3></li>
        
    <li style="margin-left:609px"><h3 style="color:white"> <?php if(isset($_GET['user'])){ ?> User Successfully  is Loggin  <?php }elseif(isset($_GET['admin'])){?> Agent  Successfully  is Loggin  <?php }elseif(isset($_GET['ans'])){ ?> Successfully Ans Sumited .. <?php }elseif(isset($_GET['ques'])){ ?>Question Successfully Submited... <?php }  ?>  </h3> </li> 
    
   
   
   <a style="display: flex;
    float: inline !important;
    display: inline !important;
    float: right !important;
    margin-right: 24px !important;
    color: white;
    font-weight: bold;
    margin-left: 104px !important;
    " href="user_logout.php?user_logout" tite="Logout">Logout</a></ul>








<!-- </nav> -->

<?php }else{ ?>


<?php }



?>


            </li>


            <li>
       <h3 style="color:wheat"><?php if(isset($_GET['resis'])){ ?> Successfully Register...  <?php }elseif(isset($_GET['userssss'])){ ?> User Successfully Created... <?php } ?></h3>
   </li>


            
        </ul>
    </nav>

