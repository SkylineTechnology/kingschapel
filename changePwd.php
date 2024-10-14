<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$role = isset($_SESSION['urole']) ? $_SESSION['urole'] : "";
$userid = isset($_SESSION['username']) ? $_SESSION['username'] : "";

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));


if (isset($_POST["updatepass"])) {
    $op = $_POST["op"];
    $np = $_POST["np"];
    $cp = $_POST["cp"];

    // $curr_pass = mysqli_fetch_array(mysqli_query($conn, "select * from login where username='$userid'"));// or die(mysqli_error($conn));
    $get_curr_pass = mysqli_query($conn, "select * from login where username='$userid'") or die(mysqli_error($conn));
    $curr_pass = mysqli_fetch_array($get_curr_pass);
    $pass = $curr_pass["password"];
    if ($op == $pass) {
        if ($np == $cp) {
            $update_pass = mysqli_query($conn, "update login set password='$np' where username='$userid'") or die(mysqli_error($conn));
            if ($update_pass) {
                echo "<script>alert('password changed successfully')</script>";
            }
        } else {
            echo "<script>alert('new password doesnt match confirm password!')</script>";
        }
    } else {
        echo "<script>alert('incorrect old password, please try after some minute')</script>";
    }
}
?>
<html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Contact Us | <?php echo $sitename; ?></title>
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
                        <h2 class="hny-title text-center">Change Password</h2>
                        <ol class="breadcrumb mb-0">
                           
                        </ol>
                    </nav>
                </div>
            </div>
        </section>


        <!-- /contact-form -->
        <section class="w3l-contact-main">
            <div class="contact-infhny py-5">
                <div class="container">
                    <div class="contact-grids row py-lg-5">
                        
                        <div class="contact-right col-lg-10 pl-lg-4" style=" margin: 0px auto;">
                            
                            <form action="" method="post" class="signin-form mt-lg-5 mt-4" name="myform">
                                <div class="input-grids">
                                    <input type="password" name="op" placeholder="Enter Old Password" class="contact-input" required="required" />
                                    <input type="password" name="np" placeholder="Enter New Password" class="contact-input" required="required"/>
                                    <input type="password" name="cp" placeholder="Confirm New Password" class="contact-input" required="required"/>
                                </div>
                                
                               
                                <button type="submit" name="updatepass" class="btn submit" style=" background-color: goldenrod; border: none;">Update Password</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="map-hny">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin" style="border:0" allowfullscreen=""></iframe>
            </div>
        </section>
        <!-- //contact-form -->


        <!-- /contact-form -->
       
        <!-- //contact-form -->
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