<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

$role = isset($_SESSION['role']) ? $_SESSION['role'] : "";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$id = isset($_GET["memberid"]) ? base64_decode($_GET["memberid"]) : "";
$d_chat = isset($_GET["m"]) ? base64_decode($_GET["m"]) : "";
//member records
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));
$db_memID = $rw['memberid'];
$db_email = $rw["email"];
$db_dept = $rw["dept"];
$db_fullname = $rw["fullname"];
$db_gender = $rw["gender"];
$db_dob = $rw["dob"];
$db_passport = $rw["passport"];
$db_mstatus = $rw["mstatus"];
$db_phone = $rw["phone"];
$db_address = $rw["res_address"];
$db_date = $rw["date"];
$db_state = $rw["state"];
$db_lga = $rw["lga"];


$rw1 = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$d_chat'"));
$memID = $rw1['memberid'];
$email = $rw1["email"];
$dept = $rw1["dept"];
$fullname = $rw1["fullname"];
$gender = $rw1["gender"];
$dob = $rw1["dob"];
$passport = $rw1["passport"];
$mstatus = $rw1["mstatus"];
$phone = $rw1["phone"];
$address = $rw1["res_address"];
$date = $rw1["date"];
$state = $rw1["state"];
$lga = $rw1["lga"];

if (isset($_POST["submit"])) {
    $message = $_POST['message'];
    $sender = $username;
    $receiver = $d_chat;
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
                <!-- Main content -->
                <section class="content">




                    <!--Direct Chat-->
                    <div class='row'>
                        <div class='col-md-12'>
                            <!-- DIRECT CHAT -->
                            <div id="myDirectChat" class="box box-warning direct-chat direct-chat-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Direct Chat</h3>
                                    <div class="box-tools pull-right">
                                        <span data-toggle="tooltip" title="3 New Messages" class='badge bg-yellow'>3</span>
                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages" style="height: 400px !important; overflow: scroll;" id="myDiv">
                                        <?php
                                        $result = mysqli_query($conn, "select * from message where (sender_id='$username' and receiver_id='$d_chat') or (receiver_id='$username' and sender_id='$d_chat') order by date asc");
                                        while ($row = mysqli_fetch_array($result)) {
                                            $sender_id = $row["sender_id"];
                                            $receiver_id = $row["receiver_id"];
                                            $sent_message = $row["message"];
                                            $msg_date = $row["date"];
                                            $status = $row["status"];

                                            if ($sender_id == $username) {
                                                ?>

                                                <div class="direct-chat-msg right">
                                                    <div class='direct-chat-info clearfix'>
                                                        <span class='direct-chat-name pull-right'><?php echo $db_fullname; ?></span>
                                                        <span class='direct-chat-timestamp pull-left'><?php echo $msg_date; ?></span>
                                                    </div><!-- /.direct-chat-info -->
                                                    <img class="direct-chat-img" src="../passport/<?php echo $db_passport; ?>" alt="message user image" /><!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        <?php echo $sent_message; ?>
                                                    </div><!-- /.direct-chat-text -->
                                                </div><!-- /.direct-chat-msg -->

                                                <?php
                                            } else {
                                                ?>

                                                <!-- Message. Default to the left -->
                                                <div class="direct-chat-msg">
                                                    <div class='direct-chat-info clearfix'>
                                                        <span class='direct-chat-name pull-left'><?php echo $fullname; ?></span>
                                                        <span class='direct-chat-timestamp pull-right'><?php echo $msg_date; ?></span>
                                                    </div><!-- /.direct-chat-info -->
                                                    <img class="direct-chat-img" src="../passport/<?php echo $passport; ?>" alt="message user image" /><!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        <?php echo $sent_message; ?>
                                                    </div><!-- /.direct-chat-text -->
                                                </div><!-- /.direct-chat-msg -->
                                                <?php
                                            }
                                        }
                                        ?>

                                    </div><!--/.direct-chat-messages-->


                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <form action="" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control"/>
                                            <span class="input-group-btn">
                                                <button type="submit" name="submit" class="btn btn-warning btn-flat">Send</button>
                                            </span>
                                        </div>
                                    </form>
                                </div><!-- /.box-footer-->
                            </div><!--/.direct-chat -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <?php
            include 'includes/footer.php';
            ?>
            
            <script>
                var objDiv = document.getElementById("myDiv");
                objDiv.scrollTop = objDiv.scrollHeight;
            </script>

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