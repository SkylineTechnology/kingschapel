<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

if (isset($_POST["submit"])) {
    $user_id = uniqueCode($conn);
    $fname = secure($_POST["fname"]);
    $oname = secure($_POST["oname"]);
    $phone = secure($_POST["phone"]);
    $email = secure($_POST["email"]);
    $role = secure($_POST["role"]);
    $reg_date = date("Y-m-d H:i:s");

    $chk_email = mysqli_num_rows(mysqli_query($conn, "select * from members where email='$email'"));

    if ($chk_email > 0) {
        echo "<script>alert('This email have already been registered!')</script>";
    } else {
        $reg_member = mysqli_query($conn, "insert into registration values ('$user_id','$fname','$oname','','','$phone','$email','$role','','','$reg_date')");
        if ($reg_member) {
            $_SESSION["memberid"] = $user_id;
            $password = md5($email);

            if ($reg_member) {
                $_SESSION["username"] = $email;
                $_SESSION["role"] = "member";
                echo "<script>alert('Registration was Successfull!')</script>";

                $insert_login = mysqli_query($conn, "insert into login values ('$email','$password','$role','active')");
                echo "<script>window.location.href='completeReg.php'</script>";
            } else {
                echo "<script>alert('Operations Failed, Please Try after some minutes!')</script>";
            }
            $chk_email_from_newslatter = mysqli_num_rows(mysqli_query($conn, "select * from newslatter where email='$email'"));
        } else if ($chk_email_from_newslatter) {
            $insert_newslatter = mysqli_query($conn, "insert into newslatter values ('','$email')");
        } else {
            echo "<script>alert('Operations Failed, Please Try after some minutes!')</script>";
        }
    }
}
?>
<html lang="en">

    <head>
        <title><?php echo $sitename; ?></title>
        <!-- meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
              Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
              />
        <!-- /meta tags -->
        <!-- custom style sheet -->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <!-- /custom style sheet -->
        <!-- fontawesome css -->
        <link href="css/fontawesome-all.css" rel="stylesheet" />
        <!-- /fontawesome css -->
        <!-- google fonts-->
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">
        <!-- /google fonts-->

    </head>


    <body>
        <h1><img src="images/logo.jpg" height="150"/></h1>
        <div class=" w3l-login-form">
            <h2>Register Here</h2>
            <form action="" method="POST" enctype="multipath/form-data" name="myform">

                <div class=" w3l-form-group">
                    <label>Firstname:</label>
                    <div class="group">
                        <i class="fas fa-user" style="color:red;"></i>
                        <input type="text" name="fname" class="form-control" placeholder="" required="" />
                    </div>
                </div>
                <div class=" w3l-form-group">
                    <label>Othername:</label>
                    <div class="group">
                        <i class="fas fa-user" style="color:red;"></i>
                        <input type="text" name="oname" class="form-control" placeholder="" required="" />
                    </div>
                </div>
                <div class=" w3l-form-group">
                    <label>Phone:</label>
                    <div class="group">
                        <i class="fas fa-phone" style="color:red;"></i>
                        <input type="text" name="phone" class="form-control" placeholder="" required="" />
                    </div>
                </div>
                <div class=" w3l-form-group">
                    <label>Email:</label>
                    <div class="group">
                        <i class="fas fa-envelope" style="color:red;"></i>
                        <input type="email" name="email" class="form-control" placeholder="" required="" />
                    </div>
                </div>
                <div class=" w3l-form-group">
                    <label>Register As:</label>
                    <div class="group">
                        <i class="fas fa-user" style="color:red;"></i>
                        <select class="form-control" name="role" type="text">
                            <option value="">Select Role</option>
                            <option value="chior_unit">Chior Unit</option>
                            <option value="ushering">Ushering Unit</option>
                            <option value="media">Media Unit</option>
                            <option value="prayer_band">Prayer Band Unit</option>
                            <option value="motivational">Motivational Unit</option>
                            <option value="hospitality">Hospitality unit</option>
                            <option value="protocol">Protocol Unit</option>
                            <option value="communion">Communion Unit</option>
                            <option value="evangelism">Evangelism Unit</option>
                            <option value="deliverance_healing">Deliverance/Healing Unit</option>
                        </select>
                    </div>
                </div>
                <div class="forgot">
                    <a href="#">Forgot Password?</a>
                    <p><input type="checkbox">Remember Me</p>
                </div>
                <button type="submit" name="submit" onclick="return validateForm()">Register</button>
            </form>
            <p class=" w3l-register-p">Already have an account?<a href="login.php" class="register"> Login Here</a></p>
        </div>
        <footer>

        </footer>

        <script type="text/javascript">

            var Fname = document.forms ["myform"]["fname"];
            var Oname = document.forms ["myform"]["oname"];
            var Phone = document.forms ["myform"]["phone"];
            var Email = document.forms ["myform"]["email"];
            var Role = document.forms ["myform"]["role"];


            // make reference to span ID
            var spanFirstName = document.getElementById("spanFname");
            var spanOtherName = document.getElementById('spanOname');
            var spanPhone = document.getElementById('spanPhone');
            var spanMail = document.getElementById('spanEmail');
            var spanSubmitBtn = document.getElementById('spanSubmitBtn')

            //Adding EventListener
            Fname.addEventListener("blur", nameVerify, true);
            Oname.addEventListener("blur", onameVerify, true);
            DOB.addEventListener("blur", dobVerify, true);
            genDer.addEventListener("blur", genderVerify, true);
            Phone.addEventListener("blur", phoneVerify, true);
            Email.addEventListener("blur", emailVerify, true);
            Qualification.addEventListener("blur", qualVerify, true);
            State.addEventListener("blur", stateVerify, true);
            Lga.addEventListener("blur", lgaVerify, true);

            /*   function isEmpty(property){
             return (property === "" || property === null || property == "undefined")
             } */

            function validateForm() {

                if (Fname.value == "" || Fname == null) {
                    Fname.style.border = "1px solid red";
                    spanFirstName.textContent = "Firstname is required";
                    Fname.focus();
                    return false;
                }
                if (Oname.value == "") {
                    Oname.style.border = "1px solid red";
                    spanOtherName.textContent = "Othername is required";
                    Oname.focus();
                    return false;
                }


                if (Phone.value == "") {
                    Phone.style.border = "1px solid red";
                    spanPhone.textContent = "Phone is required";
                    Phone.focus();
                    return false;
                }
                if (Email.value == "") {
                    Email.style.border = "1px solid red";
                    spanMail.textContent = "Email is required";
                    Email.focus();
                    return false;
                }
                if (Role.value == "") {
                    Role.style.border = "1px solid red";
                    spanRole.textContent = "Email is required";
                    Role.focus();
                    return false;
                }

            }

            function nameVerify() {
                if (Fname.value != "") {
                    Fname.style.border = "1px solid #5e6e66";
                    spanFirstName.innerHTML = "";
                    return true;
                }
            }

            function onameVerify() {
                if (Oname.value != "") {
                    Oname.style.border = "1px solid #5e6e66";
                    spanOtherName.innerHTML = "";
                    return true;
                }
            }
            function dobVerify() {
                if (DOB.value != "") {
                    DOB.style.border = "1px solid #5e6e66";
                    spanDOB.innerHTML = "";
                    return true;
                }
            }
            function genderVerify() {
                if (genDer.value != "") {
                    genDer.style.border = "1px solid #5e6e66";
                    spanGender.innerHTML = "";
                    return true;
                }
            }
            function phoneVerify() {
                if (Phone.value != "") {
                    Phone.style.border = "1px solid #5e6e66";
                    spanPhone.innerHTML = "";
                    return true;
                }
            }
            function emailVerify() {
                if (Email.value != "") {
                    Email.style.border = "1px solid #5e6e66";
                    spanMail.innerHTML = "";
                    return true;
                }
            }
            function qualVerify() {
                if (Qualification.value != "") {
                    Qualification.style.border = "1px solid #5e6e66";
                    spanQualification.innerHTML = "";
                    return true;
                }
            }
            function stateVerify() {
                if (State.value != "") {
                    State.style.border = "1px solid #5e6e66";
                    spanState.innerHTML = "";
                    return true;
                }
            }
            function lgaVerify() {
                if (Lga.value != "") {
                    Lga.style.border = "1px solid #5e6e66";
                    spanLga.innerHTML = "";
                    return true;
                }
            }





        </script>
    </body>

</html>