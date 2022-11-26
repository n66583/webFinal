<?php session_start(); if ($_SESSION["user_name"] != "admin") { exit(); } ?>
<!DOCTYPE HTML> 
<html>
<head>
</head>
<body>

<p>Hello admin!</p>

</body>
</html>
