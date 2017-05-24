<?php require 'Account.php';?>
<?php
session_start();
$accounts = $_SESSION["accounts"];
$loginUser = new Account($_POST["username"], $_POST["password"]);
?>
<!DOCTYPE>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h1>Welcome to DocoTwt</h1>
  <?php
  if($loginUser->isSame($accounts)){
    echo "<p>Hello " . $loginUser->username ."!</p>";
    echo "<p>Continue to <a href=\"main.php\">Main Page</a></p>";
    $_SESSION["loginUser"] = $loginUser;
  }else{
    echo "<p>Opps, no account found. Please go back to <a href=\"login.php\">login page</a></p>";
  }
  ?>
</body>
</html>
