<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$video = "video";
$audio = "audio";

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));

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
                        <h2 class="hny-title text-center">Audio Collections</h2>
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
                        $audio_content = mysqli_query($conn, "select * from media where type = '$audio' ") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_array($audio_content)) {
                            $audio_title = $row["title"];
                            $audio_artist = $row["artist"];
                            $audio = $row["url"];
                            ?>
                            <div class="col-md-4 welcome-image">						
                                <audio controls>
                                    <source src="admin/media/audio/<?php echo $audio ?>" type="audio/mp3"/>
                                    <source src="audio.ogy" type="audio/ogy"/>
                                    <p>Your Browser Doesn't Support this Audio</p>
                                </audio>												
                                <p><?php echo $audio_artist ?>: <?php echo $audio_title ?></p>
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