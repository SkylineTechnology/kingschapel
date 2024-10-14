<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

$role = isset($_SESSION['urole']) ? $_SESSION['urole'] : "";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$id = isset($_GET["memberid"]) ? base64_decode($_GET["memberid"]) : "";
$d_chat = isset($_GET["m"]) ? base64_decode($_GET["m"]) : "";
$uid = isset($_GET["uid"]) ? base64_decode($_GET["uid"]) : "";
$user = isset($_GET["uid"]) ? base64_decode($_GET["uid"]) : "";

//User Detail taken to chat Page
$row2 = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$d_chat'"));
$memID = $row2['memberid'];
$email = $row2["email"];
$dept = $row2["dept"];
$fullname = $row2["fullname"];
$passport = $row2["passport"];
$date = $row2["date"];

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
$B_memID1 = $rw1['memberid'];
$email2 = $rw1["email"];
$dept2 = $rw1["dept"];
$fullname2 = $rw1["fullname"];
$gender2 = $rw1["gender"];
$dob2 = $rw1["dob"];
$passport2 = $rw1["passport"];
$mstatus2 = $rw1["mstatus"];
$phone2 = $rw1["phone"];
$address2 = $rw1["res_address"];
$date2 = $rw1["date"];
$state2 = $rw1["state"];
$lga2 = $rw1["lga"];


$rw2 = mysqli_fetch_array(mysqli_query($conn, "select * from login where username ='$username'"));
$user_role = $rw2["role"];
$user_name = $rw2["username"];


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
                                    <div class="direct-chat-messages">
                                        <?php
                                        $result = mysqli_query($conn, "select * from message where sender_id='$username'");
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <!-- Message to the right -->
                                            <div class="direct-chat-msg right">
                                                <div class='direct-chat-info clearfix'>
                                                    <span class='direct-chat-name pull-right'><?php echo $db_fullname; ?></span>
                                                    <span class='direct-chat-timestamp pull-left'><?php echo $db_date; ?></span>
                                                </div><!-- /.direct-chat-info -->
                                                <img class="direct-chat-img" src="../passport/<?php echo $db_passport; ?>" alt="message user image" /><!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    <?php echo $row["message"]; ?>
                                                </div><!-- /.direct-chat-text -->
                                            </div><!-- /.direct-chat-msg -->

                                            <!-- Message. Default to the left -->
                                            <div class="direct-chat-msg">
                                                <div class='direct-chat-info clearfix'>
                                                    <span class='direct-chat-name pull-left'><?php echo $fullname2; ?></span>
                                                    <span class='direct-chat-timestamp pull-right'><?php echo $date2; ?></span>
                                                </div><!-- /.direct-chat-info -->
                                                <img class="direct-chat-img" src="../passport/<?php echo $passport2; ?>" alt="message user image" /><!-- /.direct-chat-img -->
                                                <div class="direct-chat-text">
                                                    <?php echo $row["message"]; ?>
                                                </div><!-- /.direct-chat-text -->
                                            </div><!-- /.direct-chat-msg --> 
                                            <?php
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


 <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper">


                <!-- Main content -->
                <section class="content">

                    <div class="box box-success">
                        <div class="box-header">
                            <i class="fa fa-comments-o"></i>
                            <h3 class="box-title">Forum Chat</h3>
                            <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                                <div class="btn-group" data-toggle="btn-toggle" >
                                    <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <?php
                            $result = mysqli_query($conn, "select * from forum_group where dept_id='$db_dept' order by date desc");
                            while ($row = mysqli_fetch_array($result)) {
                                $date = date_format(date_create($row['date']), "d M Y H:iA");
                                $id = $row['user_id'];
                                $comment = $row["comment"];

                                $get_user_details = mysqli_query($conn, "select * from members where email='$id'");
                                $rows = mysqli_fetch_array($get_user_details);
                                $sender_name = $rows["fullname"];
                                $sender_pic = $rows["passport"];
                                ?>
                                <!-- chat item -->
                                <div class="item">
                                    <img src="../passport/<?php echo $sender_pic; ?>" alt="user image" class="offline"/>
                                    <p class="message">
                                        <a href="#" class="name">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $date; ?></small>
                                            <?php echo $sender_name; ?>
                                        </a>
                                        <?php echo $comment; ?>
                                    </p>
                                </div><!-- /.item -->
                                <?php
                            }
                            ?>
                        </div><!-- /.chat -->
                        <div class="box-footer">
                            <form action="" method="post">
                                <div class="input-group">                                
                                    <input type="text" name="mssg" class="form-control" placeholder="Type message..."/>
                                    <div class="input-group-btn">
                                        <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                    </div>                               
                                </div>
                            </form>
                        </div>
                    </div><!-- /.box (chat box) -->
                </section>



                <!-- /.col -->
                <!-- /.col -->
            </div><!-- /.row -->