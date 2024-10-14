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
                        <h2 class="hny-title text-center">Our Believe</h2>
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
                        <div class="col-lg-12 mb-lg-0 mb-5">
                            <h3 class="hny-title" style="text-align: center;">Our Believe</h3>
                            <p class="my-4" style="text-align: justify; color: black;">


                                <b style="color: black;">The Holy Spirit worked with the Father and the Son to create the world. The Father gave His Spirit to make us like His Son, Jesus Christ. The Jesus Christ we know is Jesus in the power of the Holy Spirit. He made a wonderful promise in John 14:16-17: “I will ask the Father, and He will give you another Counselor to be with you forever — the Spirit of Truth. The world cannot accept Him, because it neither sees Him nor knows Him. But you know Him, for He lives with you and will be in you.” The Holy Spirit is to be with us forever. He is not known or received by everyone, but only by those who are prepared for Him. The Holy Spirit shows us how wrong our sins are. He helps us to accept Jesus Christ as our Saviour. He completely changes our lives. This is called being converted or born again.<br>
                                    Jesus Christ is a soul-winner. That is what He came for, lived for, died for and rose again for. He came to restore the relationship and fellowship between God and man. As to His human nature, Jesus Christ was a descendant of David. As to His divine nature, He was shown with great power to be the Son of God by being raised from death on the third day. Now He sits at the right hand of the throne of God (Hebrews 12:2; Romans 1:2-4). He was at all points tempted just as we are, yet was without sin. Jesus Christ loves us, died for us, reigns in power for us and still prays for us.<br>
                                    Holy men of God were carried along by the Holy Spirit as they spoke the message that came from God. The Holy Bible is more than long-ago events and ancient wisdom. It is God’s message of grace and truth to us today (2 Timothy 3:16; 2 Peter 1:21).<br>
                                    Sin points one to eternal death and destruction but God’s Word points one to life. If Christ Jesus is our Lord and Saviour, a new body, a new soul and a new spirit await us one day. God’s Spirit joins Himself to our spirit to declare that we are God’s children (Romans 8:16).<br>
                                    Salvation is to be set free from sin and its penalties and is received by faith in the cleansing power of the Blood of Jesus Christ. Each man has to accept Jesus Christ as his personal Lord and Savior, otherwise Jesus’ death will not save him.<br>
                                    God’s Word refreshes our minds while God’s Spirit renews our strength. To be born again, not only must we have God’s Word but also His Spirit, mixed with repentance and faith in our hearts.<br>
                                    Divine healing is the supernatural power of God bringing health to the human body. It is received by faith in the finished work of our Lord Jesus Christ. All the punishment Jesus Christ received before and during His crucifixion was for our healing – spirit, soul and body. By His stripes, we are healed. Divine healing was included in the benefits that Jesus Christ bought for us at Calvary.<br>
                                    Water baptism and baptism in the Holy Spirit. We also believe in speaking in tongues as the Spirit of God gives utterance (Acts 2:4). All who enter into the number of the body of Christ do so because they are baptized in the Holy Spirit (1 Corinthians 12:13; Romans 8:9). When you are baptized in the Holy Spirit, God’s power will come upon you as it did on the first disciples on the day of Pentecost (Acts 2:1-4). When God’s power comes upon you, the Holy Spirit will affect everything about you. The Holy Spirit produces rivers of life, joy, love, peace and power to flow out of your spirit for the needs of others (John 7:37-38).<br>
                                    The Lord’s Supper as was celebrated by Jesus Christ and His disciples in Matthew 26:26-28,”While they were eating, Jesus took bread, gave thanks and broke it, and gave it to His disciples, saying, ‘Take and eat; this is My body.’ Then He took the cup, gave thanks and offered it to them, saying, ‘Drink from it, all of you. This is My blood of the covenant, which is poured out for many for the forgiveness of sins.’” As the disciples of old were instructed to partake of the Lord’s Supper by Jesus Christ, we also partake of the Lord’s Supper (2 Peter 1:4), upon the instruction of the Holy Spirit (1 Corinthians 2:10; 11:26-31).<br>
                                    Jesus Christ will come again, just as He went away (Acts 1:11; 1 Thessalonians. 4:16-17).
                                    .
                            </p>

                        </div>

                    </div>	

                </div>
            </div>
        </section>
        <!-- //content-6-section -->



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

