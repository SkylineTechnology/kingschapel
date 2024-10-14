<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';


$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$role = isset($_SESSION["role"]) ? $_SESSION["role"] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));

if (isset($_POST["submit"])) {
    // $contactUsid = uniqueCode($conn);
    $fullname = secure($_POST["fullname"]);
    $address = secure($_POST["address"]);    
    $phone = secure($_POST["phone"]);
    $email = secure($_POST["email"]);
    $Prayer_rqst = secure($_POST["prayer_rqst"]);   
    $date = date("Y-m-d H:i:s");
    
    $prayers = mysqli_query($conn, "insert into prayer_line values ('','$fullname','$address','$phone','$email','$Prayer_rqst','$date')") or die(mysqli_error($conn));

    if ($prayers) {  
        echo "<script>alert(' Prayer Request send successfully!')</script>";                
    } else {
        echo "<script>alert('There is an error try after some time')</script>";
        echo mysqli_error($conn);
    }
}
?>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home | <?php echo $sitename; ?></title>
        <!-- Template CSS -->
        <link rel="stylesheet" href="css/style-starter.css">
        <!-- Template CSS -->
        <link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,500i,600,700&display=swap" rel="stylesheet">
        <!-- Template CSS -->
        <style>
            .welc{
                text-align: center;
                padding: 30px;
                border-bottom: 1px solid #ccc;
                border-right: 1px solid #ccc;
                border-left: 1px solid #ccc;
                border-radius: 5px;
                font-weight: bolder;
                color: black;
            }
            .prog_div{
                border: 1px solid #ccc;
                border-radius: 5px;
                width: 100%;
                min-height: 165px;
                display: inline-flex;
                justify-content: space-between;
                background-color: white;
            }
            .prog_img{
                height: 200px;
                width: 260px;
                padding: 10px;
                padding-top: 23px;
            }
            .prog_time{
                border-right: 1px solid #ccc;
                height: 170px;
                width: 150px;
                margin-top: 15px;
                padding-top: 40px;
                text-align: center;
                margin-right:px;
            }

            .prog_title{

                height: 200px;
                width: 460px;
                padding-top: 20px
            }
            .prog_title p{

                color: black;
            }
            .read_more{

                padding-top: 40px;
                height: 200px;
                width: 150px; 
            }
            .upcoming{
                width: 350px;
                padding: 5px;
                color: white;
                border: 1px solid goldenrod;
                text-align: center;
                letter-spacing: 5px;
                background-color: goldenrod
            }
            form input,select,textarea{
                width: 95%;
                border: 1px solid #ccc;
                border-radius: 7px;
                height: 40px;
                margin-bottom: 17px;
                outline: none;
                padding-left: 5px;
            }
            label{
                font-weight: bold;
            }

        </style>
    </head>
    <body>

        <!--/top-header-content-->
        <?php
        include 'includes/header.php';
        ?>
        <!--//top-header-content-->

        <!--w3l-banner-slider-main-->
        <section class="w3l-banner-slider-main">
            <div class="bannerhny-content">
                <!--/banner-slider-->
                <div class="content-baner-inf">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">

                                </div>
                            </div>
                            <div class="carousel-item item2">
                                <div class="container">

                                </div>
                            </div>
                            <div class="carousel-item item3">
                                <div class="container">

                                </div>
                            </div>
                            <div class="carousel-item item4">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--//banner-slider-->
            </div>
            <!--/featured-grids -->
            <!--//featured-grids -->
        </section>
        <!-- //w3l-banner-slider-main -->

        <section class="w3l-team-main">
            <div class="team py-5">
                <div class="container py-lg-5">
                    
                    <div class="row team-row mt-5">
                        <div class="col-lg-3 col-md-6 team-wrap">
                            <div class="team-member text-center">
                                <div class="team-img">
                                    <h3 class="hny-title">About Us</h3>
                                    <p class="my-4" style="text-align: justify;">


                                        Kings Chapel International Prayer Ministry(ARENA OF LIBERTY) is a Prophetic & Deliverance Ministry.Here,we 
                                        worship God in Spirit and in Truth.Believing is our connection.Jesus Christ dwells in our midst doing mighty 
                                        things,setting the captives free and healing the sick,breaking the chains of bareness and lifting the poor.
                                        READ MORE
                                    </p>
                                    <div class="read">
                                        <a href="aboutUs" class="read-more-btn btn" style=" background-color: goldenrod;">Read More</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- end team member -->

                        <div class="col-lg-3 col-md-6 team-wrap mt-sm-0 mt-5">
                            <div class="team-member text-center">
                                <div class="team-img">
                                    <a href="#"><img src="images/welcome1.JPG" class="img-fluid" alt=""  />
                                        
                                </div>
                                <h6 class="team-title">MEET THE PROPHET</h6>
                               
                            </div>
                        </div>
                        <!-- end team member -->

                        <div class="col-lg-6 col-md-6 team-wrap mt-md-0 mt-5">
                            <div class="team-member last text-center">
                                <div class="team-img">

                                    <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fweb.facebook.com%2FKINGSGLOBALTV%2Fvideos%2F209071140366743%2F%3Ft%3D0&show_text=false&width=734&height=413&appId" width="100%" height="280" style="border:1px solid #ccc;overflow:hidden" scrolling="no" frameborder="1" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
                                    <h6 class="team-title">LIVE SERVICE</h6>
                                    <div>
                                        <div>
                                            <div class="socials mt-20">
                                                <a href="#">
                                                    
                                                </a>
                                                <a href="#">
                                                   
                                                </a>
                                                <a href="#">
                                                    
                                                </a>
                                                <a href="#">
                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <!-- end team member -->
                    </div>
                </div>
        </section>
        <!-- //content-6-section -->
        <section class="w3l-content-5">
            <!-- /content-6-section -->
            <div class="content-5-main">
                <div class="container">
                    <div class="content-info-in row">

                        <div class="content-gd col-lg-5" style="  height: 200px; float: left !important; margin-bottom: 10px;">
                            <p class="upcoming">UPCOMING PROGRAMME</p>
                            <p style=" font-size: 25px !important; font-weight: bold;">Partners Conference</p>
                            <p style=" font-size: 14px !important; font-weight: bold;">Become a partner to be a part of what God is doing</p>
                            <p style=" font-size: 13px !important; font-weight: bold;color: goldenrod;"><span class="fa fa-calendar" style="color: #ff0000; font-size: 15px !important;"></span> Saturday 7-12-2019 <span class="fa fa-clock-o" style="color: red; font-size: 20px !important;"></span>  10:00am</p>
                            <p style=" font-size: 13px !important; font-weight: bold; color: goldenrod;"> <span class="fa fa-map-marker" style="color: #ff0000; font-size: 20px !important;"></span> Ajaji Cloister Road,Off St. Bridges Road Asaba</p>
                        </div>
                        <div class="content-gd col-lg-2">

                        </div>
                        <div class="content-gd col-lg-5" style="  height: 200px; float: left !important; margin-bottom: 10px;">
                            <p class="upcoming">Programme Starts In Next</p>
                            <p style=" font-size: 25px !important; font-weight: bold;"></p>
                        </div>

                    </div>

                </div>
            </div>
        </section>



        <!-- //specification-6-->
        <section class="w3l-content-6">
            <!-- /content-6-section -->
            <div class="content-6-mian py-5">
                <h3 class="hny-title text-center">Our Programs</h3>
                <div class="container py-lg-5">
                    <div class="content-info-in row">
                        <?php
