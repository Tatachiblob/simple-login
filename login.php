<?php require 'Account.php';?>
<?php
session_start();
if(!isset($_SESSION["accounts"])){
  $_SESSION["accounts"] = array();
}
$accounts = $_SESSION["accounts"];
?>
<!DOCTYPE>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Welcome to DocoTwt</h1>
  <form action="loginPage.php" method="post">
    <table>
      <tr>
        <th>Username : </th>
        <td><input type="text" name="username" required=""></td>
      </tr>
      <tr>
        <th>Password : </th>
        <td><input type="password" name="password" required=""></td>
      </tr>
      <tr>
        <td><input type="submit" value="login"></td>
      </tr>
      <tr>
        <td><a href="register.html">Register</a>
      </tr>
    </table>
  </form>
</body>
</html>
