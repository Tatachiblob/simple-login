<?php require 'Account.php';?>
<?php
session_start();
$accounts = $_SESSION["accounts"];
$newUser = new Account($_POST["username"], $_POST["password"]);
$isDup = false;
foreach ($accounts as $acc) {
  if($acc->username == $newUser->username){
    $isDup = true;
  }
}
?>
<!DOCTYPE>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <h1>Register Result</h1>
  <?php
  if($isDup){
    echo "<p>Sorry, username ". $newUser->username . " is taken.</br>Please choose a new username.</p>";
    echo "<p>Click <a href=\"register.html\">here</a> to register new account.</p>";
  }else{
    echo "<p>Register Successful.</p>";
    array_push($_SESSION["accounts"], $newUser);
  }
  ?>
  <p>Back to <a href="login.php">login</a></p>
</body>
</html>
