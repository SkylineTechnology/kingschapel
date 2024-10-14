<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

if(!$_SESSION){
    header("location:../login.php");
}

$role = isset($_SESSION['role']) ? $_SESSION['role'] : "";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$id = isset($_GET["memberid"]) ? base64_decode($_GET["memberid"]) : "";
//$uid = isset($_GET["uid"]) ? base64_decode($_GET["uid"]) : "";


//User Detail taken to chat Page
$row1 = mysqli_fetch_array(mysqli_query($conn, "select * from members where email='$username'"));
$memID = $row1['memberid'];
$email = $row1["email"];
$dept = $row1["dept"];
$fullname = $row1["fullname"];
$gender = $row1["gender"];
$dob = $row1["dob"];
$passport = $row1["passport"];
$mstatus = $row1["mstatus"];
$phone = $row1["phone"];
$address = $row1["res_address"];
$date = $row1["date"];
$state = $row1["state"];
$lga = $row1["lga"];

//member records
$row = mysqli_fetch_array(mysqli_query($conn, "select * from members where email='$username'"));
$db_memID = $row['memberid'];
$db_email = $row["email"];
$db_dept = $row["dept"];
$db_fullname = $row["fullname"];
$db_gender = $row["gender"];
$db_dob = $row["dob"];
$db_passport = $row["passport"];
$db_mstatus = $row["mstatus"];
$db_phone = $row["phone"];
$db_address = $row["res_address"];
$db_date = $row["date"];
$db_state = $row["state"];
$db_lga = $row["lga"];


if (isset($_POST["submit"])) {
    $message = $_POST['message'];
    $sender = $username;
    $receiver = $username;
    $date = date("Y-m-d H:i:s");
    $status = 'pending';

    $mssg = mysqli_query($conn, "insert into message values ('','$sender','$receiver','$message','$date','$status')") or die(mysqli_error($conn));
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>KINGSCHAPEL INT MINISTRY</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <div class="wrapper">

            <?php
            include 'includes/header.php';
            ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php
            include 'includes/sidebar.php';
            ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper">

            </div><!-- /.content-wrapper -->

            <?php
            include 'includes/footer.php';
            ?>

        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='plugins/fastclick/fastclick.min.js'></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js" type="text/javascript"></script>
    </body>
</html>