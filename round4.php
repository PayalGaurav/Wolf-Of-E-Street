<?php 
ob_start();
require("dbconnection.php");
session_start();
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
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme7.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120573841-2"></script>
    <script>
      (function (global) { 

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {  
    localStorage.setItem("key", "value");          
        noBackPlease();

        // disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };          
    }

})(window);
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-120573841-2');
    </script>
   
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
          var previous;
          var ibal;
          //var min=15;
          //var sec=0;

          // window.onload=function()
          // {
          //   // Store
          //   localStorage.setItem("key", "value");
          //   // Retrieve
          //   document.getElementById("result").innerHTML=localStorage.getItem("key"); 
          // }

         if(localStorage.getItem("counter44"))
          {
             if(localStorage.getItem("counter44") >= 600)
             {
              var value = 601;
             }
             else
             {
              var value = localStorage.getItem("counter44");
             }
          }
          else
          {
             var value = 1;
          }
           //document.getElementById('divcounter44').innerHTML = value;
           

         var counter44 = function ()
          {
            if(localStorage.getItem("counter44")>600)
           {
            clearInterval(interval);
            $("#submit").click();
           }
            if(value >= 600)
            {
              localStorage.setItem("counter44", 601);
              value = 601;
            }
            else
            {
              value = parseInt(value)+1;
              localStorage.setItem("counter44", value);
            }
            //document.getElementById('').innerHTML = value;
            };


            var interval = setInterval(function (){counter44();}, 1000);


          jQuery(document).ready(function () {
             

             $("input").on('focus', function () {
                 previous = this.value;
                 }).change(function() {
              //alert(previous);
               previous = this.value;
               previous=parseInt(previous);
              });
           });
          function balance(id)
          {     
            var initialBalance=parseInt(document.getElementById("bal").innerHTML);
            var expenditure=parseInt(document.getElementById("exp").innerHTML);
            var increment=parseInt(document.getElementById(id).value);
            if(Number.isNaN(increment))
            {
              increment=0;
              document.getElementById(id).value=0;
            }  
            //alert("Initial="+initialBalance);
            //alert("New sub value = "+increment);
            if(increment>=0&&increment<=1000)
            {
            if(previous)
            {
            previous=parseInt(previous);
            //alert("previous="+previous);
            var final=initialBalance+previous-increment;
            var exp=expenditure-previous+increment;
            }
            else
            {
            var final=initialBalance-increment;
            var exp=expenditure+increment;
            }
            document.getElementById("bal").innerHTML=final;
            document.getElementById("exp").innerHTML=exp;
            if(exp>ibal)
            {
              //alert("You are spending more than your balance, you'll be disqualified! Please change your values!!"); 
              var f=parseInt(document.getElementById("bal").innerHTML);
              var ex=parseInt(document.getElementById("exp").innerHTML);
              f=f+increment;
              ex=ex-increment;
              document.getElementById("bal").innerHTML=f;
              document.getElementById("exp").innerHTML=ex;
              document.getElementById(id).value=0;
              alert("You are spending more than your balance, you'll be disqualified! Please change your values!!"); 
            }
          }
          else document.getElementById(id).value=0;
          }

          function inst()
          {
            swal('Instructions for this round : ','After a monsoon of war, through the harshness of the weather and the war, the kingdoms have finally come to an alliance that ensure peace and security to the subjects. As one, the kingdoms prepare for the Winters. Get ready because, the winter is coming!','');
          }
          
          setInterval(function(){
            var sec=localStorage.getItem("counter44");
            var min=parseInt(sec/60);
            sec=sec%60;
            min=09-min;
            sec=60-sec;
            
            
            var timerem=""+min+":"+sec;
            if(sec<10)
            {
              timerem=""+min+":0"+sec;
            }
            document.getElementById("timeleft").value=timerem;
            /*if(sec==0)
            {
              min=min-1;
              sec=60;
            }
            sec=sec-1;*/
            //var dt = new Date();
            //var time = dt.getMinutes() + ":" + dt.getSeconds();
            //document.getElementById("timeleft").value=time;
          },1000);
          setTimeout(function(e){
            
            $("#submit").click();
           
        },600000);
        </script>

