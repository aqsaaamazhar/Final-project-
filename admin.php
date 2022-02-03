<?php
session_start();
?>
<?php
// if($_SERVER['REQUEST_METHOD']="POST"){
    if($_SESSION['status']=1){
    $id=$_SESSION['id'];
    include("connect.php");
    // $id=8;
    $sql1="Select * From student where id='$id'";
     $res1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($res1)>0){
    $row1=mysqli_fetch_assoc($res1);
    }
    else{
        echo mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Page</title>
    <link href="mystyleesheet2.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">  


        <!-- sidebar -->
        <div class="col-sm-2  sidebar border ">


            <div class="row">
                <div class="col-sm bg-white">
                    <img src="aqsaimages\aqsalogo.png "class='logo1'>

                </div>
            </div>

            <div class="row">
                 <div class="col-sm">
        
                <?php
                    if ($row1["profile_pic"]==""){
                        $pic="images/profile_pic.png";
                    }
                    else{ 
                        $pic=$row1["profile_pic"];
                    }
                ?>
        
    
                    <img src="<?php echo $pic;?>" class="dp mx-auto d-block">
        
                </div>
        </div>
                <?php
                include('sidebartable.php');
                ?>
            

        </div>
          

        <!-- content -->
        <div class="col-sm-8 border">
            <?php
            // include ('center.php');
            ?>
        </div>


        <!-- end bar -->
        <div class="col-sm-2 border">

        </div>
    </div>




</div>
</body>
</html>
<?php
    }
    ?>