<?php
    include "Template.php";
    $isPost = false;
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
/*
if(!isset($_SESSION["pid"])){$_SESSION["pid"] = "";}
if(!isset($_SESSION["otid"])){$_SESSION["otid"] = "";}
if(!isset($_SESSION["Testname"])){$_SESSION["Testname"] = "";}
if(!isset($_SESSION["error"])){$_SESSION["error"] = "";}

if(isset($_POST["submit"]))
{
    $isPost=true;
    $_SESSION["error"]="";
    if(isset($_POST["Testname"]))
    {
        $_SESSION["Testname"]=$_POST["Testname"];
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
        <h1 style="text-align: center;">Test Generate</h1>
        <div>
            <label class="label" for="pid">Patient ID:</label><br>
            <input class="text-box" type="text" name="pid" id="pid" oninput="this.value = this.value.toUpperCase()" value="">
        </div>
        <div>
            <label class="label" for="Testname">Testname:</label><br>
            <input type="checkbox" name="Testname[]" value="BLOOD ANALYSIS">BLOOD ANALYSIS<br>
            <input type="checkbox" name="Testname[]" value="GASTRIC FLUID ANALYSIS">GASTRIC FLUID ANALYSIS<br>
            <input type="checkbox" name="Testname[]" value="KIDNEY FUNCTION TEST">KIDNEY FUNCTION TEST<br>
            <input type="checkbox" name="Testname[]" value="LUMBAR PUNCTURE">LUMBAR PUNCTURE<br>
            <input type="checkbox" name="Testname[]" value="PROTEIN-BOUND IODINE TEST">PROTEIN-BOUND IODINE TEST<br>
            <input type="checkbox" name="Testname[]" value="TOXICOLOGY TEST">TOXICOLOGY TEST<br>
            <input type="checkbox" name="Testname[]" value="UROGRAPHY">UROGRAPHY<br>
            <input type="checkbox" name="Testname[]" value="ULTRASOUND">ULTRASOUND<br>
            <input type="checkbox" name="Testname[]" value="UROSCOPY">UROSCOPY<br>
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
  //let c = document.forms["test"]["Testname[]"].value;
  let checkbox= document.querySelector('input[name="Testname[]"]:checked');
  if (pid==""||otid=="") {
    alert("PID,OTID must be filled out");
 //   console.log("asa")
    return false;
  }
  else if (!checkbox) {
    alert("Please Select Testname");
    //console.log("asa")
    return false;
  }
}
</script>-->
    <script src="../JS/testgen.js"></script>

</body>
</html>