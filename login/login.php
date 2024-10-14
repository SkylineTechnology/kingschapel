<?php
session_start();
include '../includes/connection.php';
include '../includes/functions.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    //$role = $_POST['role'];
    $get_rc = mysqli_query($conn, "select * from login where username='$username' and password='$password'");
    $num_rows = mysqli_num_rows($get_rc);
    if ($num_rows > 0) {
        $row = mysqli_fetch_array($get_rc);
        $_SESSION["username"] = $row["username"];
        $_SESSION["role"] = $row["role"];
      
       
        header("location:../index");
        
    } else {
        echo "<script>alert('Incorrect username or password, please check and try again.');</script>";
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
    <link rel="stylesheet" href="../css/style-starter.css">
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
    
</head>


<body>
    <h1><a class="navbar-brand" href="../index">
                        <img src="images/logo.jpg" alt="Your logo" title="Your logo" style="height:50px;" />
                </a></h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form action="" method="POST" name="myform">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user" style="color:red;"></i>
                    <input type="email" name="username" class="form-control" placeholder="Username" required="" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                 <div class="group">
                    <i class="fas fa-unlock" style="color:red;"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                </div>
            </div>
           <!-- <div class=" w3l-form-group">
                <label>Role:</label>
                <div class="group">
                    <i class="fas fa-user" style="color:red;"></i>
                    <select class="form-control" name="role" type="text">
                        <option>Login As</option>
                        <option value="chior">Chior Unit</option>
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
            </div>-->
            <div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>
            <button type="submit" name="submit" onclick="return validateForm()">Login</button>
        </form>
    </div>
    <footer>
      
    </footer>
<script type="text/javascript">

            var Username = document.forms ["myform"]["username"];
            var Password = document.forms ["myform"]["password"];
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

                if (Username.value == "" || Fname == null) {
                    Username.style.border = "1px solid red";
                    spanUserName.textContent = "Firstname is required";
                    Username.focus();
                    return false;
                }
                if (Password.value == "") {
                    Password.style.border = "1px solid red";
                    spanOtherName.textContent = "Password is required";
                    Password.focus();
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