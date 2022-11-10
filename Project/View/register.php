<?php
session_set_cookie_params(60,"/");
session_start();

if(!isset($_SESSION["error"])){$_SESSION["error"] = "";}
if(!isset($_SESSION["msg"])){$_SESSION["msg"] = "";}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/register.css">

</head>
<body>
    <div class="card">
        <form id="form" action="../controller/verifyReg.php" method="post" onsubmit="return validate()">
            <h1 style="text-align: center;">Sign Up</h1>
            <div>
                <label class="label">Username:</label><br>
                <input class="text-box" type="text" name="username" id="username">
            </div>
            <div>
                <label class="label" for="email">Email:</label><br>
                <input class="text-box" type="email" name="email" id="email">
            </div>
            <div>
                <label class="label" for="password">Password:</label><br>
                <input class="text-box" type="password" name="password" id="password">
            </div>
            <div>
                <label class="label" for="password2">Confirm Password:</label><br>
                <input class="text-box" type="password" name="cpassword" id="cpassword">
            </div>
            <div>
                <label class="label" for="contact">Contact number:</label><br>
                <input class="text-box" type="text" name="contact" id="contact">
            </div>
            <div>
                <label class="label" for="address">Address:</label><br>
                <input class="text-box" type="text" name="address" id="address">
            </div>
            <div>
                <label class="label" for="gender">Gender:</label><br>
                <input type="radio" name="gender" value="male"> &nbsp; Male
                <input type="radio" name="gender" value="female"> &nbsp; Female
            </div>
            <div style="margin-bottom: 10px; margin-top: 10px">
                <label class="label" for="designation">Designation:</label>
                <select name="designation">
                    <option value="0">Select</option>
                    <option value="doctor">Doctor</option>
                    <option value="patient">Patient</option>
                    <option value="nurse">Nurse</option>
                </select>
            </div>
            <div>
                <label for="agree">
                    <input type="checkbox" name="agree" id="agree"/> I agree with the
                    <a href="tc.html" title="terms of services">terms of services</a>
                </label><br>
            </div>
            <div id="msg" class="error">
                <?php
                    if($_SESSION["msg"] != ""){
                        echo "<br>";
                        echo "<span style='color:red'>".$_SESSION["msg"]."</span>";
                    }
                ?>
            </div>
            <button id="submit" name="submit">Register</button>
            <footer style="text-align: center;margin-top: 10px;">Already a member?<a href="login.php">Login here.</a></footer>
        </form>
    </div>

    <script src="../js/verifyRegister.js"></script>
    <script src="../js/jquery-3.6.0.js"></script>
</body>
</html>