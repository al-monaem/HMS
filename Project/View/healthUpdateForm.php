<?php
include "Template.php";
	$isPost = false;
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }

if(!isset($_SESSION["patId"])){$_SESSION["patId"] = "";}
if(!isset($_SESSION["patName"])){$_SESSION["patName"] = "";}
if(!isset($_SESSION["bloodPressure"])){$_SESSION["bloodPressure"] = "";}
if(!isset($_SESSION["heartBeat"])){$_SESSION["heartBeat"] = "";}
if(!isset($_SESSION["pulse"])){$_SESSION["pulse"] = "";}
if(!isset($_SESSION["patGender"])){$_SESSION["patGender"] = "";}
if(!isset($_SESSION["diabetes"])){$_SESSION["diabetes"] = "";}
if(!isset($_SESSION["derror"])){$_SESSION["msg"] = "";}

if(isset($_POST["submit"]))
{
    $isPost=true;
    $_SESSION["msg"]="";
    if(isset($_POST["patId"]))
    {
        $_SESSION["patId"]=$_POST["patId"];
    }
    if(isset($_POST["patName"]))
    {
        $_SESSION["patName"]=$_POST["patName"];
    }
    if(isset($_POST["bloodPressure"]))
    {
        $_SESSION["bloodPressure"]=$_POST["bloodPressure"];
    }
    if(isset($_POST["heartBeat"]))
    {
        $_SESSION["heartBeat"]=$_POST["heartBeat"];
    }
    if(isset($_POST["pulse"]))
    {
        $_SESSION["pulse"]=$_POST["pulse"];
    }
    if(isset($_POST["patGender"]))
    {
        $_SESSION["patGender"]=$_POST["patGender"];
    }
	if(isset($_POST["diabetes"]))
    {
        $_SESSION["diabetes"]=$_POST["diabetes"];
    }
    
}

if($isPost){
    
    header("Location: ../Controller/healthUpdateVer.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
	<link rel="stylesheet" type="text/css" href="../CSS/nurse.css">
</head>
<body>
    <div class="card2">
    <form onsubmit="return validate()" name="test" id="form" action="#" method="post">
        <h1 style="text-align: center;">Health Update</h1><br>
        <div>
            <label class="label" for="patId">Patient Id: </label><br>
            <input class="text-box" type="text" name="patId" id="patId" value="<?php echo $_SESSION["patId"]; ?>">
        </div><br>
        <div>
            <label class="label" for="patName">Patient Name: </label><br>
            <input class="text-box" type="text" name="patName" id="patName" value="<?php echo $_SESSION["patName"]; ?>">
        </div><br>
		<div style="margin-bottom: 5px;">
            <label class="label" for="patGender">Gender:</label><br>
            <input type="radio" name="patGender" value="male" <?php if(isset($_SESSION["patGender"])=="male") {echo "checked";}?>> &nbsp; Male
            <input type="radio" name="patGender" value="female" <?php if($_SESSION["patGender"]=="female") {echo "checked";}?>> &nbsp; Female
            <input type="radio" name="patGender" value="other" <?php if($_SESSION["patGender"]=="other") {echo "checked";}?>> &nbsp; Other
        </div><br>
        <div>
            <label class="label" for="bloodPressure">Blood pressure:</label><br>
            <input class="text-box" type="text" name="bloodPressure" id="bloodPressure" value="<?php echo $_SESSION["bloodPressure"]; ?>">
        </div><br>
        <div>
            <label class="label" for="heartBeat">Heart Beat:</label><br>
            <input class="text-box" type="text" name="heartBeat" id="heartBeat" value="<?php echo $_SESSION["heartBeat"]; ?>">
        </div><br>
        <div>
            <label class="label" for="pulse">Pulse:</label><br>
            <input class="text-box" type="text" name="pulse" id="pulse" value="<?php echo $_SESSION["pulse"]; ?>">
        </div><br>
		<div>
            <label class="label" for="diabetes">Diabetes:</label><br>
            <input class="text-box" type="text" name="diabetes" id="diabetes" value="<?php echo $_SESSION["diabetes"]; ?>">
        </div><br>
        
        
        <?php
            if($_SESSION["msg"] != ""){
                echo "<br>";
                echo "<span style='color:red'>".$_SESSION["msg"]."</span>";
            }
        ?>
        <button id="submit" name="submit" type="submit" style="margin-top: 10px;">Submit</button>
    </form>
    </div>
	<script src="../JS/healthUpdate.js"></script>
</body>
</html>