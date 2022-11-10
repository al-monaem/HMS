<?php
	include "../view/template.php";
	$isPost=false;
	if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
    }

if(!isset($_SESSION["pID"])){$_SESSION["pID"] = "";}
if(!isset($_SESSION["pName"])){$_SESSION["pName"] = "";}
if(!isset($_SESSION["type"])){$_SESSION["type"] = "";}
if(!isset($_SESSION["floorNo"])){$_SESSION["floorNo"] = "";}
if(!isset($_SESSION["wardNo"])){$_SESSION["wardNo"] = "";}
if(!isset($_SESSION["bedNo"])){$_SESSION["bedNo"] = "";}
if(!isset($_SESSION["cabinNo"])){$_SESSION["cabinNo"] = "";}
if(!isset($_SESSION["allDateTime"])){$_SESSION["allDateTime"] = "";}
if(!isset($_SESSION["error"])){$_SESSION["error"] = "";}

if(isset($_POST["submit"]))
{
    $isPost=true;
    $_SESSION["error"]="";
    if(isset($_POST["pID"]))
    {
        $_SESSION["pID"]=$_POST["pID"];
    }
    if(isset($_POST["pName"]))
    {
        $_SESSION["pName"]=$_POST["pName"];
    }
    if(isset($_POST["type"]))
    {
        $_SESSION["type"]=$_POST["type"];
    }
    if(isset($_POST["floorNo"]))
    {
        $_SESSION["floorNo"]=$_POST["floorNo"];
    }
    if(isset($_POST["wardNo"]))
    {
        $_SESSION["wardNo"]=$_POST["wardNo"];
    }
    if(isset($_POST["bedNo"]))
    {
        $_SESSION["bedNo"]=$_POST["bedNo"];
    }
    if(isset($_POST["cabinNo"]))
    {
        $_SESSION["cabinNo"]=$_POST["cabinNo"];
    }
    if(isset($_POST["allDateTime"]))
    {
        $_SESSION["allDateTime"]=$_POST["allDateTime"];
    }
    $dataHandler = new UserDataHandler;
    $dataHandler->log($_SESSION["type"]);
}

if($isPost){
    header("Location: ../controller/allocationVer.php");
    exit();
}
?>
    

<!DOCTYPE html>
<html>
<head>
    <title>Patient Allocation</title>
	<link rel="stylesheet" type="text/css" href="../CSS/nurse.css">
    <!--<link rel="stylesheet" type="text/css" href="../CSS/Common.css">
    <link rel="stylesheet" type="text/css" href="../CSS/register.css">-->
</head>
<body>
<div class="card2">
    <form onsubmit="return validate()" name="test" id="form" action="#" method="post">
        <h1 style="text-align: center;">Patient Allocation</h1>     
        <div>
            <label class="label" for="pID">Patient ID:</label><br>
            <input class="text-box" type="text" name="pID" id="pID" value="<?php echo $_SESSION["pID"]; ?>">
        </div>
        <div>
            <label class="label" for="pName">Patient Name:</label><br>
            <input class="text-box" type="text" name="pName" id="pName" value="<?php echo $_SESSION["pName"]; ?>">
        </div>
        <div>
            <label class="label" for="type">Type:</label>
            <select name="type">
                <option value="0" <?php if($_SESSION["type"]=="0") {echo "selected";}?>>Select</option>
                <option value="Ward" <?php if($_SESSION["type"]=="1") {echo "selected";}?>>Ward</option>
                <option value="Cabbin" <?php if($_SESSION["type"]=="2") {echo "selected";}?>>Cabbin</option>
            </select>
        </div><br>
        <div>
            <label class="label" for="floorNo">Floor No: </label><br>
            <input class="text-box" type="text" name="floorNo" id="floorNo" value="<?php echo $_SESSION["floorNo"]; ?>">
        </div>
        <div>
            <label class="label" for="wardNo">Ward No:</label><br>
            <input class="text-box" type="text" name="wardNo" id="wardNo" value="<?php echo $_SESSION["wardNo"]; ?>">
        </div>
        <div>
            <label class="label" for="bedNo">Bed No: </label><br>
            <input class="text-box" type="text" name="bedNo" id="bedNo" value="<?php echo $_SESSION["bedNo"]; ?>">
        </div>
        <div>
            <label class="label" for="cabinNo">Cabin No:</label><br>
            <input class="text-box" type="text" name="cabinNo" id="cabinNo" value="<?php echo $_SESSION["cabinNo"]; ?>">
        </div>
        <div>
            <label class="label" for="allDateTime">Allocation Date and Time:</label><br>
            <input class="text-box" type="datetime-local" name="allDateTime" id="allDateTime" value="<?php echo $_SESSION["allDateTime"]; ?>">
        </div>
        
        <?php
            if($_SESSION["error"] != ""){
                echo "<br>";
                echo "<span style='color:red'>".$_SESSION["error"]."</span>";
            }
        ?>
        <button id="submit" name="submit" type="submit" style="margin-top: 10px;">Register</button>
        <footer style="text-align: center;margin-top: 10px;">Admitted patient! <a href="../view/showPatients.php">Search here.</a></footer>
    </form>
    </div>
	<script src="../JS/allocateNewPat.js"></script>
</body>
</html>