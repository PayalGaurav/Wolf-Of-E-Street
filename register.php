<?php

require "dbconnection.php";

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 14:39:47 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,500,700,900%7CPlayfair+Display:400,700,700i,900,900i%7CWork+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme71.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120573841-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-120573841-2');
    </script>
   
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
    <div class="form-body">
        <div class="website-logo">
                <div class="">
                    <img class="logo-size" src="images/logotest1.png" alt="">
                </div>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Wolf Of E-Street.</h3>
                        <p>Get started !!</p>
                        <div class="page-links">
                            <a href="index.php">Login</a><a href="register.php" class="active">Register</a>
                        </div>
                        <form method="post">
                            <input class="form-control" id="name" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" id="eid" type="email" name="eid" placeholder="Email ID" required>
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" name="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

<?php

 if(isset($_POST["submit"]))
   {
    //echo "<script>swal('in if', 'Your registration was successful','success');</script>";

       $name=mysqli_real_escape_string($link,$_POST["name"]);
       $password=mysqli_real_escape_string($link,$_POST["password"]);
       $eid=mysqli_real_escape_string($link,$_POST["eid"]);
       $balance=1000;
       $f=1;
       
       
       $i=1;
       $selQry="select pid, esid from participants";
       $result=@mysqli_query($link,$selQry)or die(mysqli_error($link));
       while($row=mysqli_fetch_assoc($result))
       {
        $i++;
        $email=$row['esid'];
        if(strcmp($email,$eid))
        {
          $f=1;
        }
        else
        {
          $f=0;
        }
       }
       if($f==1)
       {
       $id=100+$i;
       $default=0;
       $geoid=($id-1)%3;
       if($geoid==0)
        $geoid=3;
      if($geoid==1&&$id%2==1)
        $house=1;
      else if($geoid==1&&$id%2==0)
        $house=2;
      else if($geoid==2&&$id%2==1)
        $house=3;
      else if($geoid==2&&$id%2==0)
        $house=4;
      else if($geoid==3&&$id%2==1)
        $house=5;
      else if($geoid==3&&$id%2==0)
        $house=6;
      
       
       $insertQry1="insert into participants values($id,'$name','$eid','$password','$house')";
       $insertQry2="insert into wolf_of_estreet values('$name','$eid','$geoid','$balance','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default','$default')";
       @mysqli_query($link,$insertQry1)or die(mysqli_error($link));
       @mysqli_query($link,$insertQry2)or die(mysqli_error($link));
       
       echo "<script>swal('Thank You!', 'Your registration was successful','success');</script>";
     }
     else
     {
      echo "<script>swal('Email Already Taken ', '$message','warning');</script>";
     }
    
   }





?>

<!-- Mirrored from brandio.io/envato/iofrm/html/register7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 14:39:47 GMT -->
</html>