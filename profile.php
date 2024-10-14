<?php
session_start();
include 'includes/connection.php';
include 'includes/functions.php';




$role = isset($_SESSION['urole']) ? $_SESSION['urole'] : "";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "";
$id = isset($_GET["memberid"]) ? base64_decode($_GET["memberid"]) : "";

//member records
$rw = mysqli_fetch_array(mysqli_query($conn, "select * from members where email ='$username'"));
$db_memID = $rw['memberid'];
$db_email = $rw["email"];
$db_dept = $rw["dept"];
$db_fullname = $rw["fullname"];
$db_gender = $rw["gender"];
$db_dob = $rw["dob"];
$db_passport = $rw["passport"];
$db_mstatus = $rw["mstatus"];
$db_phone = $rw["phone"];
$db_address = $rw["res_address"];
$db_date = $rw["date"];
$db_state = $rw["state"];
$db_lga = $rw["lga"];




if (isset($_POST["completeReg"])) {
    // $contactUsid = uniqueCode($conn);
    $fullname = $_POST["fullname"];
    $gender = $_POST["gender"];
    $mstatus = $_POST["mstatus"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $dob = $_POST['dob'];
    $state = $_POST["state"];
    $lga = $_POST["lga"];
    $address = $_POST["address"];
    $date = $_POST["date"];
    $dept = $_POST["dept"];

    $pic_name = isset($_FILES['pic']['name']) ? $_FILES['pic']['name'] : "";

    $img_ext = pathinfo($pic_name, PATHINFO_EXTENSION);

    if ($pic_name != "") {
        $image_url = upload_member_passport($_FILES["pic"]["tmp_name"], $img_ext);
        if ($image_url != "") {
            //$update_member = mysqli_query($conn, "update members set  fullname='$fullname', gender='$gender', mstatus='$mstatus', passport='$image_url', phone='$phone', email='$email', res_address='$address',  state='$state', lga='$lga', dob='$dob', date='$date', dept='$dept' where email ='$username'") or die(mysqli_error($conn));
            $update_query = mysqli_query($conn, "UPDATE members SET fullname ='$fullname', gender='$gender', dob='$dob', mstatus='$mstatus', phone='$phone', email='$email', passport='$image_url', state='$state', lga='$lga', res_address='$address', date='$date', dept='$dept' WHERE email='$username'") or die(mysqli_error($conn));
            if ($update_query) {
                echo "<script>window.location.href='profile.php'</script>";
                echo "<script>alert('Profile has Been Sent Successfully update')</script>";
                
            } else {
                echo "<script>alert('There is an error try after some time')</script>";
                echo mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Please Upload Passport Image!')</script>";
        }
    } else {
        ?>
        <script>alert('Please Upload Passport Image!');</script>   
        <?php
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
        <style>
            .completReg{
                width: 60%;
                min-height: 500px;
                border: 1px solid #ccc;
                margin: 0px auto;
                padding: 20px;
            }
            .sec1{
                width: 100%;
                height: 200px;
                display: inline-flex;
                justify-content: space-between;
            }
            .sec2{
                width: 100%;
                min-height: 200px;
                display: inline-flex;
                justify-content: space-between;

            }
            .uploadPic{
                width: 150px;
                height: 200px;
                border: 1px solid #ccc;
                margin-right: 7px;
            }
            .upperform{
                width: 80%;
                height: 200px;
                padding-top: 35px;

            }
            .left-side-form{
                width: 50%;
                float:left !important;
                position: relative;
            }
            .right-side-form{
                width: 50%;
                float: right !important;
                position: relative;
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

                        <h2 class="hny-title text-center">Profile</h2>

                        <ol class="breadcrumb mb-0">

                        </ol>
                    </nav>
                </div>
            </div>
        </section>


        <!-- /contact-form -->
        <section class="w3l-contact-main">
            <div class="contact-infhny py-5">
                <div class="completReg">
                    <form action="" method="post" enctype="multipart/form-data" name="myform">

                        <h4 class="heading text-capitalize mb-lg-5 mb-4" style="text-align: center; color: #2e8b57;">Profile</h4>

                        <div class="sec1">
                            <div class="uploadPic"><img src="passport/<?php echo $db_passport; ?>"/></div>
                            <div class="upperform">

                                <div class="left-side-form">
                                    <label>Fullname:</label><br>
                                    <div class="form-left-to-w3l">
                                        <input type="text" id="title" name="fullname" placeholder="" required="" value="<?php echo $db_fullname; ?>">
                                        <div class="clear"></div>
                                    </div>
                                    <label>Gender:</label><br>
                                    <div class="form-left-to-w3l">
                                        <select name="gender" required="">
                                            <option value="">Gender</option>
                                            <option value="Male" <?php
                                            if ($db_gender == "Male") {
                                                echo "selected='selected'";
                                            } else {
                                                
                                            }
                                            ?>>Male</option>
                                            <option value="Female" <?php
                                            if ($db_gender == "Female") {
                                                echo "selected='selected'";
                                            } else {
                                                
                                            }
                                            ?>>Female</option>                                                           
                                        </select>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="right-side-form">
                                    <label>Passport:</label><br>
                                    <div class="form-left-to-w3l">
                                        <input type="file" id="title" name="pic" accept=".jpg, .jpeg, .png, .gif" onchange="preview_image(event);" placeholder="" required="" style="padding-top:4px;">
                                        <div class="clear"></div>
                                    </div>
                                    <label>Department:</label><br>
                                    <div class="form-left-to-w3l">
                                        <input type="text" id="title" name="dept" placeholder="" required="" value="<?php echo $db_dept; ?>" readonly="">
                                       
                                        <div class="clear"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="sec2">
                            <div class="left-side-form">
                                <label>Marital Status:</label><br>
                                <div class="form-left-to-w3l">
                                    <select name="mstatus" required="">
                                        <option>Marital Status</option>
                                        <option value="Single" <?php
                                        if ($db_mstatus == "Single") {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?> >Single</option>
                                        <option value="Married" <?php
                                        if ($db_mstatus == "Married") {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?>>Married</option>
                                        <option value="Widow" <?php
                                        if ($db_mstatus == "Widow") {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?>>Widow</option>
                                        <option value="Widower" <?php
                                        if ($db_mstatus == "Widower") {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?>>Widower</option>
                                        <option value="Divorce" <?php
                                        if ($db_mstatus == "Divorce ") {
                                            echo "selected='selected'";
                                        } else {
                                            
                                        }
                                        ?>>Divorced</option>
                                    </select>
                                    <div class="clear"></div>
                                </div>
                                <label>Phone:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="text" name="phone" placeholder="" required="" value="<?php echo $db_phone; ?>">
                                    <div class="clear"></div>
                                </div>
                                <label>State of Origin:</label><br>
                                <div class="form-left-to-w3l">
                                    <select id="state"  onchange="getlocals(this.value)" name="state" required="">
                                        <option value="">Select State</option>
                                        <?php
                                        $get_state = mysqli_query($conn, "select * from states");
                                        while ($db = mysqli_fetch_array($get_state)) {
                                            ?>
                                            <option value="<?php echo $db["state_id"]; ?>"  <?php
                                            if ($db["state_id"] == $db_state) {
                                                echo "selected='selected'";
                                            } else {
                                                
                                            }
                                            ?>><?php echo $db["name"]; ?></option>
                                                    <?php
                                                }
                                                ?>
                                    </select>
                                    <div class="clear"></div>
                                </div>
                                <label>Local Goverment Area:</label><br>
                                <?php $get_lga = mysqli_query($conn, "select * from locals where state_id='$db_state'"); ?>
                                <div class="form-left-to-w3l">
                                    <select id="lga" name="lga" required="">
                                        <?php
                                        while ($lg = mysqli_fetch_array($get_lga)) {
                                            ?>
                                            <option value="<?php echo $lg["local_id"]; ?>" <?php
                                            if ($lg["local_id"] == $db_lga) {
                                                echo "selected='selected'";
                                            } else {
                                                
                                            }
                                            ?>><?php echo $lg["local_name"]; ?></option> 
                                                    <?php
                                                }
                                                ?>
                                    </select>
                                    <div class="clear"></div>
                                </div>

                            </div>
                            <div class="right-side-form">
                                <label>Date of Birth:</label><br>
                                <div class="form-left-to-w3l">
                                    <input type="date"  name="dob" placeholder="" required="" value="<?php echo $db_dob; ?>">
                                    <div class="clear"></div>
                                </div>
                                <label>Email:</label><br>
                                <div>
                                    <input type="email" readonly="" name="email" placeholder="" required="" value="<?php echo $db_email; ?>">
                                </div>
                                <label>Address:</label><br>
                                <div>
                                    <textarea type="text" name="address" placeholder="" required="" value=""><?php echo $db_address; ?></textarea>
                                </div>
                                <label>Registration Date:</label><br>
                                <div>
                                    <input type="text" name="date" placeholder="" required="" value="<?php echo $db_date; ?>">
                                </div>
                                <label></label><br><br>

                            </div>
                        </div>
                        <div>
                            <input type="submit" name="completeReg" onclick="return validateForm()" value="Update" required="">
                        </div>
                        <script>
                            function getlocals(val) {
                                $.ajax({
                                    type: "POST",
                                    url: "get_lga.php",
                                    data: 'state_id=' + val,
                                    success: function (data) {
                                        $("#lga").html(data);
                                    }
                                });
                            }
                        </script>
                    </form>
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