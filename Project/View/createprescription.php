<?php
    include "Template.php";
    $isPost = false;
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
/*
if(!isset($_SESSION["ap_id"])){$_SESSION["ap_id"] = "";}
if(!isset($_SESSION["med1"])){$_SESSION["med1"] = "";}
if(!isset($_SESSION["med2"])){$_SESSION["med2"] = "";}
if(!isset($_SESSION["med3"])){$_SESSION["med3"] = "";}
if(!isset($_SESSION["error"])){$_SESSION["error"] = "";}

if(isset($_POST["submit"]))
{
    $isPost=true;
    $_SESSION["error"]="";
    if(isset($_POST["ap_id"]))
    {
        $_SESSION["ap_id"]=$_POST["ap_id"];
    }
    if(isset($_POST["med1"]))
    {
        $_SESSION["med1"]=$_POST["med1"];
    }
    if(isset($_POST["med2"]))
    {
        $_SESSION["med2"]=$_POST["med2"];
    }
    if(isset($_POST["med3"]))
    {
        $_SESSION["med3"]=$_POST["med3"];
    }
	
}

if($isPost){
    header("Location: ../Controller/prescription_controller.php");
    exit();
}

      $offset=6*60*60; //converting 6 hours to seconds.
      $dateFormat="d-m-Y"; //set the date format
      $timeNdate=gmdate($dateFormat, time()+$offset);
    */
?>


<!DOCTYPE html>
<html>
<head>
    <title>Prescription</title>
        <link rel="stylesheet" type="text/css" href="../css/otinitiate.css">

</head>
<body>
    <form id="form" class="card" action="#" method="post">
        <h1 style="text-align: center;">Prescription Generator</h1>
        <div>
            <label class="label">Appointment ID:</label><br>
            <input class="text-box" type="text" name="ap_id" id="ap_id" oninput="this.value = this.value.toUpperCase()">
        </div>
        <div>
            <button id="add" name="add" style="margin-top: 10px;">Add</button>
            <button id="clr" name="clr" style="margin-top: 10px;">Clear</button>
        </div>
        <div id="meds">
          <!--  <label class="label" for="email">Medicine 1:</label>
            <input style="width:30%;" class="text-box" type="text" name="med1" id="med1">
            <input style="width:30%;" class="text-box" type="text" name="dos1" id="dos1">
        -->
        </div>
        <div>
            <label class="label">Remarks:</label><br>
            <input class="text-box" type="text" name="remarks" id="remarks" oninput="this.value = this.value.toUpperCase()">
        </div>
        <?php
           /* if($_SESSION["error"] != ""){
                echo "<br>";
                echo "<span style='color:red'>".$_SESSION["error"]."</span>";
            }*/
        ?>
                <div id="msg"></div>

        <button id="submit" name="submit" type="submit" style="margin-top: 10px;">Generate</button>
    </form>


<script type="text/javascript">
    function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}</script>
<script src="../JS/pres.js"></script>
</body>
</html>