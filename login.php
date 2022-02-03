<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link href="mystyle.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
  
  
</head>

<body>
    <div class="container-fluid border">
        <div class="row">
            <?php

            include('header.php')

            ?>
        </div>


        <div class="row">
        
            <div class="col-sm   menu menub"><a href="main.php">Home</a></div>
        


        </div>

        <div class="row">
            <div class="col-sm">
                <div class="signup p-5">
                <p style="font-size:30px;font-weight:bold;text-align:center;margin-top:10px; line-height:35px; color:rgb(60, 60, 60);" class="text-uppercase"> Signup Once <br>Login Carefully!</p>
                
                <form action="login.php" method="POST">
                    <br><br>
                    <div class="container-sm">
                      
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" required ><br>
                        <input class="form-control" type="password" name="pass1" id="p1" placeholder="Password" required><br>
                    
                        
                        <input type="submit" value="Login" class="btn btn-block" style="color:white;background-color:#A8C449;"><br>
                    </div>
                    
                            
                </form>
                <?php

                    include('connect.php');
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                            $email=$_POST['email'];
                            $password1=md5($_POST['pass1']);
                            $active="active";


                            if(isset($email)){
                                $sql="SELECT *from student where email='$email' AND password='$password1' AND status='$active'";
                                $res=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $_SESSION['id']=$row['id'];
                                    $_SESSION['status']=1;
                                    header('Location:admin.php');
                                }
                                }
                                else{
                                echo"<span style='color:red;text-align:center;'>Invalid login</span><br>";
                                echo mysqli_error($conn);
                                }
                            }
                    }





?>
<br>
                <p style="text-align:center;font-weight:0px;"><a href="signup1.php">Haven't registered? <u style="color:#A8C449;">SignUp</u></a></p>
                  <p style="text-align:center;font-weight:0px;"><a href="#">Forgot Password?</a></p>



                
                



                </div>
            </div>
        </div>




</div>