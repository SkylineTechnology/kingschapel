<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

if (isset($_POST["upload"])) {
    $comment = isset($_POST["comment"]) ? $_POST["comment"] : "";
    

    // Images
    $pic_name = isset($_FILES['pic']['name']) ? $_FILES['pic']['name'] : "";

    if ($pic_name != "") {
        $screen_img1_ext = pathinfo($pic_name, PATHINFO_EXTENSION);

        $img_url = upload_gallery_image($_FILES['pic']['tmp_name'], $screen_img1_ext, 1);
        if ($img_url != "") {
            $insert_test = mysqli_query($conn, "insert into testing values ('','$img_url')");
            if ($insert_test) {
                echo "<script>alert('Photo Uploaded Successfully!')</script>";
            } else {
                echo "<script>alert('Operations Failed, Please Try after some minutes!')</script>";
            }
        } else {
            echo "<script>alert('Operations Failed, Image could not be uploaded!')</script>";
        }
    } else {
        echo "<script>alert('Operations Failed, Image could not be uploaded!')</script>";
        // $img_url = "";
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
                        <h2 class="hny-title text-center">Contact</h2>
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
                        <div class="contact-left col-lg-6">
                            <img src="images/contact-sec.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="contact-right col-lg-6 pl-lg-4">
                            <h3>Contact Us@</h3>
                            <h4>Kings Chapel Int'l Ministry</h4>
                            <p>(ARENA OF LIBERTY)</p>
                            <form action="" method="post" enctype="multipath/form-data" class="signin-form mt-lg-5 mt-4" name="myform">
                                <div class="input-grids">
                                    <input type="file" name="pic" placeholder="Image" class="contact-input" required="required" />
                                   
                                
                                <button type="submit" name="upload" class="btn submit" style=" background-color: goldenrod; border: none;">Send Message</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="map-hny">
                <iframe src="https://maps.app.goo.gl/nnoWsbVyuGm1JtyS6" style="border:0" allowfullscreen=""></iframe>
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