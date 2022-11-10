<?php
    include "../controller/UserDataHandler.php";

    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }

    if(!isset($_SESSION["error"])){$_SESSION["error"]="";}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Common.css">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css"> 
</head>
<body>

	<div class="card">
        <form id="form" method="post" onsubmit="return Validate()" action="../controller/verifyLogin.php">
            <h1 style="text-align: center;">Login</h1>
            <div class="icon-field-1">
                <label class="label" for="id">ID:</label><br>
                <i class="fa-solid fa-user icon"></i>
                <input class="text-box" type="text" name="id" id="id" oninput="Validate()">
                <div id='iderror' class="msg"><small class="error">This field is required!</small></div>
            </div>
            <div class="icon-field-2">
                <label class="label" for="password">Password:</label><br>
                <i class="fa-solid fa-key icon"></i>
                <input class="text-box" type="password" name="password" id="password" oninput="Validate()">
                <div id='passerror' class="msg"><small class="error">This field is required!</small></div>
            </div>
            <?php

                if($_SESSION["error"]!="")
                {
                    echo "<small style='color: red;'>".$_SESSION["error"]."</small>";
                    echo "<br>";
                }
            ?>
            <div>
                <a href="#">Forgot password?</a>
            </div>

            <button id="submit" type="submit" name="submit">Login</button>
            <footer style="text-align: center; margin-top: 10px">Don't have an account?<a href="register.php">Sign Up</a></footer>
        </form>   
    </div>

    <script src="https://kit.fontawesome.com/e9c2194c00.js" crossorigin="anonymous"></script>
    <script src="../JS/jquery-3.6.0.js"></script>
    <script src="../JS/login.js"></script>
</body>
</html>