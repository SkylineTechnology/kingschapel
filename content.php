<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));


$content_id = isset($_GET["read"]) ? base64_decode($_GET["read"]) : "";
$row = mysqli_fetch_array(mysqli_query($conn, "select * from blog where blog_id='$content_id'")) or die(mysqli_error($conn));
$title = $row["topic"];
$writter = $row["author"];
$msg = $row["message"];
$type = $row["type"];
$image = $row["img"];
$date = date_format(date_create($row["date"]), "d M Y H:i A");
$blogid = $row["blog_id"];
$comments = mysqli_query($conn, "select * from comments where blog_id='$blogid' order by date desc");
$num_of_comments = mysqli_num_rows($comments);



if (isset($_POST["submit"])) {
    $name = htmlentities(addslashes($_POST["fullname"]));
    $msg = htmlentities(addslashes($_POST["message"]));
    $comm_date = date("Y-m-d H:m:s");

    $insert = mysqli_query($conn, "insert into comments values ('','$blogid','$name','$msg','$comm_date')");
    if ($insert) {
        $id = $_GET['read'];
        echo "<script>alert('Comment Posted Succesfully'); window.location.href='content?read=$id'</script>";
    } else {
        echo "<script>alert('Operations failed, please try after some minutes')</script>";
    }
}
?>
<html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>About Us | <?php echo $sitename; ?></title>
        <!-- Template CSS -->
        <link rel="stylesheet" href="css/style-starter.css">
        <!-- Template CSS -->
        <link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,500i,600,700&display=swap" rel="stylesheet">
        <!-- Template CSS -->

    </head>
    <body>

        <!--/top-header-content-->
        <?php
        include 'includes/header.php';
        ?>
        <!--//top-header-content-->


        <section class="w3l-inner-page-main">
            <div class="breadcrumb-infhny">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <h2 class="hny-title text-center"></h2>
                        <ol class="breadcrumb mb-0">

                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <section class="w3l-content-6">
            <!-- /content-6-section -->
            <div class="content-6-mian py-5">
                <div class="container py-lg-5">
                    <div class="content-info-in row">
                        <img  src="admin/media/blog_images/<?php echo $image; ?>" style=" width:100%; height:30%; margin-bottom: 10px;" alt=" " class="img-responsive" />

                        <div class="content-gd col-lg-12" style=" text-align: justify;">
                            <h5 class="card-title" style="text-align:center; color: goldenrod;"><?php echo $title; ?></h5>
                            <nav><span class="fa fa-user" aria-hidden="true"></span> <a href="content?read=<?php echo base64_encode($blogid); ?>"><font color="#2e8b57"><?php echo $writter; ?></font></a></nav>
                            <nav><span class="fa fa-tag" aria-hidden="true"></span> <a href="content?read=<?php echo base64_encode($blogid); ?>"><font color="#2e8b57"><?php echo $date; ?></font></a></nav>
                            <nav><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="content?read=<?php echo base64_encode($blogid); ?>"><?php
                                    if ($num_of_comments < 1) {
                                        echo 0;
                                    } else {
                                        echo $num_of_comments;
                                    }
                                    ?> Comments</a></nav>
                            <p><?php echo html_entity_decode($msg); ?></p>
                        </div><br>
                        <p style="margin-left: 20px;"><b>Comment(s):</b></p>
                        <?php
                        while ($com = mysqli_fetch_array($comments)) {
                            $comentid = $com["comment_id"];
                            $bl_id = $com["blog_id"];
                            $fullname = $com["fullname"];
                            $com_msg = $com["comment"];
                            $comm_date = date_format(date_create($com["date"]), "d M Y H:i A");
                            ?>
                            <div style="border-radius:34px; width: 100% !important;" class="tab_grid_prof" >                          
                                <div class="col-sm-10" style=" min-height: 70px; border: 1px solid #ccc; margin-left: 20px;margin-top: 10px; border-radius: 10px;">
                                    <div class="location_box1">
                                        <span class="m_2_prof"><small style="font-weight: bolder; color: #339900;"><?php echo $fullname; ?></small> &nbsp; <small style="color:#01010f;"><?php echo $comm_date; ?></small></span>
                                        <p><?php echo html_entity_decode(addslashes($com_msg)); ?></p>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="col-lg-10 pl-lg-9">
                            <form action="" method="post" class="signin-form mt-lg-5 mt-4">
                                <div class="input-grids">
                                    <input type="text" name="fullname" placeholder="Full name" required="required" style=" width: 100%; margin-bottom: 15px; height: 45px; outline: none;" />
                                </div>
                                <div>
                                    <textarea name="message" placeholder="Type your message here" required="required" style=" width: 100%; margin-bottom: 15px; height: 120px; outline: none;"></textarea>
                                </div>
                               
                                <button type="submit" name="submit" class="btn submit" style=" background-color: goldenrod; border: none; color: white;">Comment</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php
        include 'includes/footer.php';
        ?>
    </div>
</body>
</html>


<script src="js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="js/bootstrap.min.js"></script>
