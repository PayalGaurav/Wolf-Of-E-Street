<?php
ini_set('display_errors', 1);
require "dbconnection.php";



?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 14:38:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme71.css">

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120573841-2"></script>
    <script>


        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-120573841-2');
    </script>
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="">
                    <img class="logo-size" src="images/logotest1.png" alt="">
                </div>
            </a>
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
                        <h3>Wolf Of E-Street</h3>
                        <p>Good luck!</p>
                        <div class="page-links">
                            <a href="index.php" class="active">Login</a><a href="register.php" class="active">Register</a>
                        </div>
                        <form id="myForm" action="index.php" method="post">
                            <input class="form-control" id="eidcheck" type="email" name="eidcheck" placeholder="Email ID" required>
                            <input class="form-control" id="Password" type="password" name="Password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submt" name="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                        
                        <!--<div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php

if (isset($_POST["submit"]))
    {
        $eid=mysqli_real_escape_string($link,$_POST["eidcheck"]);
        $password=mysqli_real_escape_string($link,$_POST["Password"]);
        $authquery="select esid, house from participants where esid='$eid' and password='$password'";
        //require 'dbconnection.php';
        $result=@mysqli_query($link,$authquery)or die(mysqli_error($link));
        if($row=mysqli_fetch_assoc($result))
        {
            session_start();
            $_SESSION["emailid"]=$row["esid"];
            $_SESSION["house"]=$row["house"];
            $_SESSION["logintime"]=date("d/m/y,h:i:s a");
            header("location:instructions.php");
        }
        else
        {
            echo "<script>swal('Invalid Credentials! ', '$message','warning');</script>";
        }
        
    }





?>


<!-- Mirrored from brandio.io/envato/iofrm/html/login7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 14:38:26 GMT -->
</html>