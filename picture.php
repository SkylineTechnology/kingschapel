<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$video = "video";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));

?>
<html lang="zxx">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Gallery | Picture | <?php echo $sitename; ?></title>
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
                        <h2 class="hny-title text-center">Image Collections</h2>
                        <ol class="breadcrumb mb-0">

                        </ol>
                    </nav>
                </div>
            </div>
        </section>


        <!-- /contact-form -->
         <section class="w3l-team-main">
            <div class="team py-5">
                <div class="container py-lg-5">
                    
                    <div class="row team-row mt-5">
                        <?php
                        $image_content = mysqli_query($conn, "select * from gallery") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_array($image_content)) {
                            $image = $row["url"];
                            $pic_comment = $row["comment"];
                            ?>

                            <div class="col-lg-4 col-md-6 team-wrap">
                                <div class="team-member text-center">
                                    <div class="team-img">
                                        <img src="admin/media/gallery/<?php echo $image; ?>" style=" width: 350px; height: 300px;"/>
                                         <h4><?php echo $pic_comment ?></h4>
                                    </div>                               
                                </div>
                            </div> 
                            <?php
                        }
                        ?>
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