//Start Pagination 
                        $item_per_page = 10;
                        $number_of_items = mysqli_num_rows(mysqli_query($conn, "select * from program"));
                        $number_of_pages = ceil($number_of_items / $item_per_page);

                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }
                        $current_page_first_item = ($page - 1) * $item_per_page;
//End Pagination

                        $blog_content = mysqli_query($conn, "select  * from program LIMIT 3") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_array($blog_content)) {
                            $topic = $row["topic"];
                            $time = $row["time"];
                            $address = $row["address"];
                            $image = $row["image"];

                            $date = $row["date"];
                            $progId = $row["prog-id"];
                            ?>
                            <div class="content-gd col-lg-4">
                                <a href="content?read=<?php echo base64_encode($progId); ?>"><img src="admin/media/blog_images/<?php echo $image; ?>" style="height: 180px; width:100%;" alt=""></a>
                                <h5><a href="content?read=<?php echo base64_encode($progId); ?>"> <font color="goldenrod"><?php echo html_entity_decode($topic); ?></font></h5>


                                <div style="color: black; font-size: 14px; margin-top: 10px;">
                                    <a href="content?read=<?php echo base64_encode($progId); ?>"><span class="fa fa-calendar-o" style="color: red; font-size: 18px !important;"></span><span class="icon_text"> <span class="m_1"><b><?php echo $date; ?></b></span></span></a>
                                </div>
                                <div style="color: black; font-size: 14px; margin-top: 7px; margin-bottom: 7px;">
                                    <a href="content?read=<?php echo base64_encode($progId); ?>"><span class="fa fa-clock-o" style="color: red; font-size: 18px !important;"></span><span class="icon_text"> <span class="m_1"><b><?php echo $time; ?></b></span></span></a>
                                </div>
                                <div style="color: black !important; font-size: 12px !important; width: 100%;">
                                    <a href="content?read=<?php echo base64_encode($progId); ?>" style=" display: inline-flex; justify-content: space-between;"><span class="fa fa-map-marker" style="color: red; font-size: 18px !important;"></span> &nbsp; &nbsp;<span class="icon_text" style=""><?php echo $address; ?></span></a>
                                </div>
                                <!--<div style="color: black; font-size: 14px;">
                                    <a href="#"><span class="icon_text">Read More <i class="fa fa-caret-right icon_1"> </i></span></a>
                                </div>-->
                            </div>
                            <?php
                        }
                        ?>	

                    </div>

                </div>
            </div>
        </section>

        <section class="w3l-wecome-content-6" >
            <!-- /content-6-section -->
            <div class="ab-content-6-mian py-5" style=" background-color: #f2f2f2 !important;">
                <h3 class="hny-title" style=" text-align: center !important; color: #8080ff;">PRAYER LINE</h3>
                <h6 style=" text-align: center !important; font-size: 23px;  font-weight: bolder!important;">Every first Saturday of the Month</h6>
                <div class="container py-lg-5">
                    <div class="welcome-grids row">
                        <div class="col-lg-6 mb-lg-0 mb-5">

                            <form action="" method="post">
                                <label>Fullname:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="text" name="fullname" placeholder="" required="" value="">
                                    <div class="clear"></div>
                                </div>
                                <label>Address:</label><br>
                                <div>
                                    <textarea type="text" name="address" placeholder="" required="" value=""></textarea>
                                </div>
                                <label>Phone:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="number" name="phone" placeholder="" required="" value="">
                                    <div class="clear"></div>
                                </div>
                                <label>Email:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="email" name="email" placeholder="" required="" value="">
                                    <div class="clear"></div>
                                </div>
                                <label>Preyer Request:</label><br>
                                <div>
                                    <textarea type="text" name="prayer_rqst" placeholder="" required="" value=""></textarea>
                                </div>
                                <div>
                                    <input type="submit" name="submit" onclick="return validateForm()" value="Submit" required="" style=" background-color: goldenrod; font-weight: bold;">
                                </div>
                            </form>

                        </div>
                        <div class="col-lg-6 column">
                            <img src="images/tab1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>	

                </div>
            </div>
        </section>
        <!-- //counter-6-->





        <!-- //counter-6-->
    <section class="w3l-content-6">
            <!-- /content-6-section -->
            <div class="content-6-mian py-5">
                <h3 class="hny-title text-center">Testimony</h3>
                <div class="container py-lg-5">
                    <div class="content-info-in row">
                        <?php
