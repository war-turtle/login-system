<?php

if(isset($_GET['name'])){
  $content = $_GET['name'];
  if($content == 'sign'){
    echo '<form action="data.php" method="post">
      <p>Username Or Id:</p><br><input type="text" name="username"><br><br>
      <p>Password:</p><br><input type="password" name="password"><br><br>
      <input type="submit" value="Submit">
    </form>';
  }
  if($content == 'login'){
    echo '<form action="log.php" method="post">
      <p>Username</p><br><input type="text" name="username"><br><br>
      <p>Name:</p><br><input type="text" name="name"><br><br>
      <p>Email:</p><br><input type="email" name="email"><br><br>
      <p>Password:</p><br><input type="password" name="password"><br><br>
      <input type="submit" value="Submit">
    </form>';
  }
}
?>