</head>
<body>
    <div class="timestamp">
      <input type="text" id="timeleft" class="form-control" value="" style="background-color: #DC143C; color: #fff;"></label>
    </div>
    <div class="form-body" >
      <div class="">
        <div class="website-logo">
                <div class="">
                    <img class="logo-size" src="images/logotest1.png" alt="">
                    <div style="margin-left: 40px;"><b><u>
                      <div style="width: 100%;height: 100% ;margin-left: 20%">
                        <?php 
                    $h=$_SESSION["house"];
                    if($h==1)
                      echo "<img class='logo-size' src='images/IronIslands.png' style='width: 55%;height: 55%;' alt=''><div style='margin-left:40%;color:#00b33c;'>HOUSE : GREYJOYS</div>";
                    else if($h==2)
                      echo "<img class='logo-size' src='images/StarkLogo.png' style='width: 28%;height: 28%;' alt=''><div style='margin-left:40%;color:#00b33c;'>HOUSE : STARK</div>";
                    else if($h==3)
                      echo "<img class='logo-size' src='images/TargaryenLogo.png' style='width: 28%;height: 28%;' alt=''><div style='margin-left:40%;color:#00b33c;'>HOUSE : TARGARYENS</div>";
                    else if($h==4)
                      echo "<img class='logo-size' src='images/DothrakiLogo.png' style='width: 20%;height: 20%;' alt=''><div style='margin-left:40%;color:#00b33c;'>HOUSE : DOTHRAKI</div>";
                    else if($h==5)
                      echo "<img class='logo-size' src='images/HouseLannister.png' style='width: 28%;height: 28%;' alt=''><div style='margin-left:40%;color:#00b33c;'>HOUSE : LANNISTERS</div>";
                    else if($h==6)
                      echo "<img class='logo-size' src='images/HouseBaratheon.png' style='width: 28%;height: 28%;' alt=''><div style='margin-left:40%;color:#00b33c;'>HOUSE : BARATHEONS</div>";

                    
                        
                        ?>
                      </div>
                    <?php 
                    /*$h=$_SESSION["house"];
                    if($h==1)
                      echo "House 1";
                    else if($h==2)
                      echo "House 2";
                    else if($h==3)
                      echo "House 3";
                    else if($h==4)
                      echo "House 4";
                    else if($h==5)
                      echo "House 5";
                    else if($h==6)
                      echo "House 6";*/

                    ?>
                  </div>
                  </u></b>
                    <!--<img class="logo-size" src="images/logotest1.png" alt="">-->
                </div>
        </div>
        <div class="account">
            <div class="form-items">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                          <?php 
                          $es=$_SESSION["emailid"];
                          $selQry="select acc from wolf_of_estreet where esid='$es'";
                          $result=@mysqli_query($link,$selQry)or die(mysqli_error($link));
                          if($row=mysqli_fetch_assoc($result))
                          {
                             $rembal=$row["acc"];
                          }

                          echo "<script type='text/javascript'>ibal=$rembal;</script>";
                           echo "<div id='bal' class='form-control' style='background-color: #57D38C; color: #fff;'>$rembal</div></label>"?><div style="margin-left: 10px;">Balance</div>
                        </div>
                        
                        <div class="col-md-4">
                           <div id="exp" class="form-control" style="background-color: #57D38C; color: #fff;">0</div></label><div style="margin-left: 10px;">Expenditure</div>
                        </div>
                    </div>
                    <div class="row">   
                      <div class="col-md-2"></div>                 
                      <div class="col-md-4">
                        <button onclick="inst()" class="view" id="instruction">Instructions</button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
       </div>

        <div class="row">
            <div class="form-holder">
                
                <div class="form-content">

                    <div class="form-items">
                        <h3>Wolf Of E-Street.</h3>
                        <p> ---  Round 4 --- </p>
                        
                        <form method="post" action="round4.php">
                         <div class="col-md-12">
                          <div class="row">
                           <div class="col-md-6">

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Airforce</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am1" type="number" value="0" name="am1" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Navy</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am2" type="number" value="0" name="am2" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Land</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am3" type="number" value="0" name="am3" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Education and Entrepreneurship</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am4" type="number" value="0" name="am4" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Health care and Sanitation</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am5" type="number" value="0" name="am5" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Trade</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am6" type="number" value="0" name="am6" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Diplomacy</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am7" type="number" value="0" name="am7" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               </div>
                             </div>
                             <div class="col-md-6">
                              <div class="col-md-12">
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Mining and transportation</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am8" type="number" value="0" name="am8" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Irrigation and food</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am9" type="number" value="0" name="am9" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Police</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am10" type="number" value="0" name="am10" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                              
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Law and Justice</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am11" type="number" value="0" name="am11" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Information Broadcasting</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am12" type="number" value="0" name="am12" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>
                               <div class="row">
                                    <div class="col-md-5">
                                       <label class="form-control">Environment</label>
                                   </div>
                                   <div class="col-md-7">
                                       <input class="form-control" id="am13" type="number" value="0" name="am13" onchange="balance(this.id)" placeholder="Amount" required>
                                   </div>
                               </div>

                              </div>
                             </div>
                            </div>
                            <div class="form-button">
                                <button id="submit" type="submit" name="submit" class="ibtn" style="display:none">Submit</button>
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
    $eid=$_SESSION["emailid"];
    //echo "<script>console.log('$x');</script>";

       $amt1=$_POST["am1"];
       $amt2=$_POST["am2"];
       $amt3=$_POST["am3"];
       $amt4=$_POST["am4"];
       $amt5=$_POST["am5"];
       $amt6=$_POST["am6"];
       $amt7=$_POST["am7"];
       $amt8=$_POST["am8"];
       $amt9=$_POST["am9"];
       $amt10=$_POST["am10"];
       $amt11=$_POST["am11"];
       $amt12=$_POST["am12"];
       $amt13=$_POST["am13"];
       
       //$eid=$_SESSION["emailid"];
       //echo "<script>console.log('Hey');</script>";
       $selQry="select acc from wolf_of_estreet where esid='$eid'";
       $result=@mysqli_query($link,$selQry)or die(mysqli_error($link));
       if($row=mysqli_fetch_assoc($result))
        {
            $bal=$row["acc"];
        }
       $newbal=$bal-($amt1+$amt2+$amt3+$amt4+$amt5+$amt6+$amt7+$amt8+$amt9+$amt10+$amt11+$amt12+$amt13);
  
       $upQry="update wolf_of_estreet set acc='$newbal',p4_1='$amt1',p4_2='$amt2',p4_3='$amt3',p4_4='$amt4',p4_5='$amt5',p4_6='$amt6',p4_7='$amt7',p4_8='$amt8',p4_9='$amt9',p4_10='$amt10',p4_11='$amt11',p4_12='$amt12',p4_13='$amt13' where esid='$eid' ";
       @mysqli_query($link,$upQry)or die(mysqli_error($link));
       //echo "<script>swal('Thank You!', 'Your form was submitted','success');</script>";
       header("location:interval.html");
    
   }






?>

<!-- Mirrored from brandio.io/envato/iofrm/html/register7.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 14:39:47 GMT -->
</html>
