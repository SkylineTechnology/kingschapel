<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));

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
                        <h2 class="hny-title text-center">About Us</h2>
                        <ol class="breadcrumb mb-0">

                        </ol>
                    </nav>
                </div>
            </div>
        </section>



        <section class="w3l-wecome-content-6">
            <!-- /content-6-section -->
            <div class="ab-content-6-mian py-5">
                <div class="container py-lg-5">
                    <div class="welcome-grids row">
                        <div class="col-lg-6 mb-lg-0 mb-5">
                            <h3 class="hny-title">ABOUT KCIPM</h3>
                            <p class="my-4" style="text-align: justify; color: black;">


                                <b style="color: goldenrod;">King’s Chapel International Prayer Ministry</b> is a rugged “faithed” ministry ordained by the physical and spiritual 
                                evidence of God’s power to overcome and overpower wickedness of the oppressors in dark and hidden places.<br>
                                As a prayer ministry, we understands that God inhabits the prayers and praises of His children; this is the 
                                reason we fervently Pray Until Something Happens <b>(We P.U.S.H).</b><br>
                                We PUSH for the breaking of chains, liberation of lost souls and repositioning of lost destinies.
                            </p>
                            	
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 welcome-image" style="text-align: center !important; margin-top: 40px;">
                            <p><b style=" color: goldenrod; font-size: 20px; text-align: center !important;">MISSION</b></p>
                            <p style=" color: black; font-size: 18px; text-align: justify; line-height: 30px;">To preach the Gospel of our Lord Jesus Christ, Reconcile men to God and Recover lost souls back to Jesus</p>
                        </div>	
                        <div class="col-lg-3 col-md-4 col-6 welcome-image" style="text-align: center !important; margin-top: 40px;">
                            <p><b style=" color: goldenrod; font-size: 20px; text-align: center !important;">VISION</b></p>
                            <p style=" color: black; font-size: 18px; text-align: justify; line-height: 30px;">To raise a Strong Army for the Lord and subdue the kingdom of Satan</p>
                        </div>
                    </div>	

                </div>
            </div>
        </section>
        <!-- //content-6-section -->


        <section class="w3l-specification-6">
            <!-- /specification-6-->
            <div class="specification-6-mian">
                <div class="container-fluid">
                    <div class="align-counter-6-inf-cols row">
                        <div class="counter-6-inf-left2 col-lg-6">

                        </div>
                        <div class="counter-6-inf-right counter-6-inf-right2 col-lg-6">
                            <h3 class="hny-title" style=" text-align: center;">Our Believe</h3>
                            <p class="pr-lg-5" style="font-size: 20px !important; text-align: justify; color: black;">The Holy Spirit worked with the Father and the Son to create the world. The Father gave His Spirit to make us like 
                                His Son, Jesus Christ. The Jesus Christ we know is Jesus in the power of the Holy Spirit. He made a wonderful promise 
                                in John 14:16-17: “I will ask the Father, and He will give you another Counselor to be with you forever — the Spirit 
                                of Truth. The world cannot accept Him, because it neither sees Him nor knows Him. But you know Him, for He lives with 
                                you and will be in you.” The Holy Spirit is to be with us forever. He is not known or received by everyone, but only 
                                by those who are prepared for Him. The Holy Spirit shows us how wrong our sins are. He helps us to accept Jesus Christ
                                as our Saviour.</p>

                            
                            <div class="buttons">
                                <a href="ourBelieve" class="read-more-btn btn" style=" background-color: goldenrod;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    

        <section class="w3l-content-12-main">
            <!-- /content-6-section -->
            <div class="content-12 text-left py-5">
                <div class="container py-lg-5">
                    <div class="content-info-tabs">
                        <input id="tab1" type="radio" name="tabs" checked>
                        <label class="tabtle" for="tab1">Our Services</label>
                        <input id="tab2" type="radio" name="tabs">
                        <label class="tabtle" for="tab2">Online Support</label>
                        <input id="tab3" type="radio" name="tabs">
                        <label class="tabtle" for="tab3">Foundation Support</label>
                        <section id="content1" class="tab-content">
                            <div class="row content12 align-items-center">
                                <div class="col-lg-6 column">
                                    <h6 class="content-heading" style="color: goldenrod;">Our Services:</h6>

                                    <ul style=" list-style: disc; line-height: 60px; margin-left: 30px; color: black;">
                                        <li>Sunday Service	-   8:30am</li>
                                        <li>Tuesday Service	-   10:00am</li>
                                        <li>Thursday Service    -   5:00pm</li>
                                        <li>1st Saturday of every month Prayer Line -   10:00am</li>
                                    </ul>


                                </div>
                                <div class="col-lg-6 column">
                                    <img src="images/tab11.jpg" class="img-fluid" alt="">
                                </div>

                            </div>
                        </section>
                        <section id="content2" class="tab-content">
                            <div class="row content12 align-items-center">
                                <div class="col-lg-6 column">
                                    <h6 class="content-heading" style="color: goldenrod;">Online Support:</h6>
                                    <ul style=" list-style: disc; line-height: 30px; margin-left: 30px; color: black;">
                                        <li><b>Project Offering</b><br>
                                            King’s Chapel Int’l Prayer Ministry<br>
                                            1014729808<br>
                                            Zenith Bank<br>
                                        </li><br>
                                        <li><b>Tithe/Offering</b><br>
                                            King’s Chapel Int’l Prayer Ministry<br>
                                            2032598326<br>
                                            First Bank<br>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6 column">
                                    <img src="images/tab2.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </section>
                        <section id="content3" class="tab-content">
                            <div class="row content12 align-items-center">
                                <div class="col-lg-6 column">
                                    <h6 class="content-heading" style="color: goldenrod;">Foundation Support</h6>
                                    <ul style=" list-style: disc; line-height: 60px; margin-left: 30px; color: black; font-weight: bold;">
                                        <li>KCIPM Foundation/School</li>
                                        <li>KCIPM Online Prayer Request</li>
                                        <li>KCIPM Workforce (Church Workers Departments)</li>
                                        <li>KCIPM School of Ministry</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 column">
                                    <img src="images/tab3.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- //content-6-section -->



        <!-- //content-6-section -->



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
