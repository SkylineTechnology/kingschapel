<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));


if (isset($_POST["submit"])) {
    // $contactUsid = uniqueCode($conn);
    $fullname = secure($_POST["fullname"]);
    $address = secure($_POST["address"]);    
    $phone = secure($_POST["phone"]);
    $email = secure($_POST["email"]);
    $gender = secure($_POST["gender"]);
    $date = date("Y-m-d H:i:s");
    
    $partnership = mysqli_query($conn, "insert into partnership values ('','$fullname','$gender','$phone','$email','$address','$date')") or die(mysqli_error($conn));

    if ($partnership) {  
        echo "<script>alert('Successfull')</script>";  
               
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
        <title>Partnership | <?php echo $sitename; ?></title>
        <!-- Template CSS -->
        <link rel="stylesheet" href="css/style-starter.css">
        <!-- Template CSS -->
        <link href="//fonts.googleapis.com/css?family=Poppins:100,300,400,500,500i,600,700&display=swap" rel="stylesheet">
        <!-- Template CSS -->
        <style type="text/css">
            form input,select,textarea{
                width: 100%;
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


        <section class="w3l-inner-page-main">
            <div class="breadcrumb-infhny">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <h2 class="hny-title text-center">Partnership Form</h2>
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
                            <img src="images/partner1.jfif" alt="" class="img-fluid">
                        </div>
                        <div class="contact-right col-lg-6 pl-lg-4">
                            <form action="" method="POST">
                                <label>Fullname:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="text" name="fullname" placeholder="" required="" value="">
                                    <div class="clear"></div>
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
                                <label>Gender:</label><br>
                                <div class="form-left-to-w3l">                                    
                                    <select name="gender" required="" class="form-control">
                                        <option value="">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>                                                           
                                    </select>
                                </div>
                              
                                 <label>Address:</label><br>
                                <div>
                                    <textarea name="address" placeholder="" required="" rows="2" value=""></textarea>
                                </div>
                                <div>
                                    <input type="submit" name="submit" onclick="return validateForm()" value="Submit" required="" style=" background-color: goldenrod; font-weight: bold;">
                                </div>
                            </form>
                        </div>

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