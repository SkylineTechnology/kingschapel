
<section class="w3l-top-header-content">
    <div class="hny-top-menu">
        <div class="top-hd">
            <div class="container-fluid">
                <div class="row">
                    <div class="social-top col-lg-6">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a> </li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-linkedin"></span>
                            </a>
                        </li>
                    </div>
                    <div class="accounts col-lg-6">
                        <li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+234 8164910276">(+234) 816-491-0276</a>
                        </li>

                        <li class="top_li"><span class="fa fa-envelope-o"></span><a href="mailto:info@kcipm.com">info@kcipm.com</a>

                        </li>
                        <?php
                        if (isset($_SESSION['username'])) {
                            ?>
                            <li style="width: 170px; display: inline-flex; justify-content: space-between;">
                                <a href="logout.php"/> <button class="btn" style="background-color: #cc0000; color: white;">Logout</button></a>
                                <!--<a href="login/registration.php"/><button class="btn" style="background-color: red; color: white;">Register</button></a>-->
                            </li>
                            <?php
                        } else {
                            ?>
                            <li style="width: 170px; display: inline-flex; justify-content: space-between;">
                                <a href="login/login.php"/> <button class="btn" style="background-color: green; color: white;">Login</button></a>
                                <!--<a href="login/registration.php"/><button class="btn" style="background-color: red; color: white;">Register</button></a>-->
                            </li>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/nav-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="index"> <img src="images/logo.jpg"  class="logo_img"/></a>-->

                <a class="navbar-brand" href="index">
                    <img src="images/logo.jpg" alt="Your logo" title="Your logo" class="logo_img"  />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="float: right !important;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active" style="font-weight: bold !important;">
                            <a class="nav-link" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutUs">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog">Publication</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Partners</a>
                            <ul class="dropdown-menu">
                                <li style="margin-left: 5px;"><a href="partnership">Partnership Form</a></li><br>
                                <li style="margin-left: 5px;"><a href="churchProject">Church Project</a></li><br>
                                <li style="margin-left: 5px;"><a href="#">Foundation</a></li><br>
                                <li style="margin-left: 5px;"><a href="prisonVisit">Prison Visit</a></li><br>
                                <li style="margin-left: 5px;"><a href="#">OVC</a></li><br>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Gallery</a>
                            <ul class="dropdown-menu">
                                <li style="margin-left: 5px;"> <a href="videos">Video Clips</a></li><br>
                                <li style="margin-left: 5px;"> <a href="audio">Audio</a></li><br>
                                <li style="margin-left: 5px;"> <a href="picture">Pictures</a></li><br>
                            </ul>
                        </li>
                        <?php
                        if (isset($_SESSION['username'])) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="chat/contact.php">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile">Profile</a>
                            </li>

                            <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="contactUs">Contact</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
        <!--//nav-->
    </div>

</section>