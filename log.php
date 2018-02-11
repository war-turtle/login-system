<?php
include 'connect.php';

if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
  $username = $_POST['username'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $i=0;
  $sql = "SELECT * FROM login_system";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
      $i++;
      $last_id = $row['id'];
      echo $last_id;
      if($username == $row['username'] && $name == $row['name'] && $email == $row['email']){
        echo '<script type="text/javascript">window.alert("user exists")</script>';
        header("refresh:0.1;url=../login/index.php");
        die();
      }
    }
    $sql = "INSERT INTO login_system (username,name,email,password) VALUES ('$username','$name','$email','$password')";
    if($conn->query($sql)){
      echo "<!DOCTYPE html>
      <html>
        <head>
          <meta charset='utf-8'>
          <title>kartik's webpage</title>
          <link rel='stylesheet' href='style.css'>
        </head>
        <body>
          <p>logged in successfully</p>
          <h1>
            Welcome $name to Kartik Yadav website
          </h1>
        </body>
      </html>";
  }
} else {
  echo "please fill out the form";
}

$conn->close();
?>
