<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';
$role = isset($_SESSION['role']) ? $_SESSION['role'] : "";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";

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

$rw2 = mysqli_fetch_array(mysqli_query($conn, "select * from login where username ='$username'"));
$user_role = $rw2["role"];
$user_name = $rw2["username"];




if (isset($_POST["groupChat"])) {
    $message = $_POST['usermsg'];
    $sender = $db_fullname;

    $date = date("Y-m-d H:i:s");
    $status = 'pending';

    $group_mssg = mysqli_query($conn, "insert into forum_group values('','$db_dept','$sender','$message','$date')") or die(mysqli_error($conn));
}

if (isset($_GET ['logout'])) {
    $cb = fopen("log.html", 'a');
    fwrite($cb, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has left the chat session.</i><br></div>");
    fclose($cb);
    session_destroy();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Simple Live Chat Using PHP and Javascript</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <style type="text/css">
            .content{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <div id="wrapper">
            <div id="menu">
                <h1>Simple Live Chat!</h1><hr/>
                <p class="welcome"><b>HI - <a><?php echo $db_fullname; ?></a></b></p>
                <p class="logout"><a id="exit" href="../index" class="btn btn-default">Home</a></p>
                <div style="clear: both"></div>
            </div>

            <div id="chatbox">
                <?php
                $groupChat = mysqli_query($conn, "select * from forum_group where dept_id='$db_dept'");
                while($row1 = mysqli_fetch_array($groupChat)){
                    ?>
                <div class="content" style="border:none;"><b><?php echo $row1['user_id']; ?>:</b> <?php echo $row1['comment']; ?></div>
                    <?php
                }
                ?>
            </div>
            <form action="" method="post">
                <input name="usermsg" class="form-control" type="text" id="usermsg" placeholder="Create A Message" />
                <input name="groupChat" class="btn btn-default" type="submit"  value="Send" />
            </form>
        </div>


    </body>
</html>