<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$video = "video";
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
                        <h2 class="hny-title text-center">Video Collections</h2>
                        <ol class="breadcrumb mb-0">

                        </ol>
                    </nav>
                </div>
            </div>
        </section>


        <!-- /contact-form -->
        <section class="w3l-services-2">
            <!-- /content-6-section -->
            <div class="services-2-mian py-5">
                <div class="container py-lg-5">
                   
                    <div class="welcome-grids row mt-5">

                        <?php
                        $video_content = mysqli_query($conn, "select * from media where type = '$video' ") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_array($video_content)) {
                            $video_title = $row["title"];
                            $video_artist = $row["artist"];
                            $video = $row["url"];
                            ?>
                            <div class="col-md-6 welcome-image">						
                                <video controls style=" width: 100%; height: 300px;">
                                    <source src="admin/media/video/<?php echo $video ?>" type="video/mp4"/>
                                    <source src="video.ogy" type="video/ogy"/>
                                    <p>Your Browser Doesn't Support this Video</p>
                                </video>												
                                <h4><?php echo $video_artist ?>: <?php echo $video_title ?></h4>
                            </div>
                            <?php
                        }
                        ?>	


                    </div>

                </div>
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