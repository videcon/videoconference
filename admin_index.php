<?php
session_start();
//session_register("SESSION");
include 'encode.php';     
//--- ใช้ในกรณีที่ต้องการนำชื่อหรือข้อมูลอื่นๆจาก LDAP มาแสดง แต่ encoding ไม่ใช้ UTF-8
//--- เนื่องจากข้อมูลของ LDAP เป็น UTF-8  จึงต้องแปลงข้อมูลก่อนจาก UTF-8 เป็น TIS-620 หรือ Windows-874

echo "<center>";


//--- ตรวจสอบว่ามีตัวแปรแบบ session ชื่อ $SESSION["Logon"] และมีค่าเป็น 1 หรือไม่   เพื่ออนุญาตให้เข้าสู่ระบบได้ 
if (isset($_SESSION["Logon"]) && $_SESSION["Logon"]==1) {
  //--- เริ่มกระบวนการของระบบ ------------------------------------------
  
  
  
  
  //--- จบกระบวนการของระบบ ----------------------------------------------
} else {

  if($_SESSION["username"] == ""){


  echo "<a href=logout.php>เข้าสู่ระบบ (Login)</a>";
  echo' <html>
          <meta charset="utf-8">
          <script>              
              window.location="http://158.108.207.4/sp_60_VideoCon/logout1.php";
          </script>
          </html>';}
}

echo "</center>";
/*
require_once __DIR__ . '/db_con.php';
                    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
                    if (mysqli_connect_errno()) {
                      printf("Connect failed: %s\n", mysqli_connect_error());
                      exit();
                    }*/


$uid  =  $_SESSION["ldap_uid"]    ;
  $id = str_split($uid);
//กระจายตัวอักษรบัญชีลง array
   


    if($_SESSION["username"] == "admin"|| $_SESSION["username"] == "admin2"){
        
      //เช็คเพื่อไม่ให้ข้ามหน้ากัน
      //เช็คแล้วผ่าน


    }else if($_SESSION["ldap_uid"] == "b5720501011" || $id[0] == "f" || $id[0] == "k" || $id[0] == "c"){
    echo '<meta charset="UTF-8">
        <meta http-equiv="refresh" content="0; url=http://158.108.207.4/sp_60_VideoCon/T_index.php">
        <script type="text/javascript">
            window.location.href = "http://158.108.207.4/sp_60_VideoCon/T_index.php"
        </script>
        <title>Page Redirection</title>';

    }else if($id[4] == "0" && $id[5] == "5"){

    echo '<meta charset="UTF-8">
        <meta http-equiv="refresh" content="0; url=http://158.108.207.4/sp_60_VideoCon/index.php">
        <script type="text/javascript">
            window.location.href = "http://158.108.207.4/sp_60_VideoCon/index.php"
        </script>
        <title>Page Redirection</title>';


    }








?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Video Conference CPE</title>
    
    <!-- Bootstrap -->
    <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="./vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="./vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="admin_index.php" class="site_title"><i class="fa fa-home"></i></i> <span>   HOME</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/picture.jpg" width="60" height="55" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo   $_SESSION["username"] ;?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  
                  <li><a href="admin_queue.php"><i class="fa fa-edit"></i> จัดการการจองคิว </a>
                    
                  </li>

                  <li><a href="admin_video.php"><i class="fa fa-video-camera"></i> จัดการวีดีโอการสนทนา </a>
                    
                  </li>
                  
                  <li><a href="admin_mail.php"><i class="fa fa-envelope-o"></i> กล่องข้อความ </a>
                    

                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">
                <h3>Others</h3>
                <ul class="nav side-menu">
                  <li><a href="http://www.cpe.eng.kps.ku.ac.th/th/index.php/en/"><i class="fa fa-laptop"></i> WEB SITE </a>
                    
                  </li>
                  <li><a href="http://www.facebook.com/cpe.eng.kps"><i class="fa fa-facebook"></i> Facebook </a>
                    
                  </li>
                  <li> <div id="server" align="center"></div> 
                    <TABLE style="display: none;">
            
            
            <TR>
                <TD id="difference"  style="text-align: right"></TD></TR>
        </TABLE>
                  </li>
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
       <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/picture.jpg" alt=""><?php echo   $_SESSION["username"] ;?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    
                    <li><a href="logout1.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->
          <img src="images/logo.jpg" style="width: 70%">


<br></br>
<br></br>
<div align="center">
 <h5 style="border: 1px solid black; width:400px; height:220px;" >
  <br></br>
<div align="left">
  &nbsp;&nbsp;&nbsp;รายละเอียด ของผู้ดูแลระบบ<br></br>
<br></br>

  &nbsp;&nbsp;&nbsp;1.สามารถลบการจองคิวที่ไม่พึงประสงค์ได้<br></br>
  &nbsp;&nbsp;&nbsp;2.สามารถลบวีดีโอการสนทนาได้<br></br>
  &nbsp;&nbsp;&nbsp;3.สามารถอ่าน-ตอบข้อความสื่อสารจากผู้ใช้อื่นๆได้<br></br>
  &nbsp;&nbsp;&nbsp;4.สามารถดูข้อมูลผู้ใช้งานได้

</div>
<br></br>
<br></br>



</div><br></br>
</div>


        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- clock -->
    <script src="./se/lib/ServerDate.js"></script>
    <script>
// Display two real time clocks, the server's and the client's, and show the
// difference between them in milliseconds.
function updateClocks()
{
    var client = new Date();

    document.getElementById("server").innerHTML = String(ServerDate.toLocaleString());
    

    document.getElementById("difference").innerHTML = (ServerDate - client)
        + " &plusmn; " + ServerDate.getPrecision() + " ms";
}

// Display the clocks and update them every second.
updateClocks();
setInterval(updateClocks, 1000);
        </script>

    <!-- jQuery -->
    <script src="./vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="./vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js-->
    <script src="./vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="./vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="./vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="./vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="./vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="./vendors/Flot/jquery.flot.js"></script>
    <script src="./vendors/Flot/jquery.flot.pie.js"></script>
    <script src="./vendors/Flot/jquery.flot.time.js"></script>
    <script src="./vendors/Flot/jquery.flot.stack.js"></script>
    <script src="./vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="./vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="./vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="./vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="./vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="./vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="./vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="./vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="./vendors/moment/min/moment.min.js"></script>
    <script src="./vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="./build/js/custom.min.js"></script>
	
  </body>
</html>
