
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
                <p style="font-size:30px;font-weight:bold;text-align:center;margin-top:10px; line-height:35px; color:rgb(60, 60, 60);" class="text-uppercase"> Signup Once <br>Have Life time safety !</p>
                
                <form action="signup1.php" method="POST">
                    <br><br>
                    <div class="container-sm">
                        <input  class="form-control" type="text" name="name" id="name" required placeholder="Full Name"><br>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" required ><br>
                        <input  class="form-control" type="text" name="contact" id="contact" required placeholder="Contact"><br>
                        <input  class="form-control" type="text" name="cnic" id="cnic" required placeholder="CNIC"><br>
                        <input class="form-control" type="password" name="pass1" id="p1" placeholder="Password" required><br>
                        <input class="form-control" type="password" name="pass2" id="p2" placeholder="Confirm Password" required><br><br>
                        
                        <input type="submit" value="SIGN UP" class="btn btn-block" style="color:white;background-color:#A8C449;"><br>
                    </div>
                    
                            
                </form>

                <!-- <span class="text-center" style="font-size:18px;margin-left:22%;">Already a have an account?</span> -->
                        <br>
                        <?php
                       
                        
                        ?>
                     <br>
                     <?php
                     include("connect.php");

                     if($_SERVER['REQUEST_METHOD']=="POST"){ 
                    $name=$_POST['name'];
                    
                    // $address=$_POST['address'];
                    $email=$_POST['email'];
                    $contact=$_POST['contact'];
                    $cnic=$_POST['cnic'];
                    $password1=$_POST['pass1'];
                    $password2=$_POST['pass2'];
                    $password3=md5($_POST['pass1']);
                    
                    // $address=$_POST['address'];

                    
                    
                    if($password1!=$password2){
                      echo"<span style='color:red text-align:center;'>Your passowrd does not match</span><br>";
                    }
                        
                  else if($password1=$password2){


                            $sql="INSERT INTO student(name,email,contact,cnic,password,status)
                            VALUES('$name','$email','$contact','$cnic','$password3','active')";
                        
                              
                              
                              if(mysqli_query($conn,$sql)){
                                echo"<span style='color:green text-align:center left:60% position:relative;'>Your account has been sucessfully Login</span><br><br>";

                              }

                              else{
                                // echo "<span style='color:red;text-align:center;left:60px;position:relative;'>Email already taken . Try again</span><br><br>";
                                echo mysqli_error($conn);
                              }
                     }
                        
                     
                     else{
                          echo mysqli_error();
                    }
                           
                    

              }

?>

<br>

                            <p style="text-align:center;font-weight:0px;"><a href="login.php">Already registered? <u style="color:#A8C449;">Login</u></a></p>


                </div>
        </div>
    </div>
</div>
    
</body>
</html>


