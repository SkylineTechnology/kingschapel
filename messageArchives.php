<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));


$video = "video";
$audio = "audio";
$image = ""
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
                        <h2 class="hny-title text-center">Our Media</h2>
                        <ol class="breadcrumb mb-0">

                        </ol>
                    </nav>
                </div>
            </div>
        </section>




        <section class="w3l-content-12-main">
            <!-- /content-6-section -->
            <div class="content-12 text-left py-5">
                <div class="container py-lg-5">
                    <div class="content-info-tabs">
                        <input id="tab1" type="radio" name="tabs" checked>
                        <label class="tabtle" for="tab1">Videos</label>
                        <input id="tab2" type="radio" name="tabs">
                        <label class="tabtle" for="tab2">Audios</label>
                        <input id="tab3" type="radio" name="tabs">
                        <label class="tabtle" for="tab3">Gallery</label>
                        <section id="content1" class="tab-content">
                            <div class="row content12 align-items-center">
                                <?php
                                $video_content = mysqli_query($conn, "select * from media where type = '$video' ") or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_array($video_content)) {
                                $video_title = $row["title"];
                                $video_artist = $row["artist"];
                                $video = $row["url"];
                                ?>
                                <div class="col-lg-4 column">
                                   <video controls style=" width: 300px; height: 300px;">
                                       <source src="admin/media/video/<?php echo $video ?>" type="video/mp4"/>
                                        <source src="video.ogy" type="video/ogy"/>
                                        <p>Your Browser Doesn't Support this Video</p>
                                   </video>
                                    <p><?php echo $video_artist ?>: <?php echo $video_title ?></p>

                                </div>

                                <?php
                                }
                                ?>
                            </div>
                        </section>
                        <section id="content2" class="tab-content">
                            <div class="row content12 align-items-center">
                                <?php
                                $audio_content = mysqli_query($conn, "select * from media where type = '$audio' ") or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_array($audio_content)) {
                                $audio_title = $row["title"];
                                $audio_artist = $row["artist"];
                                $audio = $row["url"];

                                ?>
                                <div class="col-lg-4 column">
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
                        </section>
                        <section id="content3" class="tab-content">
                            <div class="row content12 align-items-center">
                                 <?php
                                $image_content = mysqli_query($conn, "select * from gallery") or die(mysqli_error($conn));
                                while ($row = mysqli_fetch_array($image_content)) {
                                $image = $row["url"];

                                ?>
                                <div class="col-lg-4 column">
                                    <img src="admin/media/gallery/<?php echo $image; ?>" style=" width: 350px; height: 300px;"/>
                                </div>
                                  <?php
                                }
                                ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>



        <!--//team-sec-->
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
