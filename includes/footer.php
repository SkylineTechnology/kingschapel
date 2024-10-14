<section class="w3l-footer-22-main">
    <!-- footer-22 -->
    <div class="footer-hny py-5">
        <div class="container py-lg-4"> 
            <div class="sub-columns row">
                <div class="sub-one-left col-lg-3 col-md-6">
                    <h6> Address</h6>
                    <p>Ajaji Cloister Road, Off St. Bridges Road,<br>
                        Asaba, Delta State<br>
                    <ul>
                        <li><a href="https://www.facebook.com/KINGSGLOBALTV/videos/209071140366743" target="blank"">
                            <h6>Facebook Feed</h6>
                           
                        </a></li>
                    </ul>
                    </p>

                </div>
                <div class="sub-one-left col-lg-3 col-md-6">
                    <h6>Contact information </h6>
                    <p><a style="color: goldenrod;">Phone:</a> 0816 491 0276<br>

                        <a style="color: goldenrod;">Email:</a> info@kcipm.com<br>
                        <br>

                        
                    </p>

                </div>
                <div class="sub-two-right col-lg-3 col-md-6 my-md-0 my-5">
                    <h6>Useful Links</h6>
                    <div class="footer-hny-ul">
                        <ul>
                            <li><a href="aboutUs">About Us</a></li>
                            <li><a href="#">Prayer Line</a></li>
                            <li><a href="#">Partner</a></li>
                            <li><a href="contactUs">Contact</a></li>
                        </ul>

                    </div>
                </div>

                <div class="sub-one-left col-lg-3 col-md-6 mt-lg-0 mt-md-5">
                    <h6>Subscribe to our Newsletter </h6>
                    <form action="" method="post" class="footer-newsletter">
                        <div class="">
                            <input type="email" name="email" class="form-input" placeholder="Enter your email.." />
                        </div>
                        <button type="submit" name="nlatter" class="btn" style=" background-color: goldenrod;">Subscribe</button>
                    </form>
                     <?php
                if (isset($_POST["nlatter"])) {
                    $news_email = $_POST["email"];
                    $insert_newslatter = mysqli_query($conn, "insert into newslatter values('','$news_email')");
                    if ($insert_newslatter) {
                        echo "<script>alert('Email added to newslatter successfully')</script>";
                    } else {
                        echo "<script>alert('Whoops looks like something went wrong, please try again')</script>";
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </div>  
    <div class="below-section">
        <div class="container">
            <div class="copyright-footer row">
                <div class="columns col-lg-6">
                    <ul class="social footer">
                        <li><a href=""><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-google" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-github" aria-hidden="true"></span></a></li>
                    </ul>
                </div>
                <div class="columns copy-right col-lg-6">
                    <p>© 2020. All rights reserved. Design by <a href="https://www.geemlatech.com" target="_blank">
                            Geemla Technologies Ltd</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //titels-5 -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-long-arrow-up"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- /move top -->

</section>