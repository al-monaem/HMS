<?php
include "template.php";
$isPost=false;
	if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
    }

if(!isset($_SESSION["pName"])){$_SESSION["pName"] = "";}
if(!isset($_SESSION["nppassword"])){$_SESSION["nppassword"] = "";}
if(!isset($_SESSION["cpassword"])){$_SESSION["cpassword"] = "";}
if(!isset($_SESSION["npContact"])){$_SESSION["npContact"] = "";}
if(!isset($_SESSION["contactNo"])){$_SESSION["contactNo"] = "";}
if(!isset($_SESSION["npEmail"])){$_SESSION["npEmail"] = "";}
if(!isset($_SESSION["age"])){$_SESSION["age"] = "";}
if(!isset($_SESSION["occupation"])){$_SESSION["occupation"] = "";}
if(!isset($_SESSION["npAddress"])){$_SESSION["npAddress"] = "";}
if(!isset($_SESSION["npGender"])){$_SESSION["npGender"] = "";}
if(!isset($_SESSION["agree"])){$_SESSION["agree"] = "false";}
if(!isset($_SESSION["error"])){$_SESSION["error"] = "";}

/*if(isset($_POST["submit"]))
{
    $isPost=true;
    $_SESSION["error"]="";
    if(isset($_POST["pName"]))
    {
        $_SESSION["pName"]=$_POST["pName"];
    }
    if(isset($_POST["nppassword"]))
    {
        $_SESSION["nppassword"]=$_POST["nppassword"];
    }
    if(isset($_POST["cpassword"]))
    {
        $_SESSION["cpassword"]=$_POST["cpassword"];
    }
    if(isset($_POST["npContact"]))
    {
        $_SESSION["npContact"]=$_POST["npContact"];
    }
    if(isset($_POST["contactNo"]))
    {
        $_SESSION["contactNo"]=$_POST["contactNo"];
    }
    if(isset($_POST["npEmail"]))
    {
        $_SESSION["npEmail"]=$_POST["npEmail"];
    }
    if(isset($_POST["age"]))
    {
        $_SESSION["age"]=$_POST["age"];
    }
    if(isset($_POST["occupation"]))
    {
        $_SESSION["occupation"]=$_POST["occupation"];
    }
    if(isset($_POST["npAddress"]))
    {
        $_SESSION["npAddress"]=$_POST["npAddress"];
    }
    if(isset($_POST["npGender"]))
    {
        $_SESSION["npGender"]=$_POST["npGender"];
    }
    if(isset($_POST["agree"]))
    {
        $_SESSION["agree"] = "true";
    }
    else
    {
        $_SESSION["agree"] = "false";
    }
}

if($isPost){
    header("Location: ../controller/newPatRegVer.php");
    exit();
}*/

?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Register</title>
	<link rel="stylesheet" type="text/css" href="../CSS/nurse.css">
    <!--<link rel="stylesheet" type="text/css" href="../CSS/Common.css">
    <link rel="stylesheet" type="text/css" href="../CSS/register.css">
	<style>
        .text-box{
            width: 100%;
            height: 25px;
            margin-bottom: 5px;
            border-style: solid;
            border-width: 1px;
        }
        #submit{
            width: 100%;
            height: 30px;
            margin-bottom: 5px;
            margin-top: 5px;
            font-family: Georgia;
        }
        #form{
            margin: auto;
            width: 500px;
            margin-top: 100px;
            border-style: ridge;
            padding: 10px 35px 20px 30px;
        }
        .label{
            font-weight: bold;
        }
    </style>-->
</head>
<body>
<div class="card2">
    <form onsubmit="return validate()" name="test" id="form" action="../controller/newPatRegVer.php" method="post" >
        <h1 style="text-align: center;">New Patient Registration</h1>     
        <div>
            <label class="label" for="pName">Patient Name:</label><br>
            <input class="text-box" type="text" name="pName" id="pName" value="<?php echo $_SESSION["pName"]; ?>">
        </div>
        <div>
            <label class="label" for="nppassword">Password:</label><br>
            <input class="text-box" type="password" name="nppassword" id="nppassword" value="<?php echo $_SESSION["nppassword"]; ?>">
        </div>
        <div>
            <label class="label" for="cpassword">Confirm Password:</label><br>
            <input class="text-box" type="password" name="cpassword" id="cpassword" value="<?php echo $_SESSION["cpassword"]; ?>">
        </div>
        <div>
            <label class="label" for="npContact">Contact number:</label><br>
            <input class="text-box" type="text" name="npContact" id="npContact" value="<?php echo $_SESSION["npContact"]; ?>">
        </div>
        <div>
            <label class="label" for="contactNo">Alternative Contact number:</label><br>
            <input class="text-box" type="text" name="contactNo" id="contactNo" value="<?php echo $_SESSION["contactNo"]; ?>">
        </div>
        <div>
            <label class="label" for="age">Age:</label><br>
            <input class="text-box" type="text" name="npAge" id="npAge" value="">
        </div>
        <div>
            <label class="label" for="npEmail">Email:</label><br>
            <input class="text-box" type="email" name="npEmail" id="npEmail" value="<?php echo $_SESSION["npEmail"]; ?>">
        </div>
        <div>
            <label class="label" for="occupation">Occupation:</label><br>
            <input class="text-box" type="text" name="occupation" id="occupation" value="<?php echo $_SESSION["occupation"]; ?>">
        </div>
        <div>
            <label class="label" for="npAddress">Address:</label><br>
            <input class="text-box" type="text" name="npAddress" id="npAddress" value="<?php echo $_SESSION["npAddress"]; ?>">
        </div>
        <div style="margin-bottom: 5px;">
            <label class="label" for="gender">Gender:</label><br>
            <input type="radio" name="gender" id="npGender" value="male"> &nbsp; Male
            <input type="radio" name="gender" id="npGender" value="female"> &nbsp; Female
            <input type="radio" name="gender" id="npGender" value="other"> &nbsp; Other
        </div>
        
        <?php
            if($_SESSION["error"] != ""){
                echo "<br>";
                echo "<span style='color:red'>".$_SESSION["error"]."</span>";
            }
        ?>
        <button id="submit" name="submit" type="submit" style="margin-top: 10px;">Register</button>
    </form>
    <div>
	<script src="../JS/newPatientReg.js"></script>
</body>
</html>