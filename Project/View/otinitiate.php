<?php
    include "Template.php";
    $isPost = false;
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
/*
if(!isset($_SESSION["pid"])){$_SESSION["pid"] = "";}
if(!isset($_SESSION["otid"])){$_SESSION["otid"] = "";}
if(!isset($_SESSION["Equipments"])){$_SESSION["Equipments"] = "";}
if(!isset($_SESSION["error"])){$_SESSION["error"] = "";}

if(isset($_POST["submit"]))
{
    $isPost=true;
    $_SESSION["error"]="";
    if(isset($_POST["Equipments"]))
    {
        $_SESSION["Equipments"]=$_POST["Equipments"];
    }
    if(isset($_POST["pid"]))
    {
        $_SESSION["pid"]=$_POST["pid"];
    }
    if(isset($_POST["otid"]))
    {
        $_SESSION["otid"]=$_POST["otid"];
    }
	
}

if($isPost){
    header("Location: ../Controller/otinitiate_controller.php");
    exit();
}
*/
?>


<!DOCTYPE html>
<html>
<head>
    <title>Prescription</title>
<head>
    <link rel="stylesheet" type="text/css" href="../css/otinitiate.css">
</head>
</head>
<body>
    <form name="test" id="form" class="card" action="#"  method="post">
        <h1 style="text-align: center;">OT Initiate</h1>
        <div>
            <label class="label" for="pid">Patient ID:</label><br>
            <input class="text-box" type="text" name="pid" id="pid" oninput="this.value = this.value.toUpperCase()" value="">
        </div>
        <div>
            <label class="label" for="otid">OT ID:</label><br>
            <input class="text-box" type="text" name="otid" id="otid" oninput="this.value = this.value.toUpperCase()" value="">
        </div>
        <div>
            <label class="label" for="Equipments">Equipments:</label><br>
            <input type="checkbox" name="Equipments[]" value="Anesthesia Machine">Anesthesia Machine<br>
            <input type="checkbox" name="Equipments[]" value="Anesthesia Cart">Anesthesia Cart<br>
            <input type="checkbox" name="Equipments[]" value="Anesthesia Circuits">Anesthesia Circuits<br>
            <input type="checkbox" name="Equipments[]" value="Laryngeal Mask Airways">Laryngeal Mask Airways<br>
            <input type="checkbox" name="Equipments[]" value="Restraint Straps">Restraint Straps<br>
            <input type="checkbox" name="Equipments[]" value="Defibrillator">Defibrillator<br>
            <input type="checkbox" name="Equipments[]" value="EKG Machine">EKG Machine<br>
            <input type="checkbox" name="Equipments[]" value="Vital Signs Monitor">Vital Signs Monitor<br>
            <input type="checkbox" name="Equipments[]" value="Laryngoscopes">Laryngoscopes<br>
            <input type="checkbox" name="Equipments[]" value="Linen Hamper">Linen Hamper<br>
            <input type="checkbox" name="Equipments[]" value="Nerve Stimulator">Nerve Stimulator<br>
            <input type="checkbox" name="Equipments[]" value="Mayo Stand">Mayo Stand<br>
        </div>
        <div id="msg"></div>
        <?php
         /*   if($_SESSION["error"] != ""){
                echo "<br>";
                echo "<span style='color:red'>".$_SESSION["error"]."</span>";
            }*/
        ?>
        <button id="submit" name="submit" type="submit" style="margin-top: 10px;">Submit</button>
        </form>
<!--<script>
function validateForm() {
  let pid = document.forms["test"]["pid"].value;
  let otid = document.forms["test"]["otid"].value;
  //let c = document.forms["test"]["Equipments[]"].value;
  let checkbox= document.querySelector('input[name="Equipments[]"]:checked');
  if (pid==""||otid=="") {
    alert("PID,OTID must be filled out");
 //   console.log("asa")
    return false;
  }
  else if (!checkbox) {
    alert("Please Select Equipments");
    //console.log("asa")
    return false;
  }
}
</script>-->
    <script src="../JS/ot.js"></script>

</body>
</html>