//Start Pagination 
                        $item_per_page = 10;
                        $number_of_items = mysqli_num_rows(mysqli_query($conn, "select * from testimony"));
                        $number_of_pages = ceil($number_of_items / $item_per_page);

                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }
                        $current_page_first_item = ($page - 1) * $item_per_page;
//End Pagination

                        $blog_content = mysqli_query($conn, "select  * from testimony LIMIT 3") or die(mysqli_error($conn));
                        while ($row = mysqli_fetch_array($blog_content)) {
                            $fullname = $row["fullname"];
                            $gender = $row["gender"];
                            $testimony = $row["testimony"];
                            $img_url = $row["img_url"];                      
                            ?>
                            <div class="content-gd col-lg-4">
                               <img src="admin/media/testifiers/<?php echo $img_url; ?>" style="height: 180px; width:100%;" alt="">
                                <h5> <font color="goldenrod"><?php echo html_entity_decode($topic); ?></font></h5>


                                <div style="color: black; font-size: 14px; margin-top: 10px;">
                             <span class="fa fa-calendar-o" style="color: red; font-size: 18px !important;"></span><span class="icon_text"> <span class="m_1"><b><?php echo $fullname; ?></b></span></span>
                                </div>
                                <div style="color: black; font-size: 14px; margin-top: 7px; margin-bottom: 7px;">
                                    <span class="fa fa-clock-o" style="color: red; font-size: 18px !important;"></span><span class="icon_text"> <span class="m_1"><b><?php echo $gender; ?></b></span></span>
                                </div>
                                <div style="color: black !important; font-size: 12px !important; width: 100%;">
                                 <span class="fa fa-map-marker" style="color: red; font-size: 18px !important;"></span> &nbsp; &nbsp;<span class="icon_text" style=""><?php echo $testimony; ?></span>
                                </div>
                                <!--<div style="color: black; font-size: 14px;">
                                    <a href="#"><span class="icon_text">Read More <i class="fa fa-caret-right icon_1"> </i></span></a>
                                </div>-->
                            </div>
                            <?php
                        }
                        ?>	

                    </div>

                </div>
            </div>
        </section>



        <!-- //customers-6-->
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
<!-- jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="js/jquery-1.7.2.js"></script>
<script src="js/jquery.quicksand.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="js/bootstrap.min.js"></script>

