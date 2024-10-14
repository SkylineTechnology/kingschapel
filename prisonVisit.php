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
                        <h2 class="hny-title text-center">Prison Visit</h2>
                        <ol class="breadcrumb mb-0">
                           
                        </ol>
                    </nav>
                </div>
            </div>
        </section>


     
<section class="w3l-content-w-photo-6">
	<!-- /specification-6-->
	  <div class="content-photo-6-mian py-5">
			 <div class="container py-lg-5">
					<div class="align-photo-6-inf-cols row">
						
                                            <div class="photo-6-inf-right col-lg-12" style=" ">
						<iframe width="100%" height="1000" src="https://www.youtube.com/embed/kdWd8OzniQA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		
						</div>
						
					</div>
				 </div>
			 </div>
	 </section>


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