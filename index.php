<?php session_start(); ?>
<!DOCTYPE HTML> 
<html>
<head>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <input type="text" placeholder="Enter Username" name="user_name" required>
 <input type="password" placeholder="Enter Password" name="pass_word" required>
 <button type="submit">Login</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
 if ($_POST["user_name"] == "admin" and $_POST["pass_word"] == "HossainSadeqi66") {
 $_SESSION["user_name"] = $_POST["user_name"];
 header('Location: admin/admin.php');
 exit();
 }

else if ($_POST["user_name"] == "user" and $_POST["pass_word"] == "P@ssw0rd") {
 $_SESSION["user_name"] = $_POST["user_name"];
 header('Location: user/user.php');
 exit();
 }
 echo "the username or password is incorrect.";
}
?>

</body>
</html>