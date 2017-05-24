<?php require 'Account.php';?>
<?php
session_start();
$loginUser = $_SESSION["loginUser"];
if(!isset($_SESSION["messages"])){
  $_SESSION["messages"] = array();
}
if(isset($_POST["msg"])){
  array_push($_SESSION["messages"], $loginUser->username . ":" . $_POST["msg"]);
}
$messages = $_SESSION["messages"];
?>
<!DOCTYPE>
<html>
<head>
  <title>DocoTwt</title>
</head>
<body>
  <h1>Hello <?php echo $loginUser->username; ?></h1>
  <a href="logout.php">Logout</a>
  <h6>Post Message</h6>
  <form action="main.php" method="post">
    <input type="text" name="msg" required="" placeholder="post message">
    <input type="submit" value="Twt">
  </form>
  <h6>Twted Messages</h6>
  <?php
  for($i = count($messages) - 1; $i >= 0; $i--){
    echo "<p>". $messages[$i] ."</p>";
  }
  ?>
</body>
</html>
