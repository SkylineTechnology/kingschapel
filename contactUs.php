<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));


if (isset($_POST["submit"])) {
    // $contactUsid = uniqueCode($conn);
    $fullname = secure($_POST["fullname"]);
    $email = secure($_POST["email"]);
    $phone = secure($_POST["phone"]);
    $msg = secure($_POST["mssg"]);
    $date = date("Y-m-d H:i:s");
    $status = 'yes';
        $contactUs = mysqli_query($conn, "insert into contact values ('','$fullname','$email','$phone','$msg','$date','$status')") or die(mysqli_error($conn));
        
        if($contactUs){
            echo "<script>alert('Message has Been Sent Successfully')</script>";
        }else{
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
                            <form action="" method="post" class="signin-form mt-lg-5 mt-4" name="myform">
                                <div class="input-grids">
                                    <input type="text" name="fullname" placeholder="Full name" class="contact-input" required="required" />
                                    <input type="email" name="email" placeholder="Your email" class="contact-input" required="required"/>
                                    <input type="text" name="phone" placeholder="Phone number" class="contact-input" required="required"/>
                                </div>
                                <div  class="form-input">
                                    <textarea name="mssg" placeholder="Type your message here" required="required"></textarea>
                                </div>
                                
                                <button type="submit" name="submit" class="btn submit" style=" background-color: goldenrod; border: none;">Send Message</button>
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