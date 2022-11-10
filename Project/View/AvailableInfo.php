<?php
    include "Template.php";

    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    //$dataHandler = new UserDataHandler;
    $id = $_SESSION["id"];
/*
    if(!isset($_SESSION["availTime"])){$_SESSION["availTime"] = "";}
    if(!isset($_SESSION["id"])){$_SESSION["id"] = "";}
    if(!isset($_SESSION["availdate"])){$_SESSION["availdate"] = "";}
    if(!isset($_SESSION["error"])){$_SESSION["error"] = "";}
    if(!isset($_SESSION["success"])){$_SESSION["success"] = "";}
    $isPost = false;
    if(isset($_POST["submit"])){
        $isPost = true;
        if(isset($_POST["availTime"]))
        {
            $_SESSION["availTime"]=$_POST["availTime"];
        }
        if(isset($_POST["availdate"]))
        {
            $_SESSION["availdate"]=$_POST["availdate"];
        }
    }

if($isPost){
    header("Location: ../Controller/AvailableInfo_Controller.php");
    exit();
}
*/

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
            <link rel="stylesheet" type="text/css" href="../css/otinitiate.css">

</head>
<body>
    <form id="form" class="card" method="post">
        <h1 style="text-align: center;">Available Time Set</h1>
        <div>
            <label class="label" for="availdate">Date:</label><br>
            <input type="date" id="availdate" name="availdate">
        </div>
        <div style="margin-bottom: 5px;">
            <label class="label" for="slot">Time Slot:</label><br>
            <input type="radio" name="availTime" value="12AM-8AM" <?php /*if(isset($_SESSION["availTime"])=="12AM-8AM") {echo "checked";}*/?>> &nbsp; 12AM-8AM
            <br>
            <input type="radio" name="availTime" value="8AM-4PM" <?php /*if($_SESSION["availTime"]=="8AM-4PM") {echo "checked";}*/?>> &nbsp; 8AM-4PM
            <br>
            <input type="radio" name="availTime" value="4PM-12AM" <?php /*if($_SESSION["availTime"]=="4PM-12AM") {echo "checked";}*/?>> &nbsp; 4PM-12AM
        </div>
        <div id="msg"></div>

                    <?php
                      /*  if($_SESSION["error"] != "")
                        {
                            echo '<span style="color:red; margin-left:20px">'.$_SESSION["error"].'</span>';
                            echo "<br>";
                        }
                        else if($_SESSION["success"] != "")
                        {
                            echo '<span style="color:green; margin-left:20px">'.$_SESSION["success"].'</span>';
                            echo "<br>";
                        }
                        $_SESSION["success"] =="";*/
                    ?>        
        <button id="submit" name="submit" type="submit" style="margin-top: 10px;">Submit</button>
        </form>
<script src="../JS/avl.js"></script>
</body>
</html>