<?php
include "Template.php";
	$isPost = false;
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }

if(!isset($_SESSION["dName"])){$_SESSION["dName"] = "";}
if(!isset($_SESSION["bGroup"])){$_SESSION["bGroup"] = "";}
if(!isset($_SESSION["dcontact"])){$_SESSION["dcontact"] = "";}
if(!isset($_SESSION["daddress"])){$_SESSION["daddress"] = "";}
if(!isset($_SESSION["demail"])){$_SESSION["demail"] = "";}
if(!isset($_SESSION["dgender"])){$_SESSION["dgender"] = "";}
if(!isset($_SESSION["derror"])){$_SESSION["msg"] = "";}

if(isset($_POST["submit"]))
{
    $isPost=true;
    $_SESSION["msg"]="";
    if(isset($_POST["dName"]))
    {
        $_SESSION["dName"]=$_POST["dName"];
    }
    if(isset($_POST["bGroup"]))
    {
        $_SESSION["bGroup"]=$_POST["bGroup"];
    }
    if(isset($_POST["dcontact"]))
    {
        $_SESSION["dcontact"]=$_POST["dcontact"];
    }
    if(isset($_POST["daddress"]))
    {
        $_SESSION["daddress"]=$_POST["daddress"];
    }
    if(isset($_POST["demail"]))
    {
        $_SESSION["demail"]=$_POST["demail"];
    }
    if(isset($_POST["dgender"]))
    {
        $_SESSION["dgender"]=$_POST["dgender"];
    }
}

if($isPost){
    
    header("Location: ../Controller/donorVer.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
	<link rel="stylesheet" type="text/css" href="../CSS/nurse.css">
    <!--<link rel="stylesheet" type="text/css" href="../CSS/Common.css">
    <link rel="stylesheet" type="text/css" href="../CSS/register.css">
	s<style>
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
            width: 300px;
            margin-top: 150px;
            border-style: ridge;
            padding: 20px 35px 20px 30px;
        }
        .label{
            font-weight: bold;
        }
    </style>-->
</head>
<body>
    <div class="card2">
    <form onsubmit="return validate()" name="test" id="form" action="#" method="post">
        <h1 style="text-align: center;">Blood Donation</h1>
        <div>
            <label class="label" for="dName">Donor Name: </label><br>
            <input class="text-box" type="text" name="dName" id="dName" value="<?php echo $_SESSION["dName"]; ?>">
        </div>
        <div style="margin-top: 10px;">
            <label class="label" for="bGroup">Blood Group: </label>
            <select name="bGroup">
                <option value="0" <?php if($_SESSION["bGroup"]=="0") {echo "selected";}?>>-select one-</option>
                <option value="A(+ve)" <?php if($_SESSION["bGroup"]=="1") {echo "selected";}?>>A(+ve)</option>
                <option value="A(-ve)" <?php if($_SESSION["bGroup"]=="2") {echo "selected";}?>>A(-ve)</option>
                <option value="AB(+ve)" <?php if($_SESSION["bGroup"]=="3") {echo "selected";}?>>AB(+ve)</option>
                <option value="AB(-ve)" <?php if($_SESSION["bGroup"]=="4") {echo "selected";}?>>AB(-ve)</option>
                <option value="O(+ve)" <?php if($_SESSION["bGroup"]=="5") {echo "selected";}?>>O(+ve)</option>
                <option value="O(-ve)" <?php if($_SESSION["bGroup"]=="6") {echo "selected";}?>>O(-ve)</option>
            </select>
        </div><br>
        <div>
            <label class="label" for="dcontact">Contact number:</label><br>
            <input class="text-box" type="text" name="dcontact" id="dcontact" value="<?php echo $_SESSION["dcontact"]; ?>">
        </div>
        <div>
            <label class="label" for="daddress">Address:</label><br>
            <input class="text-box" type="text" name="daddress" id="daddress" value="<?php echo $_SESSION["daddress"]; ?>">
        </div>
        <div>
            <label class="label" for="demail">Email:</label><br>
            <input class="text-box" type="email" name="demail" id="demail" value="<?php echo $_SESSION["demail"]; ?>">
        </div>
        <div style="margin-bottom: 5px;">
            <label class="label" for="dgender">Gender:</label><br>
            <input type="radio" name="dgender" value="male" <?php if(isset($_SESSION["dgender"])=="male") {echo "checked";}?>> &nbsp; Male
            <input type="radio" name="dgender" value="female" <?php if($_SESSION["dgender"]=="female") {echo "checked";}?>> &nbsp; Female
            <input type="radio" name="dgender" value="other" <?php if($_SESSION["dgender"]=="other") {echo "checked";}?>> &nbsp; Other
        </div>
        
        <?php
            if($_SESSION["msg"] != ""){
                echo "<br>";
                echo "<span style='color:red'>".$_SESSION["msg"]."</span>";
            }
        ?>
        <button id="submit" name="submit" type="submit" style="margin-top: 10px;">Submit</button>
        <footer style="text-align: center;margin-top: 10px;"><a href="../view/showBlood.php">Go to Blood Bank!</a></footer>
    </form>
    </div>
	<script src="../JS/bloodEntry.js"></script>
</body>
</html>