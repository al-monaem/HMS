<?php
  include "Template.php";

  if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
  }
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Common.css">
    <link rel="stylesheet" type="text/css" href="../CSS/pthistory.css">

</head>
<script src="../JS/jquery-3.6.0.js"></script>
<body>
<center><h2>Patient History</h2><input type="text" id="inputbox" onkeyup="searchfunc()" placeholder="Search Patient">
</center>


<br>
<div id="live_data">  
</div>
</table>
<script src="../JS/searchfunc_pthistory.js"></script>
<script src="../JS/pthistory.js"></script>

</body>
</html>
